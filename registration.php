<?php
require('functions.php');

// Redirect if the user is already logged in
if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: index.php");
    die();
}

$msg = "";

if (isset($_POST['submit'])) {
    // Use prepared statements for better security
    $name = htmlspecialchars(trim($_POST['name']));
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));

    // Check if the email already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $msg = "<div class='alert alert-danger'>{$email} - This email address has already been registered.</div>";
    } else {
        if ($password === $confirm_password) {
            // Hash the password securely using password_hash()
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert new user into the database
            $sql = "INSERT INTO users (name, email, username, password) VALUES (:name, :email, :username, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashed_password); // Store hashed password

            if ($stmt->execute()) {
                // Display success message
                $msg = "<div class='alert alert-success'>Registration successful! You can now log in.</div>";
            } else {
                $msg = "<div class='alert alert-danger'>Something went wrong. Please try again.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match.</div>";
        }
    }
}

?>




<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from html.themewant.com/Stecybertech/registration.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 22:59:42 GMT -->
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

<body class="login-page">

    <div class="header-transparent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-tranaparent-main-wrapper">
                        <a href="home.php" class="logo-area">
                            <img src="assets/images/logo/logo-1.svg" alt="logo">
                        </a>
                        <div class="right-area">

                            <a href="index.php" class="rts-btn btn-primary-white">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-registration-wrapper">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="login-page-form-area">
                        <h4 class="title">Sign Up to Your Account👋</h4>
                        <?php if ($msg) echo $msg; ?>
                        <form action="#" method="POST">
                            <div class="single-input-wrapper">
                                <label for="name">Your Name*</label>
                                <input id="name" name="name" type="text" placeholder="Enter Your Name" required>
                            </div>
                            <div class="half-input-wrapper">
                                <div class="single-input-wrapper">
                                    <label for="username">User Name</label>
                                    <input id="username" name="username" type="text" placeholder="Enter User Name" required>
                                </div>
                                <div class="single-input-wrapper">
                                    <label for="email">Email*</label>
                                    <input id="email" name="email" type="email" placeholder="Enter Your Email" required>
                                </div>
                            </div>
                            <div class="half-input-wrapper">
                                <div class="single-input-wrapper">
                                    <label for="password">Your Password</label>
                                    <input id="password" name="password" type="password" placeholder="Password" required>
                                </div>
                                <div class="single-input-wrapper">
                                    <label for="passwords">Re Password</label>
                                    <input id="passwords" name="confirm_password"  type="password" placeholder="Re Password" required>
                                </div>
                            </div>
                            <div class="single-checkbox-filter">
                                <div class="check-box">
                                    <input type="checkbox" id="type-1">
                                    <label for="type-1">Accept the Terms and Privacy Policy</label><br>
                                </div>
                            </div>
                            <button class="rts-btn btn-primary" type="submit" name="submit">Signup</button>
                            <p>Don't Have an account? <a href="index.php">Login</a></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-thumbnail-login-p mt--100">
                        <img src="assets/images/banner/login-bg.png" width="600" height="495" alt="login-form">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p--100"></div>
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


<!-- Mirrored from html.themewant.com/Stecybertech/registration.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Oct 2024 22:59:42 GMT -->
</html>