<?php
// Database connection details
require('functions.php');

// Handle form submission for course creation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['publish'])) {
    // Collect form data
    $course_title = $_POST['course_title'];
    $course_slug = $_POST['course_slug'];
    $about_course = $_POST['about_course'];
    $category = $_POST['category'];
    $price_type = $_POST['price_type'];
    $regular_price = !empty($_POST['regular_price']) ? $_POST['regular_price'] : NULL;
    $discount_price = !empty($_POST['discount_price']) ? $_POST['discount_price'] : NULL;
    $content_drip_enabled = isset($_POST['content_drip_enabled']) ? 1 : 0;
    $thumbnail_url = $_FILES['thumbnail_url']['name'];
    $video_source = $_POST['video_source'];
    $video_link = $_POST['video_link'];
    $what_will_learn = $_POST['what_will_learn'];
    $target_audience = $_POST['target_audience'];
    $course_duration_hour = $_POST['course_duration_hour'];
    $course_duration_min = $_POST['course_duration_min'];
    $materials_included = $_POST['materials_included'];
    $requirements_instructions = $_POST['requirements_instructions'];
    $course_tags = $_POST['course_tags'];
    $status = $_POST['status'];

    // Handle file upload for thumbnail
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["thumbnail_url"]["name"]);
    
    // Check if the uploaded file is a valid image
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $valid_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $valid_extensions)) {
        echo "Error: Only JPG, JPEG, PNG & GIF files are allowed.";
        exit();
    }
    
    // Move uploaded file
    if (move_uploaded_file($_FILES["thumbnail_url"]["tmp_name"], $target_file)) {
        echo "Thumbnail uploaded successfully.<br>";
    } else {
        echo "Error uploading thumbnail.<br>";
    }

    // Prepare SQL statement
    $sql = "INSERT INTO course (
        course_title, 
        course_slug, 
        about_course, 
        category, 
        price_type, 
        regular_price, 
        discount_price, 
        content_drip_enabled, 
        thumbnail_url, 
        video_source, 
        video_link, 
        what_will_learn, 
        target_audience, 
        course_duration_hour, 
        course_duration_min, 
        materials_included, 
        requirements_instructions, 
        course_tags,
        status
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo "Error preparing statement: " . $conn->error;
        exit;
    }

    // Bind parameters (ensure correct data types)
    $stmt->bind_param(
        "ssssssddssssiiissss", // Adjust types as needed
        $course_title, 
        $course_slug, 
        $about_course, 
        $category, 
        $price_type, 
        $regular_price, 
        $discount_price, 
        $content_drip_enabled, 
        $thumbnail_url, 
        $video_source, 
        $video_link, 
        $what_will_learn, 
        $target_audience, 
        $course_duration_hour, 
        $course_duration_min, 
        $materials_included, 
        $requirements_instructions, 
        $course_tags,
        $status
    );

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Course created successfully!";
        header('Location: success.php');
        exit();
    } else {
        echo "Error creating course: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
