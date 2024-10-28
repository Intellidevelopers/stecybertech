<?php
session_start(); // Start the session to access session variables

$message = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : 'Operation completed successfully!';
unset($_SESSION['success_message']); // Clear the message after displaying it
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            padding: 20px;
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        h1 {
            color: #28a745;
            font-size: 2rem;
            margin-bottom: 15px;
        }

        p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Success!</h1>
        <p><?php echo htmlspecialchars($message); ?></p>
        <a href="create-course.php">Create another course</a>
    </div>
</body>
</html>

