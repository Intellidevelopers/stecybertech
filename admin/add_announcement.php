<?php
require('functions.php');
// Get form data
$user_experience = $_POST['user_experience'];
$title = $_POST['title'];
$summary = $_POST['summary'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO announcements (user_experience_options, title, summary) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $user_experience, $title, $summary);

// Execute and check
if ($stmt->execute()) {
    echo "Announcement created successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
