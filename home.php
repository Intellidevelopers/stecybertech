<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');  // Redirect to login page if not logged in
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themewant.com/Stecybertech/index-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 22:47:56 GMT -->
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
    <header class="header-one v-5 header--sticky">
        <div class="header-top-one-wrapper with-admin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-one">
                            <div class="left-information">
                                <a href="mailto:someone@example.com" class="email none-sm"><i class="fa-light fa-envelope"></i>support@stecybertech.com.ng</a>
                                <a href="tel:+4733378901" class="email"><i class="fa-light fa-phone"></i>+234 808 888 6823</a>
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
                            <div class="search-area">
                                <form action="#">
                                    <input class="autocomplete" type="text" name="name" placeholder="Search..." required>
                                    <button type="submit" class="search-btn">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.3124 14.517L11.0643 10.2689C12.0851 9.04342 12.5941 7.47157 12.4855 5.88034C12.3769 4.28912 11.659 2.80103 10.4811 1.72564C9.30326 0.650244 7.75616 0.0703477 6.16164 0.106582C4.56713 0.142816 3.04796 0.79239 1.92018 1.92018C0.79239 3.04796 0.142816 4.56713 0.106582 6.16164C0.0703477 7.75616 0.650244 9.30326 1.72564 10.4811C2.80103 11.659 4.28912 12.3769 5.88034 12.4855C7.47157 12.5941 9.04342 12.0851 10.2689 11.0643L14.517 15.3124L15.3124 14.517ZM1.24989 6.31239C1.24989 5.31112 1.5468 4.33234 2.10307 3.49981C2.65935 2.66729 3.45 2.01842 4.37505 1.63525C5.3001 1.25208 6.318 1.15183 7.30003 1.34716C8.28206 1.5425 9.18411 2.02466 9.89212 2.73266C10.6001 3.44066 11.0823 4.34272 11.2776 5.32474C11.473 6.30677 11.3727 7.32467 10.9895 8.24972C10.6064 9.17477 9.95749 9.96543 9.12496 10.5217C8.29244 11.078 7.31366 11.3749 6.31239 11.3749C4.97019 11.3734 3.68339 10.8396 2.73431 9.89047C1.78522 8.94139 1.25138 7.65459 1.24989 6.31239V6.31239Z" fill="#525252" />
                                            <path d="M15.3124 14.517L11.0643 10.2689C12.0851 9.04342 12.5941 7.47157 12.4855 5.88034C12.3769 4.28912 11.659 2.80103 10.4811 1.72564C9.30326 0.650244 7.75616 0.0703477 6.16164 0.106582C4.56713 0.142816 3.04796 0.79239 1.92018 1.92018C0.79239 3.04796 0.142816 4.56713 0.106582 6.16164C0.0703477 7.75616 0.650244 9.30326 1.72564 10.4811C2.80103 11.659 4.28912 12.3769 5.88034 12.4855C7.47157 12.5941 9.04342 12.0851 10.2689 11.0643L14.517 15.3124L15.3124 14.517ZM1.24989 6.31239C1.24989 5.31112 1.5468 4.33234 2.10307 3.49981C2.65935 2.66729 3.45 2.01842 4.37505 1.63525C5.3001 1.25208 6.318 1.15183 7.30003 1.34716C8.28206 1.5425 9.18411 2.02466 9.89212 2.73266C10.6001 3.44066 11.0823 4.34272 11.2776 5.32474C11.473 6.30677 11.3727 7.32467 10.9895 8.24972C10.6064 9.17477 9.95749 9.96543 9.12496 10.5217C8.29244 11.078 7.31366 11.3749 6.31239 11.3749C4.97019 11.3734 3.68339 10.8396 2.73431 9.89047C1.78522 8.94139 1.25138 7.65459 1.24989 6.31239V6.31239Z" fill="#553CDF" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="header-right-area-one">

                            <div class="main-nav-one">
                                <nav>
                                    <ul>
                                        <li style="position: static;">
                                            <a class="nav-link" href="#">Home</a>

                                            <!-- <ul class="megamenu-hub">
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
                                            </ul> -->
                                        </li>


                                        <li>
                                            <a class="nav-link" href="about.php">About</a>
                                            <!-- <ul class="submenu">
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
                                            </ul> -->
                                        </li>
                                        <li style="position: static;">
                                            <a class="nav-link" href="course-five.php">Courses</a>
                                       
                                        </li>
                                        <!-- <li class="has-dropdown">
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
                                        </li> -->
                                        <li>
                                            <a class="nav-link" href="blog-grid.php">Blog</a>
                                            <!-- <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> -->
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="buttons-area">
                                <a href="logout.php" class="rts-btn btn-primary radious-0">Log Out</a>
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

    <!-- rts banner area four -->
    <div class="rts-banner-area-four bg_image ptb_sm--50 ptb_md--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2">
                    <!-- banner-content-four -->
                    <div class="banner-content-four pt_sm--50 pt_md--50">
                        <div class="title-area-left-2">
                            <div class="pre-title">
                                <img src="assets/images/banner/12.svg" alt="banner">
                                <span>Welcome To Our Distance Learning </span>
                            </div>
                            <h1 class="title-m">Where Learning <br>
                                Knows <span>No Boundaries</span>
                                <img src="assets/images/banner/shape/05.png" alt="">
                            </h1>
                            <p class="disc">
                                Discover a world of knowledge and learning opportunities through our diverse range of distance education courses.
                            </p>
                            <div class="banner-btn-author-wrapper">
                                <a href="../admin/live.php" class="rts-btn btn-primary radious-0">Joint Live Class</a>
                                <div class="sm-image-wrapper">
                                    <div class="images-wrap">
                                        <img src="assets/images/banner/shape/06.png" alt="banner">
                                        <img class="two" src="assets/images/banner/shape/07.png" alt="banner">
                                        <img class="three" src="assets/images/banner/shape/08.png" alt="banner">
                                    </div>
                                    <div class="info">
                                        <h6 class="title">2k students</h6>
                                        <span>Joint our online Class</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner-content-four end -->
                </div>
                <div class="col-lg-6 order-xl-2 order-lg-2 order-md-1 order-sm-1 order-1">
                    <div class="thumbnail-right-banner-4">
                        <img src="assets/images/banner/04.jpg" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts banner area four end -->

    <!-- rts about area start -->
    <div class="rts-about-area rts-section-gapTop">
        <div class="container pb--80">
            <div class="row">
                <div class="col-lg-6">
                    <!-- about area left image -->
                    <div class="about-area-left-four">
                        <div class="thumbnail-left-image">
                            <img src="assets/images/about/04.jpg" alt="about">
                        </div>
                        <div class="thumbnail-right-image">
                            <img src="assets/images/about/05.jpg" alt="about">
                        </div>
                        <div class="award-image-badge">
                            <img src="assets/images/about/02.png" alt="about">
                        </div>
                        <div class="review-thumb">
                            <!-- single review -->
                            <div class="review-single">
                                <img src="assets/images/banner/04.png" alt="banner">
                                <div class="info-right">
                                    <h6 class="title">4.5</h6>
                                    <span>(2.4k Review)</span>
                                </div>
                            </div>
                            <!-- single review end -->
                            <!-- single review -->
                            <div class="review-single two">
                                <img src="assets/images/banner/08.png" alt="banner">
                                <div class="info-right">
                                    <h6 class="title">100+
                                    </h6>
                                    <span>Online Course</span>
                                </div>
                            </div>
                            <!-- single review end -->
                        </div>
                    </div>
                    <!-- about area left image end -->
                </div>
                <div class="col-lg-6 mt_md--120 mt_sm--100">
                    <!-- about content-4 -->
                    <div class="about-content-right-4">
                        <div class="title-area-left-2">
                            <div class="pre-title">
                                <img src="assets/images/banner/12.png" alt="banner">
                                <span>About Us</span>
                            </div>
                            <h2 class="title">Know Our Distance Learning
                                Education System</h2>
                            <p class="disc">
                                Discover a world of knowledge and learning opportunities through our diverse range of distance education courses. Whether you're looking to advance your career.
                            </p>
                        </div>
                        <div class="about-card-wrapper-main">
                            <!-- single about card -->
                            <div class="single-card-about">
                                <div class="icon">
                                    <img src="assets/images/about/icon/03.png" alt="about-icon">
                                </div>
                                <div class="information">
                                    <h6 class="title">Wide Range</h6>
                                    <p class="disc">
                                        Choose from a wide variety
                                        courses spanning.
                                    </p>
                                </div>
                            </div>
                            <!-- single about card end -->
                            <!-- single about card -->
                            <div class="single-card-about">
                                <div class="icon">
                                    <img src="assets/images/about/icon/04.png" alt="about-icon">
                                </div>
                                <div class="information">
                                    <h6 class="title">Expert Instructors</h6>
                                    <p class="disc">
                                        Choose from a wide variety
                                        courses spanning.
                                    </p>
                                </div>
                            </div>
                            <!-- single about card end -->
                        </div>

                        <div class="about-bottom-button-area-4">
                            <a href="about.html" class="rts-btn btn-primary radious-0">About Us</a>
                            <!-- author mid start -->
                            <div class="author-about">
                                <img src="assets/images/about/01.png" alt="about">
                                <div class="information">
                                    <h6 class="title">Devid Jon</h6>
                                    <p>CEO, Stecybertech</p>
                                </div>
                            </div>
                            <!-- author mid end -->
                            <div class="video-classes">
                                <div class="icon">
                                    <img src="assets/images/about/01.svg" alt="about">
                                </div>
                                <p>30k Video Class</p>
                            </div>
                        </div>
                    </div>
                    <!-- about content-4 end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->

    <!-- rts fun facts area start -->
    <div class="fun-facts-area-4 pb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fun-facts-main-wrapper-1 style-two">
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/fun-facts/icon/01.svg" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">65,972</span></h5>
                            <span class="enr">Students Enrolled</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/fun-facts/icon/02.svg" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">5,321</span></h5>
                            <span class="enr">Completed Course</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/fun-facts/icon/03.svg" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">44,239</span></h5>
                            <span class="enr">Students Learner</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/fun-facts/icon/04.svg" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">75,992</span></h5>
                            <span class="enr">Students Enrolled</span>
                        </div>
                        <!-- single end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts fun facts area end -->

    <!-- top-category-area -->
    <div class="top-category-area rts-section-gap bg-category-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center-style">
                        <div class="pre-title">
                            <img src="assets/images/banner/bulb.png" alt="icon">
                            <span>Top Category</span>
                        </div>
                        <h2 class="title">Explore 2000+ Free Online Courses</h2>
                        <p class="post-title">You'll find something to spark your curiosity and enhance</p>
                    </div>
                </div>
            </div>
            <div class="row mt--20 g-5">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single category -->
                    <div class="category-single-list radious-0">
                        <a href="course-one.html" class="thumbnail">
                            <img src="assets/images/course/01.png" alt="course">
                        </a>
                        <div class="information">
                            <a href="course-one.html">
                                <h6 class="title">Personal Development</h6>
                            </a>
                            <span>130+ Courses</span>
                        </div>
                    </div>
                    <!-- single category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single category -->
                    <div class="category-single-list radious-0">
                        <a href="course-one.html" class="thumbnail">
                            <img src="assets/images/course/02.png" alt="course">
                        </a>
                        <div class="information">
                            <a href="course-one.html">
                                <h6 class="title">Financial Analysis</h6>
                            </a>
                            <span>120+ Courses</span>
                        </div>
                    </div>
                    <!-- single category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single category -->
                    <div class="category-single-list radious-0">
                        <a href="course-one.html" class="thumbnail">
                            <img src="assets/images/course/03.png" alt="course">
                        </a>
                        <div class="information">
                            <a href="course-one.html">
                                <h6 class="title">Graphic Design</h6>
                            </a>
                            <span>110+ Courses</span>
                        </div>
                    </div>
                    <!-- single category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single category -->
                    <div class="category-single-list radious-0">
                        <a href="course-one.html" class="thumbnail">
                            <img src="assets/images/course/04.png" alt="course">
                        </a>
                        <div class="information">
                            <a href="course-one.html">
                                <h6 class="title">Machine Learning</h6>
                            </a>
                            <span>90+ Courses</span>
                        </div>
                    </div>
                    <!-- single category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single category -->
                    <div class="category-single-list radious-0">
                        <a href="course-one.html" class="thumbnail">
                            <img src="assets/images/course/05.png" alt="course">
                        </a>
                        <div class="information">
                            <a href="course-one.html">
                                <h6 class="title">Music &amp; Dance </h6>
                            </a>
                            <span>13+ Courses</span>
                        </div>
                    </div>
                    <!-- single category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single category -->
                    <div class="category-single-list radious-0">
                        <a href="course-one.html" class="thumbnail">
                            <img src="assets/images/course/06.png" alt="course">
                        </a>
                        <div class="information">
                            <a href="course-one.html">
                                <h6 class="title">Cyber Security</h6>
                            </a>
                            <span>130+ Courses</span>
                        </div>
                    </div>
                    <!-- single category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single category -->
                    <div class="category-single-list radious-0">
                        <a href="course-one.html" class="thumbnail">
                            <img src="assets/images/course/07.png" alt="course">
                        </a>
                        <div class="information">
                            <a href="course-one.html">
                                <h6 class="title">Ethical Hacking</h6>
                            </a>
                            <span>140+ Courses</span>
                        </div>
                    </div>
                    <!-- single category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single category -->
                    <div class="category-single-list radious-0">
                        <a href="course-one.html" class="thumbnail">
                            <img src="assets/images/course/08.png" alt="course">
                        </a>
                        <div class="information">
                            <a href="course-one.html">
                                <h6 class="title">Health &amp; Fitness</h6>
                            </a>
                            <span>90+ Courses</span>
                        </div>
                    </div>
                    <!-- single category end -->
                </div>
            </div>
        </div>
    </div>
    <!-- top-category-area end -->


    <!-- course area start -->
    <div class="course-area-two rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area align-items-end">
                        <div class="title-area-left-style">
                            <div class="pre-title">
                                <img src="assets/images/banner/bulb.png" alt="icon">
                                <span>Courses</span>
                            </div>
                            <h2 class="title mb--5">Explore Featured Courses</h2>
                            <p class="disc">
                                You'll find something to spark your curiosity and enhance
                            </p>
                        </div>
                        <a href="#" class="rts-btn with-arrow p-0">View All Course <i class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="swiper mySwiper-category-1 swiper-float-right-course swiper-data" data-swiper='{
                    "spaceBetween":30,
                    "slidesPerView":4,
                    "loop": true,
                    "autoplay":{
                        "delay":"2000"
                    },
                    "navigation":{
                        "nextEl":".swiper-button-next",
                        "prevEl":".swiper-button-prev"
                    },
                    "pagination":{
                        "el": ".swiper-pagination",
                        "clickable": "true"
                    },
                    "breakpoints":{
                    "320":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "420":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "500":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "740":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "940":{
                        "slidesPerView":3,
                        "spaceBetween":30},
                    "1240":{
                        "slidesPerView":4,
                        "spaceBetween":30}
                    }
                }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/01.jpg" alt="course">
                                    <div class="tag-thumb">
                                        <span>Marketing</span>
                                    </div>
                                </a>
                                <div class="body-area">
                                    <div class="course-top">
                                        <div class="tags">Best Seller</div>
                                        <div class="price">$49.50</div>
                                    </div>
                                    <a href="single-course.html">
                                        <h5 class="title">How to Write the Ultimate 1 Page
                                            Strategic Business Plan</h5>
                                    </a>
                                    <div class="teacher-stars">
                                        <div class="teacher"><span>Dr. Angela Yu</span></div>
                                        <ul class="stars">
                                            <li class="span">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-calendar-lines-pen"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                        <div class="students">
                                            <i class="fa-light fa-users"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/02.jpg" alt="course">
                                    <div class="tag-thumb">
                                        <span>Marketing</span>
                                    </div>
                                </a>
                                <div class="body-area">
                                    <div class="course-top">
                                        <div class="tags">Best Seller</div>
                                        <div class="price">$49.50</div>
                                    </div>
                                    <a href="single-course.html">
                                        <h5 class="title">The Complete Web Developer in
                                            2023: Zero to Mastery</h5>
                                    </a>
                                    <div class="teacher-stars">
                                        <div class="teacher"><span>Dr. Angela Yu</span></div>
                                        <ul class="stars">
                                            <li class="span">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-calendar-lines-pen"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                        <div class="students">
                                            <i class="fa-light fa-users"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/03.jpg" alt="course">
                                    <div class="tag-thumb">
                                        <span>Marketing</span>
                                    </div>
                                </a>
                                <div class="body-area">
                                    <div class="course-top">
                                        <div class="tags">Best Seller</div>
                                        <div class="price">$49.50</div>
                                    </div>
                                    <a href="single-course.html">
                                        <h5 class="title">User Experience The Ultimate
                                            Guide to Usability and UX</h5>
                                    </a>
                                    <div class="teacher-stars">
                                        <div class="teacher"><span>Dr. Angela Yu</span></div>
                                        <ul class="stars">
                                            <li class="span">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-calendar-lines-pen"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                        <div class="students">
                                            <i class="fa-light fa-users"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/04.jpg" alt="course">
                                    <div class="tag-thumb">
                                        <span>Marketing</span>
                                    </div>
                                </a>
                                <div class="body-area">
                                    <div class="course-top">
                                        <div class="tags">Best Seller</div>
                                        <div class="price">$49.50</div>
                                    </div>
                                    <a href="single-course.html">
                                        <h5 class="title">Complete Guitar Lessons System
                                            Beginner to Advanced</h5>
                                    </a>
                                    <div class="teacher-stars">
                                        <div class="teacher"><span>Dr. Angela Yu</span></div>
                                        <ul class="stars">
                                            <li class="span">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-calendar-lines-pen"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                        <div class="students">
                                            <i class="fa-light fa-users"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/05.jpg" alt="course">
                                    <div class="tag-thumb">
                                        <span>Marketing</span>
                                    </div>
                                </a>
                                <div class="body-area">
                                    <div class="course-top">
                                        <div class="tags">Best Seller</div>
                                        <div class="price">$49.50</div>
                                    </div>
                                    <a href="single-course.html">
                                        <h5 class="title">Automate the Boring Stuff with
                                            Python Programming</h5>
                                    </a>
                                    <div class="teacher-stars">
                                        <div class="teacher"><span>Dr. Angela Yu</span></div>
                                        <ul class="stars">
                                            <li class="span">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-calendar-lines-pen"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                        <div class="students">
                                            <i class="fa-light fa-users"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/06.jpg" alt="course">
                                    <div class="tag-thumb">
                                        <span>Marketing</span>
                                    </div>
                                </a>
                                <div class="body-area">
                                    <div class="course-top">
                                        <div class="tags">Best Seller</div>
                                        <div class="price">$49.50</div>
                                    </div>
                                    <a href="single-course.html">
                                        <h5 class="title">Automate the Boring Stuff with
                                            Python Programming</h5>
                                    </a>
                                    <div class="teacher-stars">
                                        <div class="teacher"><span>Dr. Angela Yu</span></div>
                                        <ul class="stars">
                                            <li class="span">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-calendar-lines-pen"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                        <div class="students">
                                            <i class="fa-light fa-users"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="single-course-style-three">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/07.jpg" alt="course">
                                    <div class="tag-thumb">
                                        <span>Marketing</span>
                                    </div>
                                </a>
                                <div class="body-area">
                                    <div class="course-top">
                                        <div class="tags">Best Seller</div>
                                        <div class="price">$49.50</div>
                                    </div>
                                    <a href="single-course.html">
                                        <h5 class="title">How to Write the Ultimate 1 Page
                                            Strategic Business Plan</h5>
                                    </a>
                                    <div class="teacher-stars">
                                        <div class="teacher"><span>Dr. Angela Yu</span></div>
                                        <ul class="stars">
                                            <li class="span">
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                            <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="leasson-students">
                                        <div class="lesson">
                                            <i class="fa-light fa-calendar-lines-pen"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                        <div class="students">
                                            <i class="fa-light fa-users"></i>
                                            <span>25 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                    <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->

    <!-- our banefits area start -->
    <div class="rts-banifits-area rts-section-gap bg-category-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="title-area-left-2">
                        <div class="pre-title">
                            <img src="assets/images/banner/12.png" alt="banner">
                            <span>Our Benefits</span>
                        </div>
                        <h2 class="title">Key Benefits of Distance Learning Education</h2>
                        <p class="disc">
                            Can offer a description that's tailored to your needs. Whether it's a description for a website, product, service, event, or any other
                        </p>
                    </div>
                    <div class="banefites-main-wrapper">
                        <!-- single banifits  -->
                        <div class="single-benifits">
                            <div class="icon">
                                <img src="assets/images/benefits/01.svg" alt="banefits">
                            </div>
                            <div class="information">
                                <h5 class="title">Flexibility</h5>
                                <p>
                                    Distance learning allows.
                                </p>
                            </div>
                        </div>
                        <!-- single banifits  -->
                        <!-- single banifits  -->
                        <div class="single-benifits">
                            <div class="icon">
                                <img src="assets/images/benefits/02.svg" alt="banefits">
                            </div>
                            <div class="information">
                                <h5 class="title">Accessibility</h5>
                                <p>
                                    Distance learning allows.
                                </p>
                            </div>
                        </div>
                        <!-- single banifits  -->
                        <!-- single banifits  -->
                        <div class="single-benifits mt--10">
                            <div class="icon">
                                <img src="assets/images/benefits/03.svg" alt="banefits">
                            </div>
                            <div class="information">
                                <h5 class="title">Diverse Course</h5>
                                <p>
                                    Distance learning allows.
                                </p>
                            </div>
                        </div>
                        <!-- single banifits  -->
                        <!-- single banifits  -->
                        <div class="single-benifits mt--10">
                            <div class="icon">
                                <img src="assets/images/benefits/04.svg" alt="banefits">
                            </div>
                            <div class="information">
                                <h5 class="title">Expert Instructors</h5>
                                <p>
                                    Distance learning allows.
                                </p>
                            </div>
                        </div>
                        <!-- single banifits  -->
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 mt_sm--30 mt_md--50 mt_sm--50">
                    <div class="thumbnail-benefits-right-image">
                        <img src="assets/images/benefits/01.jpg" alt="benefits">
                        <div class="vedio-icone">
                            <a class="video-play-button play-video popup-video" href="https://www.youtube.com/watch?v=ezbJwaLmOeM">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our banefits area end -->

    <!-- students feedback area start -->
    <div class="students-feedback-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area">
                        <div class="title-area-left-style">
                            <div class="pre-title">
                                <img src="assets/images/banner/bulb.png" alt="icon">
                                <span>Student Review</span>
                            </div>
                            <h2 class="title">Our Students Feedback</h2>
                        </div>
                        <a href="#" class="btn-narrow-arrow">View All Feedback<i class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt--40">
                <div class="col-lg-12">
                    <div class="testimonials-area-wrapper-3 swiper-data" data-swiper='{
                        "spaceBetween":30,
                        "slidesPerView":1,
                        "loop": true,
                        "navigation":{
                            "nextEl":".swiper-button-next",
                            "prevEl":".swiper-button-prev"
                        },
                        "autoplay":{
                            "delay":"2000"
                        },
                        "breakpoints":{"320":{
                            "slidesPerView":1,
                            "spaceBetween":30},
                        "480":{
                            "slidesPerView":1,
                            "spaceBetween":30},
                        "640":{
                            "slidesPerView":1,
                            "spaceBetween":30}
                        }
                    }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single testimonials -->
                                <div class="single-testimonials-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 ">
                                            <div class="testimonials-wrapper-left">
                                                <img src="assets/images/students-feedback/04.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 pl--60 pl_md--20 pl_sm--15 mt_sm--20 mt_md--20">
                                            <div class="inner-testimonials">
                                                <div class="quote">
                                                    <img src="assets/images/students-feedback/10.png" alt="feedback">
                                                </div>
                                                <p class="disc">
                                                    I would highly recommend Michael Richard to anyone interested in the subject matter. It has provided me with invaluable knowledge & a newfound passion for the topic. My only suggestion would be to add more live Q&A sessions to enhance the interactive experience.
                                                </p>
                                                <div class="author-area">
                                                    <img src="assets/images/students-feedback/11.png" alt="students">
                                                    <div class="information">
                                                        <h5 class="title">David John</h5>
                                                        <span>Artist and Instructor</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single testimonials -->
                                <div class="single-testimonials-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 ">
                                            <div class="testimonials-wrapper-left">
                                                <img src="assets/images/students-feedback/04.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 pl--60 pl_md--20 pl_sm--15 mt_sm--20 mt_md--20">
                                            <div class="inner-testimonials">
                                                <div class="quote">
                                                    <img src="assets/images/students-feedback/10.png" alt="feedback">
                                                </div>
                                                <p class="disc">
                                                    I would highly recommend Michael Richard to anyone interested in the subject matter. It has provided me with invaluable knowledge & a newfound passion for the topic. My only suggestion would be to add more live Q&A sessions to enhance the interactive experience.
                                                </p>
                                                <div class="author-area">
                                                    <img src="assets/images/students-feedback/11.png" alt="students">
                                                    <div class="information">
                                                        <h5 class="title">David John</h5>
                                                        <span>Artist and Instructor</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single testimonials -->
                                <div class="single-testimonials-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4 ">
                                            <div class="testimonials-wrapper-left">
                                                <img src="assets/images/students-feedback/04.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 pl--60 pl_md--20 pl_sm--15 mt_sm--20 mt_md--20">
                                            <div class="inner-testimonials">
                                                <div class="quote">
                                                    <img src="assets/images/students-feedback/10.png" alt="feedback">
                                                </div>
                                                <p class="disc">
                                                    I would highly recommend Michael Richard to anyone interested in the subject matter. It has provided me with invaluable knowledge & a newfound passion for the topic. My only suggestion would be to add more live Q&A sessions to enhance the interactive experience.
                                                </p>
                                                <div class="author-area">
                                                    <img src="assets/images/students-feedback/11.png" alt="students">
                                                    <div class="information">
                                                        <h5 class="title">David John</h5>
                                                        <span>Artist and Instructor</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials -->
                            </div>
                        </div>
                        <div class="left-align-arrow-btn">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-area">
            <img src="assets/images/students-feedback/12.png" alt="feedback">
        </div>
    </div>
    <!-- students feedback area end -->

    <!-- rts latest blog area start -->
    <div class="rts-latest-blog-area-three rts-section-gap bg-category-3">
        <div class="container rts-section-gapBottom">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area align-items-end">
                        <div class="title-area-left-style">
                            <div class="pre-title">
                                <img src="assets/images/banner/bulb.png" alt="icon">
                                <span>News & Article</span>
                            </div>
                            <h2 class="title">Read Our Latest News</h2>
                            <p class="disc"> Our mission is to provide you with valuable insights</p>
                        </div>
                        <a href="#" class="btn-narrow-arrow">View All News<i class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt--20 g-5">
                <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                    <!-- single blog list -->
                    <div class="single-blog-list-wrapper">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="assets/images/blog/04.jpg" alt="blog">
                        </a>
                        <div class="information-blog">
                            <div class="tag"><span>Marketing</span></div>
                            <a href="blog-details.html">
                                <h5 class="title">Announcing the winners the 2023 Education com Story</h5>
                            </a>
                            <p class="disc">You'll find something to spark your
                                curiosity and enhance</p>
                            <div class="author-date">
                                <div class="author-area">
                                    <i class="fa-regular fa-user"></i>
                                    <span>STE CYBERTECH LTD</span>
                                </div>
                                <div class="calender">
                                    <i class="fa-light fa-calendar-lines-pen"></i>
                                    <span>December 26, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single blog list end -->
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                    <!-- single blog list -->
                    <div class="single-blog-list-wrapper">
                        <a href="blog-details.html" class="thumbnail">
                            <img src="assets/images/blog/05.jpg" alt="blog">
                        </a>
                        <div class="information-blog">
                            <div class="tag"><span>Marketing</span></div>
                            <a href="blog-details.html">
                                <h5 class="title">Azure AI Fundamentals: How to Pass the AI-900 Exam</h5>
                            </a>
                            <p class="disc">You'll find something to spark your
                                curiosity and enhance</p>
                            <div class="author-date">
                                <div class="author-area">
                                    <i class="fa-regular fa-user"></i>
                                    <span>STE CYBERTECH LTD</span>
                                </div>
                                <div class="calender">
                                    <i class="fa-light fa-calendar-lines-pen"></i>
                                    <span>December 26, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single blog list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts latest blog area end -->

    <!-- footer call to action area start -->
    <div class="footer-callto-action-area bg-light-1 mt_sm--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-sction style-three bg_image">
                        <h2 class="title">Sign up today and be the first to <br>
                            access our exclusive offers</h2>
                        <form action="#" class="cta-form">
                            <input type="text" placeholder="Enter your mail..." required>
                            <button class="rts-btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt--105 pb--70">
            <div class="row">
                <div class="col-lg-12">
                    <!-- footer main wrapper -->
                    <div class="footer-one-main-wrapper">
                        <!-- single sized  footer  -->
                        <div class="footer-singl-wized left-logo">
                            <div class="head">
                                <a href="#">
                                    <img src="assets/images/logo/logo-1.svg" alt="logo" loading="lazy">
                                </a>
                            </div>
                            <div class="body">
                                <p class="dsic">
                                    We are passionate education dedicated to providing high-quality resources learners
                                    all backgrounds.
                                </p>
                                <ul class="wrapper-list">
                                    <li><i class="fa-regular fa-location-dot"></i>Yarra Park, Melbourne, Australia </li>
                                    <li><a href="call-to_61485826710.html"><i class="fa-regular fa-phone"></i>+(61) 485-826-710</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class="footer-singl-wized">
                            <div class="head">
                                <h6 class="title">Quick Links</h6>
                            </div>
                            <div class="body">
                                <ul class="menu">
                                    <li><a href="#">Latest Courses</a></li>
                                    <li><a href="#">Mission & Vision</a></li>
                                    <li><a href="#">Join a Carrer</a></li>
                                    <li><a href="#">Our Approach</a></li>
                                    <li><a href="#">Pricing Plan</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class="footer-singl-wized">
                            <div class="head">
                                <h6 class="title">Explore</h6>
                            </div>
                            <div class="body">
                                <ul class="menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Upcoming Events</a></li>
                                    <li><a href="#">Blog & News</a></li>
                                    <li><a href="#">FAQ Question</a></li>
                                    <li><a href="#">Course</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                        <!-- single sized  footer  -->
                        <div class="footer-singl-wized input-area">
                            <div class="head">
                                <h6 class="title">Newsletter</h6>
                            </div>
                            <div class="body">
                                <p class="disc">Subscribe Our newsletter get update our new course</p>
                                <form action="#">
                                    <div class="input-area-fill">
                                        <input type="email" placeholder="Enter Your Email" required>
                                        <button> Subscribe</button>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" id="exampleCheck1">
                                        <label for="exampleCheck1">I agree to the terms of use and privacy policy.</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- single sized  footer end -->
                    </div>
                    <!-- footer main wrapper end -->
                </div>
            </div>
        </div>
        <div class="copyright-area-one-border">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-one">
                            <p>Copyright © 2024 All Rights Reserved by Stecybertech</p>
                            <div class="social-copyright">
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
    </div>
    <!-- footer call to action area end -->

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

</body>


<!-- Mirrored from html.themewant.com/Stecybertech/index-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 22:50:30 GMT -->
</html>