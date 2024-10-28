<?php
require('functions.php'); // Include your database connection file

// Fetch announcements from the database
$sql = "SELECT * FROM announcements ORDER BY created_at DESC";
$result = $conn->query($sql);

// Initialize an empty array to store announcements
$announcements = [];

// Check if there are results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $announcements[] = $row; // Store each announcement in the array
    }
} 
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themewant.com/Stecybertech/announcement.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 23:00:04 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STE CYBERTECH LTD </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.css">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="assets/css/vendor/metismenu.css">
    <!-- custom style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- header style one -->
    <!-- header style one -->
    <header class="header-one v-2 header--sticky">
        <div class="header-top-one-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-one">
                            <div class="left-information">
                                <a href="mailto:someone@example.com" class="email"><i class="fa-light fa-envelope"></i>support@stecybertech.com.ng</a>
                                <a href="tel:+4733378901" class="email"><i class="fa-light fa-phone"></i>+234 808 888 6823</a>
                            </div>
                            <div class="right-information">
                                <div class="right-information">
                                    <ul class="rts-dropdown-menu switcher-language">
                                        <li class="has-child-menu">
                                            <a href="#">
                                                <img class="left-image" src="assets/images/flag-01.svg" alt="Language Images">
                                                <span class="menu-item">English</span>
                                                <i class="fa-regular fa-chevron-down"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="assets/images/flag-03.svg" alt="Language Images">
                                                        <span class="menu-item">Deutsch</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="assets/images/flag-02.svg" alt="Language Images">
                                                        <span class="menu-item">Portuguese</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="assets/images/flag-04.svg" alt="Language Images">
                                                        <span class="menu-item">Russian</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="rts-dropdown-menu switcher-currency">
                                        <li class="has-child-menu">
                                            <a href="#">
                                                <span class="menu-item">USD</span>
                                                <i class="fa-regular fa-chevron-down"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-item">Euro</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-item">Real</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-item">Ruble</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-one-wrapper">
                        <div class="left-side-header">
                            <a href="home.php" class="logo-area">
                                <img src="assets/images/logo/logo-1.svg" alt="logo">
                            </a>

                            <div class="main-nav-one">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown" style="position: static;">
                                            <a class="nav-link" href="#">Home</a>

                                            <ul class="megamenu-hub">
                                                <li>
                                                    <ul class="">
                                                        <li>
                                                            <a href="home.php">Main Home</a>
                                                        </li>
                                                        <li>
                                                            <a href="index-two.html">Online course </a>
                                                            <span class="popular">Popular</span>
                                                        </li>
                                                        <li>
                                                            <a href="index-three.html">Course hub</a>
                                                            <span>Hot</span>
                                                        </li>
                                                        <li><a href="index-four.html">Distance learning</a></li>
                                                        <li>
                                                            <a href="index-five.html">Single Instructor</a>
                                                            <span>Hot</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="">
                                                        <li>
                                                            <a href="index-six.html">Language Academy</a>
                                                            <span>Hot</span>
                                                        </li>
                                                        <li><a href="index-seven.html">Gym Instructor</a></li>
                                                        <li>
                                                            <a href="index-eight.html">Kitchen coach</a>
                                                            <span class="popular">Popular</span>
                                                        </li>
                                                        <li><a href="index-nine.html">Course Portal</a></li>
                                                        <li><a href="index-ten.html">Business coach</a></li>
                                                    </ul>
                                                    <div class="absolute-image-shape shape-image">
                                                        <img class=" shape one" src="assets/images/nav/02.png" data-speed="0.04" data-revert="true" alt="nav">
                                                        <img class=" shape two" src="assets/images/nav/03.png" data-speed="0.04" alt="nav">
                                                    </div>
                                                    <div class="nav-mega-image">
                                                        <a href="single-course.html">
                                                            <img src="assets/images/nav/01.jpg" alt="nav">
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="has-dropdown">
                                            <a class="nav-link" href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="about-two.html">About Two</a></li>
                                                <li><a href="instructor-profile.html">Profile</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li class="sub-dropdown">
                                                    <a href="javascript:void(0);">Zoom</a>
                                                    <ul class="submenu third-lvl base">
                                                        <li><a class="mobile-menu-link" href="zoom-meeting.html">Zoom Meeting</a></li>
                                                        <li><a class="mobile-menu-link" href="zoom-details.html">Zoom Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-dropdown">
                                                    <a href="javascript:void(0);">Event</a>
                                                    <ul class="submenu third-lvl base">
                                                        <li><a class="mobile-menu-link" href="event.html">Event</a></li>
                                                        <li><a class="mobile-menu-link" href="event-2.html">Event Two</a></li>
                                                        <li><a class="mobile-menu-link" href="event-details.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-dropdown">
                                                    <a href="javascript:void(0);">Shop</a>
                                                    <ul class="submenu third-lvl base">
                                                        <li><a class="mobile-menu-link" href="shop.html">Shop</a></li>
                                                        <li><a class="mobile-menu-link" href="product-details.html">Product Details</a></li>
                                                        <li><a class="mobile-menu-link" href="checkout.html">Checkout</a></li>
                                                        <li><a class="mobile-menu-link" href="cart.html">Cart</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown" style="position: static;">
                                            <a class="nav-link" href="#">Courses</a>
                                            <ul class="megamenu-hub min-mega shape-move">
                                                <li>
                                                    <ul class="">
                                                        <li class="parent"><a href="#">Courses</a></li>
                                                        <li><a class="mobile-menu-link" href="course-one.html">Courses</a></li>
                                                        <li><a class="mobile-menu-link" href="course-two.html">Course List</a></li>
                                                        <li><a class="mobile-menu-link" href="course-three.html">Course Grid</a></li>
                                                        <li><a class="mobile-menu-link" href="course-four.html">Course List Two</a></li>
                                                        <li><a class="mobile-menu-link" href="course-five.php">Course Grid Two</a></li>
                                                        <li><a class="mobile-menu-link" href="course-six.html">Course Grid Three</a></li>
                                                    </ul>
                                                    <ul class="">
                                                        <li class="parent"><a href="#">Courses Details</a></li>
                                                        <li><a class="mobile-menu-link" href="single-course.html">Course Details</a></li>
                                                        <li><a class="mobile-menu-link" href="single-course-two.html">Course Details v2</a></li>
                                                        <li><a class="mobile-menu-link" href="single-course-three.html">Course Details v3</a></li>
                                                        <li><a class="mobile-menu-link" href="single-course-four.html">Course Details v4</a></li>
                                                        <li><a class="mobile-menu-link" href="single-course-five.php">Course Details v5</a></li>
                                                        <li><a class="mobile-menu-link" href="single-course-free.html">Course Details Free</a></li>
                                                    </ul>
                                                    <ul class="">
                                                        <li class="parent"><a href="#">Others</a></li>
                                                        <li><a href="become-instructor.html">Become an Instructor</a></li>
                                                        <li><a href="instructor-profile.html">Instructor Profile</a></li>
                                                        <li><a href="instructor.html">Instructor</a></li>
                                                        <li><a href="pricing.html">Membership Plan</a></li>
                                                        <li><a href="index.php">Log In</a></li>
                                                        <li><a href="registration.php">Registration</a></li>
                                                    </ul>
                                                    <div class="thumbnav-area">
                                                        <!-- single thumbnav -->
                                                        <a href="create-course.php" class="single-thumbnav">
                                                            <div class="icon">
                                                                <img src="assets/images/nav/04.png" alt="nav">
                                                            </div>
                                                            <span>Create Course</span>
                                                        </a>
                                                        <!-- single thumbnav end -->
                                                        <!-- single thumbnav -->
                                                        <a href="lesson-details.html" class="single-thumbnav mash">
                                                            <div class="icon">
                                                                <img src="assets/images/nav/05.png" alt="nav">
                                                            </div>
                                                            <span>Lesson Details</span>
                                                        </a>
                                                        <!-- single thumbnav end -->
                                                        <!-- single thumbnav -->
                                                        <a href="instructor.html" class="single-thumbnav">
                                                            <div class="icon">
                                                                <img src="assets/images/nav/06.png" alt="nav">
                                                            </div>
                                                            <span>Instructor</span>
                                                        </a>
                                                        <!-- single thumbnav end -->
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a class="nav-link" href="#">Dashboard</a>
                                            <ul class="submenu">
                                                <li class="sub-dropdown">
                                                    <a class="submenu-link" href="javascript:void(0);">Instructor Dashboard</a>
                                                    <ul class="submenu third-lvl base">
                                                        <li><a class="mobile-menu-link" href="dashboard.php">Dashboard</a></li>
                                                        <li><a class="mobile-menu-link" href="my-profile.html">My Profile</a></li>
                                                        <li><a class="mobile-menu-link" href="enroll-course.php">Enroll Course</a></li>
                                                        <li><a class="mobile-menu-link" href="wishlist.html">Wishlist</a></li>
                                                        <li><a class="mobile-menu-link" href="reviews.html">Reviews</a></li>
                                                        <li><a class="mobile-menu-link" href="quick-attempts.html">Quick Attempts</a></li>
                                                        <li><a class="mobile-menu-link" href="order-history.html">Order History</a></li>
                                                        <li><a class="mobile-menu-link" href="question-answer.html">Question Answer</a></li>
                                                        <li><a class="mobile-menu-link" href="calender.html">Calender</a></li>
                                                        <li><a class="mobile-menu-link" href="my-course.php">My Course</a></li>
                                                        <li><a class="mobile-menu-link" href="announcement.php">Announcement</a></li>
                                                        <li><a class="mobile-menu-link" href="assignments.html">Assignments</a></li>
                                                        <li><a class="mobile-menu-link" href="certificate.html">Certificate</a></li>
                                                    </ul>
                                                </li>
                                                <li class="sub-dropdown">
                                                    <a class="submenu-link" href="javascript:void(0);">Students Dashboard</a>
                                                    <ul class="submenu third-lvl base">
                                                        <li><a class="mobile-menu-link" href="student-dashboard.php">Dashboard</a></li>
                                                        <li><a class="mobile-menu-link" href="student-profile.html">My Profile</a></li>
                                                        <li><a class="mobile-menu-link" href="student-enroll-course.php">Enroll Course</a></li>
                                                        <li><a class="mobile-menu-link" href="student-wishlist.html">Wishlist</a></li>
                                                        <li><a class="mobile-menu-link" href="student-reviews.html">Reviews</a></li>
                                                        <li><a class="mobile-menu-link" href="student-quick-attempts.html">Quick Attempts</a></li>
                                                        <li><a class="mobile-menu-link" href="student-order-history.html">Order History</a></li>
                                                        <li><a class="mobile-menu-link" href="student-question-answer.html">Question Answer</a></li>
                                                        <li><a class="mobile-menu-link" href="student-calender.html">Calender</a></li>
                                                        <li><a class="mobile-menu-link" href="student-settings.html">Student Settings</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a class="nav-link" href="#">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                        <div class="header-right-area-one">
                            <div class="actions-area">
                                <div class="search-btn" id="search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <path d="M19.9375 18.9652L14.7454 13.7732C15.993 12.2753 16.6152 10.3542 16.4824 8.40936C16.3497 6.46453 15.4722 4.64575 14.0326 3.33139C12.593 2.01702 10.7021 1.30826 8.75326 1.35254C6.8044 1.39683 4.94764 2.19075 3.56924 3.56916C2.19083 4.94756 1.39691 6.80432 1.35263 8.75317C1.30834 10.702 2.0171 12.5929 3.33147 14.0325C4.64584 15.4721 6.46461 16.3496 8.40944 16.4823C10.3543 16.6151 12.2754 15.993 13.7732 14.7453L18.9653 19.9374L19.9375 18.9652ZM2.75 8.93742C2.75 7.71365 3.11289 6.51736 3.79278 5.49983C4.47267 4.4823 5.43903 3.68923 6.56965 3.22091C7.70026 2.7526 8.94436 2.63006 10.1446 2.86881C11.3449 3.10756 12.4474 3.69686 13.3127 4.56219C14.1781 5.42753 14.7674 6.53004 15.0061 7.7303C15.2449 8.93055 15.1223 10.1747 14.654 11.3053C14.1857 12.4359 13.3926 13.4022 12.3751 14.0821C11.3576 14.762 10.1613 15.1249 8.9375 15.1249C7.29703 15.1231 5.72427 14.4706 4.56429 13.3106C3.4043 12.1506 2.75182 10.5779 2.75 8.93742Z" fill="#553CDF" />
                                    </svg>
                                </div>
                                <div class="cart cart-icon">
                                    <i class="fa-regular fa-cart-shopping"></i>
                                </div>
                            </div>
                            <div class="buttons-area">
                                <a href="index.php" class="rts-btn btn-border">Log In</a>
                                <a href="registration.php" class="rts-btn btn-primary">Sign Up</a>
                            </div>
                            <div class="menu-btn" id="menu-btn">
                                <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                    <rect width="20" height="2" fill="#1F1F25"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header style end -->
    <!-- header style end -->


    <!-- dashboard banner area start -->
    <div class="dashboard-banner-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard-banner-area-start bg_image">
                        <div class="rating-area-banner-dashboard">
                            <div class="stars">
                                <span>4.5</span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <p>Digital Marketing Instructor</p>
                            <a href="create-course.php" class="create-btn"><i class="fa-regular fa-circle-plus"></i> Create a New Course</a>
                        </div>
                        <div class="author-profile-image-and-name">
                            <div class="profile-pic">
                                <img src="assets/images/dashboard/01.png" alt="dashboard">
                            </div>
                            <div class="name-desig">
                                <h1 class="title">STE CYBERTECH LTD</h1>
                                <div class="course-vedio">
                                    <div class="single">
                                        <i class="fa-light fa-users"></i>
                                        <span>1350 Students</span>
                                    </div>
                                    <div class="single">
                                        <i class="fa-regular fa-video"></i>
                                        <span>26 Course</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dashboard banner area end -->


    <!-- rts dahboard-area-main-wrapper -->
    <div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 rts-sticky-column-item">
                    <div class="left-sindebar-dashboard  theiaStickySidebar">
                        <div class="dashboard-left-single-wrapper">
                            <!-- single item -->
                            <a href="dashboard.php" class="single-item ">
                                <i class="fa-light fa-house"></i>
                                <p>Dashboard</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="my-profile.html" class="single-item ">
                                <i class="fa-regular fa-user"></i>
                                <p>My Profile</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="enroll-course.php" class="single-item ">
                                <i class="fa-light fa-graduation-cap"></i>
                                <p>Enrolled Courses</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="wishlist.html" class="single-item">
                                <i class="fa-sharp fa-light fa-bookmark"></i>
                                <p>Wishlist</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="reviews.html" class="single-item">
                                <i class="fa-regular fa-star"></i>
                                <p>Reviews</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="quiz-attempts.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bullseye-pointer"></i>
                                <p>My Quiz Attempts</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="order-history.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bag-shopping"></i>
                                <p>Order History</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="question-answer.html" class="single-item ">
                                <i class="fa-regular fa-circle-question"></i>
                                <p>Question & Answer</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="calender.html" class="single-item ">
                                <i class="fa-light fa-calendar-days"></i>
                                <p>Calendar</p>
                            </a>
                            <!-- single item end -->
                        </div>
                        <div class="dashboard-left-single-wrapper mt--40">
                            <h4 class="title mb--5">Instructor</h4>
                            <!-- single item -->
                            <a href="my-course.php" class="single-item ">
                                <i class="fa-light fa-book"></i>
                                <p>My Courses</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="my-bundles.html" class="single-item ">
                                <i class="fa-sharp fa-regular fa-layer-group"></i>
                                <p>My Bundles</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="announcement.php" class="single-item active">
                                <i class="fa-solid fa-megaphone"></i>
                                <p>Announcements</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="withdrowals.html" class="single-item">
                                <i class="fa-regular fa-box"></i>
                                <p>Withdrawals</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="assignments.html" class="single-item">
                                <i class="fa-regular fa-page"></i>
                                <p>Assignments</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="certificate.html" class="single-item">
                                <i class="fa-sharp fa-light fa-file-certificate"></i>
                                <p>Certificate</p>
                            </a>
                            <!-- single item end -->
                        </div>
                        <div class="dashboard-left-single-wrapper bbnone mt--40">
                            <h4 class="title mb--5">User</h4>
                            <!-- single item -->
                            <a href="settings.html" class="single-item">
                                <i class="fa-sharp fa-regular fa-gear"></i>
                                <p>Settings</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="home.php" class="single-item">
                                <i class="fa-light fa-right-from-bracket"></i>
                                <p>Logout</p>
                            </a>
                            <!-- single item end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
    <div class="announcements-wrapper-dashed">
        <div class="top-announcement-wrapper">
            <div class="left-wrapper">
                <div class="icon">
                    <img src="assets/images/dashboard/announcement/01.png" alt="announcement">
                </div>
                <div class="information">
                    <span>Create Announcement</span>
                    <p>Notify all students of your course</p>
                </div>
            </div>
            <div class="right">
            <button type="button" class="rts-btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Announcement</button>
            </div>
        </div>
        <div class="rts-reviewd-area-dashed table-responsive" style="white-space: nowrap;">
            <table class="table-reviews quiz announcement" id="announcement-table">
                <thead>
                    <tr>
                        <th style="width: 30%;">Date</th>
                        <th>Announcements</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody id="announcement-list">
                <?php

// Fetch projects data from the database
$announcement = mysqli_query($conn, "SELECT * FROM announcements");

if ($announcement !== false && mysqli_num_rows($announcement) > 0) {
    while ($userItem = mysqli_fetch_assoc($announcement)) {
        // Fetch image data for the current project (assuming 'logo_1' and 'logo_2' are columns in your database)
        $product_image_path = 'uploads/' . $userItem['product_image'];
?>
                        <tr>
                            <td>
                                <div class="information-quiz">
                                    <span><?php echo date('F j, Y', strtotime($announcement['created_at'])); ?></span>
                                    <p class="quiz"><?php echo date('g:i A', strtotime($announcement['created_at'])); ?></p>
                                </div>
                            </td>
                            <td class="announcement-1">
                                <div class="left">
                                    <p><?php echo htmlspecialchars($announcement['title']); ?></p>
                                    <span><?php echo htmlspecialchars($announcement['summary']); ?></span>
                                </div>
                            </td>
                            <td>
                                <div class="information-quiz">
                                    <p class="quiz"><?php echo htmlspecialchars($announcement['user_experience_options']); ?></p>
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-danger" data-id="<?php echo $announcement['id']; ?>">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        } else {
                            // Display a message if no records found
                            echo "<div class='card'><div class='card-body'><p>No Announcement Created </p></div></div>";
                        }

                        // Close the database connection
                        mysqli_close($conn);
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




            </div>
        </div>
    </div>
    <!-- rts dahboard-area-main-wrapper end -->

    <div class="rts-section-gapTop">

    </div>

    <!-- footer dashboards area -->
    <div class="footer-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-dashboard-inner">
                        <p>Copyright © 2024 All Rights Reserved by <a href="#">Stecybertech</a></p>
                        <a href="home.php">
                            <img src="assets/images/logo/logo-4.svg" alt="logo">
                        </a>
                        <div class="social-area-dashboard-footer">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer dashboards area end -->


    <!-- Modal -->
<!-- Modal for Creating Announcement -->
<div class="modal announcement fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Announcement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="announcement-form" class="modal-form">
                    <select class="nice-select" name="user_experience" id="user_experience" required>
                        <option value="" disabled selected>User Experience</option>
                        <option value="Recently Updated Web Design">Recently Update Web Design</option>
                        <option value="Web Design Course">Web Design Course</option>
                        <option value="Update Web Design">Update Web Design</option>
                        <option value="Recently Update Web">Recently Update Web</option>
                        <option value="New Courses">Course: New Courses</option>
                    </select>
                    <div class="single-input mt--20">
                        <label for="announcement-title">Announcement Title</label>
                        <input id="announcement-title" type="text" placeholder="Announcement title" required>
                    </div>
                    <div class="single-input">
                        <label for="announcement-summary">Summary</label>
                        <textarea id="announcement-summary" placeholder="Summary..." required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="rts-btn btn-primary" id="publish-button">Publish</button>
            </div>
        </div>
    </div>
</div>

<!-- Notification Pop-Up -->
<div id="notification" class="notification" style="display: none;">Announcement created successfully!</div>

<!-- JavaScript to Handle Form Submission -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#publish-button').on('click', function() {
        // Get form data
        const userExperience = $('#user_experience').val();
        const title = $('#announcement-title').val();
        const summary = $('#announcement-summary').val();

        // Check if form is valid
        if (userExperience && title && summary) {
            // AJAX request to the PHP script
            $.ajax({
                type: 'POST',
                url: 'add_announcement.php', // Your PHP file to handle the request
                data: {
                    user_experience: userExperience,
                    title: title,
                    summary: summary
                },
                success: function(response) {
                    // Show notification
                    $('#notification').text(response).fadeIn().delay(2000).fadeOut();

                    // Clear form fields
                    $('#announcement-title').val('');
                    $('#announcement-summary').val('');
                    $('#user_experience').prop('selectedIndex', 0); // Reset the dropdown

                    // Close the modal
                    $('#exampleModal').modal('hide');

                    // Optionally, refresh the announcement list
                    loadAnnouncements();
                },
                error: function() {
                    alert('An error occurred while creating the announcement.');
                }
            });
        } else {
            alert('Please fill in all fields.');
        }
    });

    // Function to load announcements from the server
    function loadAnnouncements() {
        $.ajax({
            url: 'get_announcements.php', // Your PHP file to fetch announcements
            method: 'GET',
            success: function(data) {
                $('#announcement-list').html(data);
            }
        });
    }

    // Load announcements on page load
    loadAnnouncements();
});
</script>

<style>
.notification {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #4caf50; /* Green */
    color: white;
    padding: 15px;
    border-radius: 5px;
    z-index: 1000;
}
</style>


    <!-- cart area start -->

    <!-- cart area start -->
    <div class="cart-bar">
        <div class="cart-header">
            <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/course/cart/01.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Construct Map</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                            <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">3 ×</span>
                            <span class="product-price">$198.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="3">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/course/cart/02.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name"> Bridge product</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                            <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">2 ×</span>
                            <span class="product-price">$88.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item last-child">
                <div class="product-detail">
                    <div class="product-thumb"><img src="assets/images/course/cart/03.jpg" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Labour helmet</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Green /</span>
                            <span class="size">XL</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">$289.00</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2">
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bottom-area">
            <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
            FOR FREE SHIPPING</span>
            <span class="total-price">TOTAL: <span class="price">$556</span></span>
            <a href="checkout.html" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
            <a href="cart.html" class="view-btn cart-btn">VIEW CART</a>
        </div>
    </div>
    <!-- cart area edn -->
    <!-- cart area edn -->

    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="assets/images/banner/04.jpg" alt="elevate">
            </div>
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.html" class="rts-btn btn-primary">Let's talk</a>
                </div>
            </div>
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#" class="main">Home</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="home.php">Main Home</a></li>
                            <li><a class="mobile-menu-link" href="index-two.html">Online Course</a></li>
                            <li><a class="mobile-menu-link" href="index-three.html">Course Hub</a></li>
                            <li><a class="mobile-menu-link" href="index-four.html">Distance Learning</a></li>
                            <li><a class="mobile-menu-link" href="index-five.html">Single Instructor</a></li>
                            <li><a class="mobile-menu-link" href="index-six.html">Language Academy</a></li>
                            <li><a class="mobile-menu-link" href="index-seven.html">Gym Instructor</a></li>
                            <li><a class="mobile-menu-link" href="index-eight.html">Kitchen Coach</a></li>
                            <li><a class="mobile-menu-link" href="index-nine.html">Course Portal</a></li>
                            <li><a class="mobile-menu-link" href="index-ten.html">Business Coach</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="about.html">About Us</a></li>
                            <li><a class="mobile-menu-link" href="about-two.html">About Us Two</a></li>
                            <li><a class="mobile-menu-link" href="instructor-profile.html">Profile</a></li>
                            <li><a class="mobile-menu-link" href="contact.html">Contact</a></li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Zoom</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="zoom-meeting.html"></a>Zoom Meeting</li>
                                    <li><a href="zoom-details.html"></a>Zoom Details</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Event</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="event.html"></a>Event</li>
                                    <li><a href="event-two.html"></a>Event Two</li>
                                    <li><a href="event-details.html"></a>Event Details</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Shop</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="shop.html"></a>Shop</li>
                                    <li><a href="product-details.html"></a>Product Details</li>
                                    <li><a href="checkout.html"></a>Checkout</li>
                                    <li><a href="cart.html"></a>Cart</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Course</a>
                        <ul class="submenu mm-collapse">
                            <li><a href="#" class="tag">Courses</a></li>
                            <li><a class="mobile-menu-link" href="course-one.html">Courses</a></li>
                            <li><a class="mobile-menu-link" href="course-two.html">Course List</a></li>
                            <li><a class="mobile-menu-link" href="course-three.html">Course Grid</a></li>
                            <li><a class="mobile-menu-link" href="course-four.html">Course List Two</a></li>
                            <li><a class="mobile-menu-link" href="course-five.php">Course Grid Two</a></li>
                            <li><a class="mobile-menu-link" href="course-six.html">Course Filter</a></li>
                        </ul>
                        <ul class="submenu mm-collapse">
                            <li><a href="#" class="tag">Courses Details</a></li>
                            <li><a class="mobile-menu-link" href="single-course.html">Courses Details</a></li>
                            <li><a class="mobile-menu-link" href="single-course-two.html">Courses Details V2</a></li>
                            <li><a class="mobile-menu-link" href="single-course-three.html">Courses Details V3</a></li>
                            <li><a class="mobile-menu-link" href="single-course-four.html">Courses Details V4</a></li>
                            <li><a class="mobile-menu-link" href="single-course-five.php">Courses Details V5</a></li>
                            <li><a class="mobile-menu-link" href="single-course-free.html">Courses Details Free</a></li>
                        </ul>
                        <ul class="submenu mm-collapse">
                            <li><a href="#" class="tag">Others</a></li>
                            <li><a class="mobile-menu-link" href="become-instructor.html">Become an Instructor</a></li>
                            <li><a class="mobile-menu-link" href="instructor-profile.html">Instructor Profile</a></li>
                            <li><a class="mobile-menu-link" href="instructor.html">Instructor</a></li>
                            <li><a class="mobile-menu-link" href="pricing.html">Membership Plan</a></li>
                            <li><a class="mobile-menu-link" href="index.php">Log In</a></li>
                            <li><a class="mobile-menu-link" href="registration.php">Registration</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Dashboard</a>
                        <ul class="submenu mm-collapse">
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Instructor Dashboard</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="dashboard.php"></a>Dashboard</li>
                                    <li><a href="my-profile.html"></a>My Profile</li>
                                    <li><a href="enroll-course.php"></a>Enroll Course</li>
                                    <li><a href="wishlist.html"></a>Wishlist</li>
                                    <li><a href="reviews.html"></a>Reviews</li>
                                    <li><a href="quick-attempts.html"></a>Quick Attempts</li>
                                    <li><a href="order-history.html"></a>Order History</li>
                                    <li><a href="question-answer.html"></a>Question Answer</li>
                                    <li><a href="calender.html"></a>Calender</li>
                                    <li><a href="my-course.php"></a>My Course</li>
                                    <li><a href="announcement.php"></a>Announcement</li>
                                    <li><a href="assignments.html"></a>Assignments</li>
                                    <li><a href="certificate.html"></a>Certificate</li>
                                </ul>
                            </li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Students Dashboard</a>
                                <ul class="submenu-third-lvl mm-collapse">
                                    <li><a href="student-dashboard.php"></a>Dashboard</li>
                                    <li><a href="student-profile.html"></a>My Profile</li>
                                    <li><a href="student-enroll-course.php"></a>Enroll Course</li>
                                    <li><a href="student-wishlist.html"></a>Wishlist</li>
                                    <li><a href="student-reviews.html"></a>Reviews</li>
                                    <li><a href="student-quick-attempts.html"></a>Quick Attempts</li>
                                    <li><a href="student-order-history.html"></a>Order History</li>
                                    <li><a href="student-question-answer.html"></a>Question Answer</li>
                                    <li><a href="student-calender.html"></a>Calender</li>
                                    <li><a href="student-settings.html"></a>Students Settings</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Blog</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="mobile-menu-link" href="blog.html">Blog</a></li>
                            <li><a class="mobile-menu-link" href="blog-grid.html">Blog Grid</a></li>
                            <li><a class="mobile-menu-link" href="blog-list.html">Blog List</a></li>
                            <li><a class="mobile-menu-link" href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                            <li><a class="mobile-menu-link" href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <div class="buttons-area">
                <a href="#" class="rts-btn btn-border">Log In</a>
                <a href="#" class="rts-btn btn-primary">Sign Up</a>
            </div>

            <div class="rts-social-style-one pl--20 mt--50">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    <!-- modal -->
    <div id="myModal-1" class="modal fade" role="dialog">
        <div class="modal-dialog bg_image">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="fa-light fa-x"></i></button>
                </div>
                <div class="modal-body text-center">
                    <div class="inner-content">
                        <div class="title-area">
                            <span class="pre">Get Our Courses Free</span>
                            <h4 class="title">Wonderful for Learning</h4>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Your Mail.." required>
                            <button>Download Now</button>
                            <span>Your information will never be shared with any third party</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts backto top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- rts backto top end -->

    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- offcanvase search -->
    <div id="anywhere-home" class="">
    </div>

    <!-- all scripts -->
    <!-- jquery min js -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <!-- jquery ui js -->
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <!-- metismenu js -->
    <script src="assets/js/vendor/metismenu.js"></script>
    <!-- magnific popup js-->
    <script src="assets/js/vendor/magnifying-popup.js"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="assets/js/plugins/swiper.js"></script>
    <!-- counterup js -->
    <script src="assets/js/plugins/counterup.js"></script>
    <!-- waypoint js -->
    <script src="assets/js/vendor/waypoint.js"></script>
    <!-- wow js -->
    <script src="assets/js/vendor/waw.js"></script>
    <!-- isotop mesonary -->
    <script src="assets/js/plugins/isotop.js"></script>
    <!-- jquery imageloaded -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- resize sensor js -->
    <script src="assets/js/plugins/resizer-sensor.js"></script>
    <!-- sticky sidebar -->
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <!-- gsap twinmax js -->
    <script src="assets/js/plugins/twinmax.js"></script>
    <!-- chroma js -->
    <script src="assets/js/vendor/chroma.min.js"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <!-- dymanic Contact Form -->
    <script src="assets/js/plugins/contact.form.js"></script>
    <!-- calender js -->
    <script src="assets/js/plugins/calender.js"></script>
    <!-- main Js -->
    <script src="assets/js/main.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    // Add click event listener for all delete buttons
    document.querySelectorAll('.btn-danger').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault();
            // Get the announcement ID from the data-id attribute
            const announcementId = this.getAttribute('data-id');

            // Display SweetAlert confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this announcement!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                // If user confirms deletion, redirect to delete script with announcement ID
                if (result.isConfirmed) {
                    window.location.href = 'delete_announcement.php?id=' + announcementId;
                }
            });
        });
    });
});
</script>

</body>


<!-- Mirrored from html.themewant.com/Stecybertech/announcement.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 23:00:06 GMT -->
</html>