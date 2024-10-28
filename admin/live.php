<?php
require('functions.php');

// Check if the user is logged in
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: index.php");
    exit();
}

// Check the user role
$userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agora Live Stream with Screen Share and Sound</title>
    <script src="https://cdn.jsdelivr.net/npm/agora-rtc-sdk-ng@4.8.0"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .container{
            width: 800px;
            max-width: 100%;
            padding: 20px;
            border-radius: 10px;
            background-color: white;
            overflow: hidden;
        }
        h1{
            fontweight: 900;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 class="text-center mt-5">STE CYBERTECH ONLINE CLASS</h1>
        <P class="text-center mt-1">Welcome to our online class, kindly join to start.</P>
        
        <!-- Conditionally show buttons based on the role -->
        <div class="text-center mt-4">
            <?php if ($userRole === 'admin'): ?>
                <!-- Show Start/Stop Live Class button for the host -->
                <button id="startStopLiveClass" class="btn btn-primary">Start Live Class (Host)</button>
                <!-- Mute/Unmute Button for the host -->
                <button id="muteMic" class="btn btn-warning">Mute Mic</button>
            <?php elseif ($userRole === 'student'): ?>
                <!-- Show Join/End Live Class button for students -->
                <button id="joinEndLiveClass" class="btn btn-success">Join Live Class (Participant)</button>
            <?php else: ?>
                <p>You do not have the correct permissions.</p>
            <?php endif; ?>
        </div>

        <!-- Video Player for Screen Share (Participant) -->
        <div class="mt-5 text-center">
            <div id="local-player" style="width: 640px; height: 360px; background-color: black;"></div>
            <button id="toggleSize" class="btn btn-secondary mt-3">Expand Screen</button> <!-- Toggle fullscreen button -->
        </div>
    </div>

    <script>
        // Agora app and channel details
        const AGORA_APP_ID = "edecf9346e3647a09bd9f1078cab0d89"; // Replace with your Agora App ID
        const CHANNEL = "stecybertech"; // Replace with your channel name
        const TOKEN = null; // Use token if required, else null

        let client;
        let localScreenTrack;
        let localAudioTrack; // For microphone mute/unmute
        let liveActive = false; // To toggle between start/stop for host
        let isFullscreen = false; // To toggle screen size

        // Persistent live stream across page reloads
        if (localStorage.getItem('liveActive') === 'true') {
            liveActive = true;
            if (document.getElementById("startStopLiveClass")) {
                document.getElementById("startStopLiveClass").textContent = "Stop Live Class (Host)";
            }
        }

        // For Host: Start/Stop live class and Mute/Unmute Mic
        const startStopButton = document.getElementById("startStopLiveClass");
        const muteMicButton = document.getElementById("muteMic");

        if (startStopButton) {
            startStopButton.addEventListener("click", async function() {
                if (!liveActive) {
                    await startLiveStream();
                } else {
                    stopLiveStream();
                }
            });
        }

        if (muteMicButton) {
            muteMicButton.addEventListener("click", function() {
                if (localAudioTrack) {
                    if (localAudioTrack.muted) {
                        localAudioTrack.setMuted(false);
                        muteMicButton.textContent = "Mute Mic";
                    } else {
                        localAudioTrack.setMuted(true);
                        muteMicButton.textContent = "Unmute Mic";
                    }
                }
            });
        }

        // For Students: Join/End live class
        const joinEndButton = document.getElementById("joinEndLiveClass");
        if (joinEndButton) {
            joinEndButton.addEventListener("click", async function() {
                if (joinEndButton.textContent === "Join Live Class (Participant)") {
                    await joinLiveStream();
                    joinEndButton.textContent = "End Live Class";
                } else {
                    leaveLiveStream();
                }
            });
        }

        // Function to start live streaming for the host
        async function startLiveStream() {
            client = AgoraRTC.createClient({ mode: "rtc", codec: "vp8" });

            // Host joins the channel
            await client.join(AGORA_APP_ID, CHANNEL, TOKEN, null);

            // Host starts screen sharing with sound
            try {
                localScreenTrack = await AgoraRTC.createScreenVideoTrack({
                    encoderConfig: "1080p_1",
                    screenAudio: true  // Enable screen audio
                });

                // Host microphone track (for muting/unmuting)
                localAudioTrack = await AgoraRTC.createMicrophoneAudioTrack();

                await client.publish([localScreenTrack, localAudioTrack]);

                // Play the local screen share stream for the host
                localScreenTrack.play("local-player");

                liveActive = true;
                localStorage.setItem('liveActive', 'true'); // Persist live state
                startStopButton.textContent = "Stop Live Class (Host)";
                console.log("Screen sharing with sound started for host!");
            } catch (err) {
                console.error("Error starting screen sharing:", err);
            }
        }

        // Function to stop live streaming for the host
        function stopLiveStream() {
            if (client && localScreenTrack && localAudioTrack) {
                client.unpublish([localScreenTrack, localAudioTrack]);

                // Close the tracks
                localScreenTrack.close();
                localAudioTrack.close();
            }

            liveActive = false;
            localStorage.setItem('liveActive', 'false'); // Clear live state
            startStopButton.textContent = "Start Live Class (Host)";
            console.log("Live class stopped.");
        }

        // Function for students to join the live stream
        async function joinLiveStream() {
            client = AgoraRTC.createClient({ mode: "rtc", codec: "vp8" });

            // Participant joins the channel
            await client.join(AGORA_APP_ID, CHANNEL, TOKEN, null);

            // When a user joins, subscribe to the host's screen share stream only (no user video)
            client.on("user-published", async (user, mediaType) => {
                await client.subscribe(user, mediaType);
                
                if (mediaType === "video") {
                    const remoteVideoTrack = user.videoTrack;
                    remoteVideoTrack.play("local-player"); // Play the stream for the participant
                    console.log("Joined live class and displaying screen share!");
                }
            });
        }

        // Function to end live stream for students
        function leaveLiveStream() {
            client.leave();
            joinEndButton.textContent = "Join Live Class (Participant)";
            console.log("Left the live class.");
        }

        // Toggle between fullscreen and small screen
        const toggleSizeButton = document.getElementById("toggleSize");
        toggleSizeButton.addEventListener("click", function() {
            const player = document.getElementById("local-player");
            if (!isFullscreen) {
                player.style.width = "100%";
                player.style.height = "100vh";
                toggleSizeButton.textContent = "Shrink Screen";
            } else {
                player.style.width = "640px";
                player.style.height = "360px";
                toggleSizeButton.textContent = "Expand Screen";
            }
            isFullscreen = !isFullscreen;
        });

    </script>

</body>
</html>
