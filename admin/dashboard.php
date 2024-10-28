<?php
require('functions.php');
// Start session and check if user is logged in

// Check if the user is logged in
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../admin/");
    exit();
}

// Check the user role
$userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : '';

// Show different content based on the user role
if ($userRole == 'admin') {
} elseif ($userRole == 'student') {
} else {
    echo '<p>You do not have the correct permissions.</p>';
}
?>

<?php

// Initialize arrays to store courses by status
$publishedCourses = [];
$pendingCourses = [];
$draftCourses = [];

// Query to fetch published courses
$publishedQuery = "SELECT id, course_title, course_slug, about_course, category, price_type, 
    regular_price, discount_price, content_drip_enabled, thumbnail_url, video_source, 
    video_link, what_will_learn, target_audience, course_duration_hour, 
    course_duration_min, materials_included, requirements_instructions, 
    course_tags, created_at, updated_at, status 
    FROM course WHERE status = 'published'";

$result = $conn->query($publishedQuery);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $publishedCourses[] = $row;
    }
}

// Query to fetch pending courses
$pendingQuery = "SELECT id, course_title, course_slug, about_course, category, price_type, 
    regular_price, discount_price, content_drip_enabled, thumbnail_url, video_source, 
    video_link, what_will_learn, target_audience, course_duration_hour, 
    course_duration_min, materials_included, requirements_instructions, 
    course_tags, created_at, updated_at, status 
    FROM course WHERE status = 'pending'";

$result = $conn->query($pendingQuery);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $pendingCourses[] = $row;
    }
}

// Query to fetch draft courses
$draftQuery = "SELECT id, course_title, course_slug, about_course, category, price_type, 
    regular_price, discount_price, content_drip_enabled, thumbnail_url, video_source, 
    video_link, what_will_learn, target_audience, course_duration_hour, 
    course_duration_min, materials_included, requirements_instructions, 
    course_tags, created_at, updated_at, status 
    FROM course WHERE status = 'draft'";

$result = $conn->query($draftQuery);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $draftCourses[] = $row;
    }
}

?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themewant.com/Stecybertech/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 22:52:46 GMT -->
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

                            </div>

                        </div>
                        <div class="header-right-area-one">
                            <div class="actions-area">
                                <div class="search-btn" id="search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                        <path d="M19.9375 18.9652L14.7454 13.7732C15.993 12.2753 16.6152 10.3542 16.4824 8.40936C16.3497 6.46453 15.4722 4.64575 14.0326 3.33139C12.593 2.01702 10.7021 1.30826 8.75326 1.35254C6.8044 1.39683 4.94764 2.19075 3.56924 3.56916C2.19083 4.94756 1.39691 6.80432 1.35263 8.75317C1.30834 10.702 2.0171 12.5929 3.33147 14.0325C4.64584 15.4721 6.46461 16.3496 8.40944 16.4823C10.3543 16.6151 12.2754 15.993 13.7732 14.7453L18.9653 19.9374L19.9375 18.9652ZM2.75 8.93742C2.75 7.71365 3.11289 6.51736 3.79278 5.49983C4.47267 4.4823 5.43903 3.68923 6.56965 3.22091C7.70026 2.7526 8.94436 2.63006 10.1446 2.86881C11.3449 3.10756 12.4474 3.69686 13.3127 4.56219C14.1781 5.42753 14.7674 6.53004 15.0061 7.7303C15.2449 8.93055 15.1223 10.1747 14.654 11.3053C14.1857 12.4359 13.3926 13.4022 12.3751 14.0821C11.3576 14.762 10.1613 15.1249 8.9375 15.1249C7.29703 15.1231 5.72427 14.4706 4.56429 13.3106C3.4043 12.1506 2.75182 10.5779 2.75 8.93742Z" fill="#553CDF" />
                                    </svg>
                                </div>
                               
                            </div>
                            <div class="buttons-area">
                                <a href="logout.php" class="rts-btn btn-primary">Log Out</a>
                                <?php if ($userRole === 'admin'): ?>
                                <a href="live.php" class="rts-btn btn-primary">Start Live Class</a>
                                <?php else: ?>
                                <button id="joinLiveClass" class="btn btn-success">Join Live Class (Participant)</button>
                                <?php endif; ?>
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
                            <p>Software Development Expert</p>
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
                                        <span><?php echo getTotalStudents(); ?> Students</span>
                                    </div>
                                    <div class="single">
                                        <i class="fa-regular fa-video"></i>
                                        <span><?php echo getTotalCourse(); ?> Course</span>
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
    <div class="dashboard--area-main pt--100 pt_sm--50">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 rts-sticky-column-item">
                    <div class="left-sindebar-dashboard theiaStickySidebar">
                        <div class="dashboard-left-single-wrapper">
                            <!-- single item -->
                            <a href="dashboard.php" class="single-item active">
                                <i class="fa-light fa-house"></i>
                                <p>Dashboard</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="my-profile.html" class="single-item">
                                <i class="fa-regular fa-user"></i>
                                <p>My Profile</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="enroll-course.php" class="single-item">
                                <i class="fa-light fa-graduation-cap"></i>
                                <p>Categories</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="reviews.html" class="single-item">
                                <i class="fa-regular fa-star"></i>
                                <p>Reviews</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="quiz-attempts.html" class="single-item">
                                <i class="fa-sharp fa-light fa-bullseye-pointer"></i>
                                <p>My Quiz Attempts</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="question-answer.html" class="single-item">
                                <i class="fa-regular fa-circle-question"></i>
                                <p>Question & Answer</p>
                            </a>
                            <!-- single item end -->
                        </div>
                        <div class="dashboard-left-single-wrapper mt--40">
                            <h4 class="title mb--5">Instructor</h4>
                            <!-- single item -->
                            <a href="my-course.php" class="single-item">
                                <i class="fa-light fa-book"></i>
                                <p>My Courses</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <!-- <a href="my-bundles.html" class="single-item">
                                <i class="fa-sharp fa-regular fa-layer-group"></i>
                                <p>My Bundles</p>
                            </a> -->
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="announcement.php" class="single-item">
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
                    <div class="right-sidebar-dashboard">
                        <div class="row g-5">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-light fa-book-open-cover"></i>
                                    </div>
                                    <h5 class="title"><span class="counter">30</span></h5>
                                    <p>Courses</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-regular fa-graduation-cap"></i>
                                    </div>
                                    <h5 class="title"><span class="counter">10</span></h5>
                                    <p>Active Courses</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-light fa-trophy"></i>
                                    </div>
                                    <h5 class="title"><span class="counter"><?php echo getTotalPendingCourses(); ?></span></h5>
                                    <p>Published Courses</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-light fa-user"></i>
                                    </div>
                                    <h5 class="title"><span class="counter"><?php echo getTotalStudents(); ?></span></h5>
                                    <p>Total Students</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-light fa-book"></i>
                                    </div>
                                    <h5 class="title"><span class="counter"><?php echo getTotalCourse(); ?></span></h5>
                                    <p>Total Courses</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-sharp fa-solid fa-dollar-sign"></i>
                                    </div>
                                    <h5 class="title">$<span class="counter">2900</span></h5>
                                    <p>Total Earning</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>
                        </div>

                        <div class="row mt--40">
                            <div class="col-lg-12">
                                <!-- in progress course area -->
                                <div class="in-progress-course-wrapper  title-between-dashboard mb--10">
                                    <h5 class="title">My Courses</h5>
                                    <a href="#" class="more">View All</a>
                                </div>
                                <!-- in progress course area end -->

                                <!-- my course enroll wrapper -->
                                <div class="my-course-enroll-wrapper-board">
                                    <!-- single course inroll -->
                                    <div class="single-course-inroll-board head">
                                        <div class="name">
                                            <p>My Course</p>
                                        </div>
                                        <div class="enroll">
                                            <p>Status</p>
                                        </div>
                                        <div class="rating">
                                            <p>Date</p>
                                        </div>
                                    </div>
                                    <!-- single course inroll end -->
                                    <!-- single course inroll -->
                                    <?php foreach ($publishedCourses as $course): ?>
                                    <div class="single-course-inroll-board">
                                        <div class="name">
                                            <a href="single-course.php?id=<?php echo $course['id']; ?>">
                                            <p><?php echo $course['course_title']; ?></p>
                                            </a>
                                        </div>
                                        <div class="enroll">
                                            <p><?php echo $course['status'] ?? 'N/A'; ?></p>
                                        </div>
                                        <div class="rating">
                                        <?php echo $course['created_at'] ?? 'N/A'; ?>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <!-- my course enroll wrapper end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts dahboard-area-main-wrapper end -->


    <div class="rts-section-gap">

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
    <script src="https://download.agora.io/sdk/release/AgoraRTC_N-4.8.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/10.31.0/js/jquery.fileupload.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-file-upload/10.31.0/js/jquery.fileupload.min.js"></script>

    <script>
        document.getElementById("startLiveClass").addEventListener("click", function() {
    // Initialize the Agora SDK
    const client = AgoraRTC.createClient({ mode: "rtc", codec: "vp8" });

    // Replace with your Agora App ID
    const appID = 'edecf9346e3647a09bd9f1078cab0d89';

    // Join the channel (room)
    client.init(appID, function () {
        console.log("AgoraRTC client initialized");

        client.join(null, 'stecybertech', null, (uid) => {
            console.log("User " + uid + " join channel successfully");

            // Create a local stream for the instructor (live video)
            const localStream = AgoraRTC.createStream({
                streamID: uid,
                audio: true,
                video: true,
                screen: false // Start with webcam, not screen sharing
            });

            // Initialize and play the stream
            localStream.init(function() {
                localStream.play('local_stream');
                client.publish(localStream, function(err) {
                    console.log("Publish local stream error: " + err);
                });
            });

            document.getElementById("shareScreenBtn").addEventListener("click", function() {
            localStream.stop(); // Stop the webcam stream

            // Create a screen-sharing stream
            const screenStream = AgoraRTC.createStream({
                video: false,
                audio: false,
                screen: true // Screen sharing enabled
            });

            screenStream.init(function() {
                screenStream.play('local_stream'); // Play screen stream in the same div
                client.publish(screenStream, function(err) {
                    console.log("Publish screen stream error: " + err);
                });
            });
});


        }, function(err) {
            console.error("Client join failed", err);
        });
    }, function (err) {
        console.error("AgoraRTC client init failed", err);
    });
});

    </script>

</body>


<!-- Mirrored from html.themewant.com/Stecybertech/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 22:52:51 GMT -->
</html>
