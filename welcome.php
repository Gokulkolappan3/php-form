<!DOCTYPE html>
<html lang="en">
    <?php
     session_start();

if (!isset($_SESSION['username'])) {
    header("Location:index.php");
  }

  ?>
<!-- Mirrored from html.tonatheme.com/2023/atrix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jan 2024 06:17:14 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>opening LOG</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/global.css" rel="stylesheet">
<link href="assets/css/elpath.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">


</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- mouse-pointer -->
        <div class="mouse-pointer" id="mouse-pointer">
            <div class="icon"><i class="far fa-angle-left"></i><i class="far fa-angle-right"></i></div>
        </div>
        <!-- mouse-pointer end -->


        <!-- preloader -->
        <!--<div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="x" class="letters-loading">
                                x
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>-->
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                    <div class="close-search pull-right"><span class="icon-179"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="https://html.tonatheme.com/2023/atrix/index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                    <button type="submit"><i class="icon-1"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        <header class="main-header">
            <!-- header-top-one -->
            <div class="header-top-one p_relative d_block">
                <div class="auto-container">
                    <div class="top-inner clearfix p_relative">
                        <div class="shape p_absolute t_0" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                        <div class="top-left pull-left">
                            <ul class="social-links clearfix">
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55">Follow Us:</li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-twitter"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left mr_25 lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="p_relative d_iblock fs_16 float_left lh_55"><a href="index.html" class="p_relative d_iblock fs_16"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                        <div class="top-right pull-right">
                            <ul class="info clearfix">
                                <li class="search-box-outer search-toggler p_relative d_iblock float_left mr_60 lh_55">
                                    <i class="icon-1"></i>
                                </li>
                                <li class="p_relative d_iblock float_left mr_60 lh_55 pl_25 fs_16">
                                    <i class="icon-2"></i>
                                    <p>Call: <a href="tel:123045615523">+1 (230)- 456-155-23</a></p>
                                </li>
                                <li class="p_relative d_iblock float_left lh_55 pl_25 fs_16">
                                    <i class="icon-3"></i>
                                    <p>Email: <a href="mailto:sample@example.com">sample@example.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix home-menu">
                                        <li class="dropdown"><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Corporate Business</a></li>
                                                <li><a href="index-2.html">Consulting</a></li>
                                                <li><a href="index-3.html">Finance</a></li>
                                                <li><a href="index-4.html">Law Firm</a></li>
                                                <li><a href="index-5.html">Visa Consulting</a></li>
                                                <li><a href="index-6.html">Digital Agency</a></li>
                                                <li><a href="index-7.html">Data Hosting</a></li>
                                                <li><a href="index-8.html">App Landing</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Pages</a>
                                            <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>About Pages</h6></li>
                                                            <li><a href="about.html">About Classic</a></li>
                                                            <li><a href="about-2.html">About Creative</a></li>
                                                            <li><a href="about-3.html">About Modern</a></li>
                                                            <li><a href="about-4.html">About Simple</a></li>
                                                            <li><a href="about-5.html">About Minimal</a></li>
                                                            <li><h6>Testimonial Pages</h6></li>
                                                            <li><a href="testimonial-1.html">Testimonial Page 1</a></li>
                                                            <li><a href="testimonial-2.html">Testimonial Page 2</a></li>
                                                            <li><a href="testimonial-3.html">Testimonial Page 3</a></li>
                                                            <li><a href="testimonial-4.html">Testimonial Page 4</a></li>
                                                            <li><a href="testimonial-5.html">Testimonial Page 5</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Service Pages</h6></li>
                                                            <li><a href="service.html">Service Style 1</a></li>
                                                            <li><a href="service-2.html">Service Style 2</a></li>
                                                            <li><a href="service-3.html">Service Style 3</a></li>
                                                            <li><a href="service-4.html">Service Style 4</a></li>
                                                            <li><a href="service-5.html">Service Style 5</a></li>
                                                            <li><a href="service-details.html">Service Details 1</a></li>
                                                            <li><a href="service-details-2.html">Service Details 2</a></li>
                                                            <li><a href="service-details-3.html">Service Details 3</a></li>
                                                            <li><h6>Other Pages</h6></li>
                                                            <li><a href="career.html">Career</a></li>
                                                            <li><a href="process.html">Our Process</a></li>
                                                            <li><a href="faq.html">FAQ 1</a></li>
                                                            <li><a href="faq-2.html">FAQ 2</a></li>
                                                            <li><a href="faq-3.html">FAQ 3</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Team Pages</h6></li>
                                                            <li><a href="team.html">Team Page 1</a></li>
                                                            <li><a href="team-2.html">Team Page 2</a></li>
                                                            <li><a href="team-3.html">Team Page 3</a></li>
                                                            <li><a href="team-4.html">Team Page 4</a></li>
                                                            <li><a href="team-5.html">Team Page 5</a></li>
                                                            <li><a href="team-6.html">Team Page 6</a></li>
                                                            <li><a href="team-7.html">Team Page 7</a></li>
                                                            <li><a href="team-details.html">Team Details 1</a></li>
                                                            <li><a href="team-details-2.html">Team Details 2</a></li>
                                                            <li><a href="team-details-3.html">Team Details 3</a></li>
                                                            <li><h6>Utilities</h6></li>
                                                            <li><a href="login.html">Log in</a></li>
                                                            <li><a href="registration.html">Registration</a></li>
                                                            <li><a href="error.html">404 Error</a></li>
                                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        </ul>
                                                    </div>   
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Pricing Table</h6></li>
                                                            <li><a href="pricing.html">Pricing Table 1</a></li>
                                                            <li><a href="pricing-2.html">Pricing Table 2</a></li>
                                                            <li><a href="pricing-3.html">Pricing Table 3</a></li>
                                                            <li><a href="pricing-4.html">Pricing Table 4</a></li>
                                                            <li><a href="pricing-5.html">Pricing Table 5</a></li>
                                                            <li><h6>Contact Pages</h6></li>
                                                            <li><a href="contact.html">Contact Page 1</a></li>
                                                            <li><a href="contact-2.html">Contact Page 2</a></li>
                                                            <li><a href="contact-3.html">Contact Page 3</a></li>
                                                            <li><a href="contact-4.html">Contact Page 4</a></li>
                                                            <li><a href="contact-5.html">Contact Page 5</a></li>
                                                        </ul>
                                                    </div>                                     
                                                </div>                                            
                                            </div>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Project</a>
                                            <ul>
                                                <li><a href="project.html">Project Style 1</a></li>
                                                <li><a href="project-2.html">Project Style 2</a></li>
                                                <li><a href="project-3.html">Project Style 3</a></li>
                                                <li><a href="project-4.html">Project Style 4</a></li>
                                                <li><a href="project-5.html">Project Style 5</a></li>
                                                <li><a href="project-6.html">Project Style 6</a></li>
                                                <li class="dropdown"><a href="index.html">Project Details</a>
                                                    <ul>
                                                        <li><a href="project-details.html">Project Details 1</a></li>
                                                        <li><a href="project-details-2.html">Project Details 2</a></li>
                                                        <li><a href="project-details-3.html">Project Details 3</a></li>
                                                        <li><a href="project-details-4.html">Project Details 4</a></li>
                                                        <li><a href="project-details-5.html">Project Details 5</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="index.html">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Shop 1</a></li>
                                                <li><a href="shop-2.html">Shop 2</a></li>
                                                <li><a href="shop-details.html">shop Details 1</a></li>
                                                <li><a href="shop-details-2.html">shop Details 2</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="about-1.html">Elements</a>
                                            <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="feature-element-1.html">Feature Column 01</a></li>
                                                            <li><a href="feature-element-2.html">Feature Column 02</a></li>
                                                            <li><a href="feature-element-3.html">Feature Column 03</a></li>
                                                            <li><a href="feature-element-4.html">Feature Column 04</a></li>
                                                            <li><a href="feature-element-5.html">Feature Column 05</a></li>
                                                            <li><a href="feature-element-6.html">Feature Column 06</a></li>
                                                            <li><a href="feature-element-7.html">Feature Column 07</a></li>
                                                            <li><a href="feature-element-8.html">Feature Column 08</a></li>
                                                            <li><a href="feature-element-9.html">Feature Slider 01</a></li>
                                                            <li><a href="feature-element-10.html">Feature Slider 02</a></li>
                                                            <li><a href="feature-element-11.html">Feature Slider 03</a></li>
                                                            <li><a href="feature-element-12.html">Feature Slider 04</a></li>
                                                            <li><a href="feature-element-13.html">Feature Slider 05</a></li>
                                                            <li><a href="feature-element-14.html">Feature Slider 06</a></li>
                                                            <li><a href="feature-element-15.html">Feature Slider 07</a></li>
                                                            <li><a href="feature-element-16.html">Feature Slider 08</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="service-element-1.html">Service Column 01</a></li>
                                                            <li><a href="service-element-2.html">Service Column 02</a></li>
                                                            <li><a href="service-element-3.html">Service Column 03</a></li>
                                                            <li><a href="service-element-4.html">Service Column 04</a></li>
                                                            <li><a href="service-element-5.html">Service Column 05</a></li>
                                                            <li><a href="service-element-6.html">Service Column 06</a></li>
                                                            <li><a href="service-element-7.html">Service Column 07</a></li>
                                                            <li><a href="service-element-8.html">Service Column 08</a></li>
                                                            <li><a href="service-element-9.html">Service Slider 01</a></li>
                                                            <li><a href="service-element-10.html">Service Slider 02</a></li>
                                                            <li><a href="service-element-11.html">Service Slider 03</a></li>
                                                            <li><a href="service-element-12.html">Service Slider 04</a></li>
                                                            <li><a href="service-element-13.html">Service Slider 05</a></li>
                                                            <li><a href="service-element-14.html">Service Slider 06</a></li>
                                                            <li><a href="service-element-15.html">Service Slider 07</a></li>
                                                            <li><a href="service-element-16.html">Service Slider 08</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="team-element-1.html">Team Column 01</a></li>
                                                            <li><a href="team-element-2.html">Team Column 02</a></li>
                                                            <li><a href="team-element-3.html">Team Column 03</a></li>
                                                            <li><a href="team-element-4.html">Team Column 04</a></li>
                                                            <li><a href="team-element-5.html">Team Slider 01</a></li>
                                                            <li><a href="team-element-6.html">Team Slider 02</a></li>
                                                            <li><a href="team-element-7.html">Team Slider 03</a></li>
                                                            <li><a href="team-element-8.html">Team Slider 04</a></li>
                                                            <li><a href="working-element-9.html">Working Column 01</a></li>
                                                            <li><a href="working-element-10.html">Working Column 02</a></li>
                                                            <li><a href="working-element-11.html">Working Column 03</a></li>
                                                            <li><a href="working-element-12.html">Working Column 04</a></li>
                                                            <li><a href="working-element-13.html">Working Slider 01</a></li>
                                                            <li><a href="working-element-14.html">Working Slider 02</a></li>
                                                            <li><a href="working-element-15.html">Working Slider 03</a></li>
                                                            <li><a href="working-element-16.html">Working Slider 04</a></li>
                                                        </ul>
                                                    </div> 
                                                    <div class="col-lg-3 column">
                                                        <ul>
                                                            <li><h6>Elements</h6></li>
                                                            <li><a href="news-element-1.html">News Column 01</a></li>
                                                            <li><a href="news-element-2.html">News Column 02</a></li>
                                                            <li><a href="news-element-3.html">News Slider 01</a></li>
                                                            <li><a href="news-element-4.html">News Slider 02</a></li>
                                                            <li><a href="funfact-element-1.html">Funfact Column 01</a></li>
                                                            <li><a href="funfact-element-2.html">Funfact Column 02</a></li>
                                                            <li><a href="funfact-element-3.html">Funfact Slider 01</a></li>
                                                            <li><a href="funfact-element-4.html">Funfact Slider 02</a></li>
                                                            <li><a href="pricing-element-1.html">Pricing Column 01</a></li>
                                                            <li><a href="pricing-element-2.html">Pricing Column 02</a></li>
                                                            <li><a href="pricing-element-3.html">Pricing Slider 01</a></li>
                                                            <li><a href="pricing-element-4.html">Pricing Slider 02</a></li>
                                                            <li><a href="progress-element-1.html">Progress Circle</a></li>
                                                            <li><a href="progress-element-2.html">Progress Bar</a></li>
                                                        </ul>
                                                    </div>                                       
                                                </div>                                            
                                            </div>
                                        </li>
                                        <li class="dropdown"><a href="index.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Standard 1</a></li>
                                                <li><a href="blog-2.html">Blog Standard 2</a></li>
                                                <li><a href="blog-3.html">Blog Grid 1</a></li>
                                                <li><a href="blog-4.html">Blog Grid 2</a></li>
                                                <li><a href="blog-5.html">Blog Masonry</a></li>
                                                <li><a href="blog-6.html">Blog List</a></li>
                                                <li class="dropdown"><a href="index.html">Blog Details</a>
                                                    <ul>
                                                        <li><a href="blog-details.html">Blog Details 1</a></li>
                                                        <li><a href="blog-details-2.html">Blog Details 2</a></li>
                                                        <li><a href="blog-details-3.html">Blog Details 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown">
                                        <a href="logout.php"><input type="submit" value="LOGOUT" ></a>  
                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn theme-btn-one">Get A Quote<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn theme-btn-one">Get A Quote<i class="icon-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/mobile-logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- banner-section -->
        <section class="slider-one centred p_relative">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item p_relative pt_140 pb_170">
                    <div class="shape-layer">
                        <div class="shape-1 p_absolute l_0 z_1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                        <div class="shape-2 p_absolute l_0 t_0 z_1" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                        <div class="shape-3 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                        <div class="shape-4 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                    </div>
                    <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_iblock fw_bold fs_80 lh_70 mb_25"><span class="slider-text-anim">Make Your Business with</span><br /> <span class="slider-text-anim">Unique Ideas.</span></h2>
                            <p class="d_block fs_18 mb_45">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br />deserunt mollit anim id est laborum.</p>
                            <div class="btn-box clearfix">
                                <a href="index.html" class="theme-btn theme-btn-two"><span data-text="Get Started">Get Started</span></a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item p_relative pt_140 pb_170">
                    <div class="shape-layer">
                        <div class="shape-1 p_absolute l_0 z_1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                        <div class="shape-2 p_absolute l_0 t_0 z_1" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                        <div class="shape-3 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                        <div class="shape-4 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                    </div>
                    <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-2.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_iblock fw_bold fs_80 lh_70 mb_25"><span class="slider-text-anim">Make Your Business with</span><br /> <span class="slider-text-anim">Unique Ideas.</span></h2>
                            <p class="d_block fs_18 mb_45">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br />deserunt mollit anim id est laborum.</p>
                            <div class="btn-box clearfix">
                                <a href="index.html" class="theme-btn theme-btn-two"><span data-text="Get Started">Get Started</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative pt_140 pb_170">
                    <div class="shape-layer">
                        <div class="shape-1 p_absolute l_0 z_1" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                        <div class="shape-2 p_absolute l_0 t_0 z_1" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                        <div class="shape-3 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                        <div class="shape-4 p_absolute r_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                    </div>
                    <div class="image-layer p_absolute" style="background-image:url(assets/images/banner/banner-3.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box p_relative d_block z_5">
                            <h2 class="p_relative d_iblock fw_bold fs_80 lh_70 mb_25"><span class="slider-text-anim">Make Your Business with</span><br /> <span class="slider-text-anim">Unique Ideas.</span></h2>
                            <p class="d_block fs_18 mb_45">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia <br />deserunt mollit anim id est laborum.</p>
                            <div class="btn-box clearfix">
                                <a href="index.html" class="theme-btn theme-btn-two"><span data-text="Get Started">Get Started</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- feature-section -->
        <section class="feature-one p_relative pt_50 pb_50">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_100 pr_50 pt_11 pb_9">
                                <div class="icon-box p_absolute l_0 t_0 w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1">
                                    <div class="icon p_relative d_iblock g_color"><i class="icon-6"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-6.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_0">Quick Innovative Solutions</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_100 pr_70 pt_11 pb_9">
                                <div class="icon-box p_absolute l_0 t_0 w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1">
                                    <div class="icon p_relative d_iblock g_color"><i class="icon-7"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-7.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_0">Super Flexible Pricing</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_100 pr_50 pt_11 pb_9">
                                <div class="icon-box p_absolute l_0 t_0 w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1">
                                    <div class="icon p_relative d_iblock g_color"><i class="icon-8"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-8.png" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_0">Fast & Flexible Support</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->


        <!-- about-one -->
        <section class="about-one p_relative">
            <div class="pattern-layer parallax-scene parallax-scene-2">
                <div data-depth="0.40" class="pattern-1 p_absolute b_radius_50"></div>
                <div data-depth="0.50" class="pattern-2 p_absolute w_80 h_80" style="background-image: url(assets/images/shape/shape-7.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-container p_relative sec-pad">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_one">
                                <div data-animation-box class="image-box p_relative d_block mr_30 pb_100 pt_130">
                                    <div class="shape parallax-scene parallax-scene-1">
                                        <div data-depth="0.40" class="shape-1 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                        <div data-depth="0.50" class="shape-2 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                                    </div>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-1 p_relative d_block b_radius_10" data-animation="overlay-animation"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                                    <div class="video-inner p_absolute r_140 b_0 pt_60 pb_60 text-center b_radius_10 w_200 z_2" style="background-image: url(assets/images/resource/about-2.jpg);">
                                        <div class="video-btn">
                                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn p_relative d_iblock w_80 h_80 lh_85 text-center b_radius_50" data-caption=""><i class="icon-10"></i></a>
                                        </div>
                                    </div>
                                    <div class="skills-box text-center p_absolute t_0 r_0 b_radius_10 pt_40 pr_40 pl_40 pb_25">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 progress-block">
                                                <div class="single-progress-box">
                                                    <div class="box">
                                                        <div class="piechart p_relative mb_5"  data-fg-color="#f4244f" data-value=".45">
                                                            <span>.45</span>
                                                        </div>
                                                        <h6 class="d_block fs_15 lh_20 fw_bold mb_0">Development</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 progress-block">
                                                <div class="single-progress-box">
                                                    <div class="box">
                                                        <div class="piechart p_relative mb_5"  data-fg-color="#f4244f" data-value=".60">
                                                            <span>.60</span>
                                                        </div>
                                                        <h6 class="d_block fs_15 lh_20 fw_bold mb_0">UX Design</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_one">
                                <div class="content-box p_relative d_block ml_30">
                                    <div class="sec-title p_relative d_block mb_20">
                                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">About Us</span>
                                        <h2 class="p_relative d_block fs_40 fw_bold mb_0">The Best Solutions for Best Business</h2>

                                    </div>
                                    <div class="text p_relative d_block mb_25 wow fadeInUp" data-wow-duration="1500ms">
                                        <p>Lorem ipsum dolor sit amet consectur adipiscing elit sed eiusmod ex tempor incididunt labore dolore magna aliquaenim ad minim veniam quis nostrud exercitation laboris.</p>
                                    </div>
                                    <ul class="list-style-one clearfix p_relative d_block mb_30 wow fadeInUp" data-wow-duration="1500ms">
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">Clients Focused</li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">Targeting & Positioning</li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">We Can Save You Money</li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35 mb_13">Tax Advantages</li>
                                        <li class="p_relative d_block fs_16 lh_25 fw_sbold pull-left pl_35">Unique Ideas & Solution</li>
                                    </ul>
                                    <div class="btn-box wow fadeInUp" data-wow-duration="1500ms">
                                        <a href="about.html" class="theme-btn theme-btn-three"><span data-text="Get A Quote">Get A Quote</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-one end -->


        <!-- service-one -->
        <section class="service-one p_relative sec-pad">
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-9.png);"></div>
                <div class="pattern-2 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-10.png);"></div>
                <div class="pattern-3 p_absolute b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-11.png);"></div>
                <div class="pattern-4 p_absolute b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-12.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title p_relative d_block mb_50 text-center">
                    <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">SERVICES</span>
                    <h2 class="p_relative d_block fs_40 fw_bold mb_30">Great Business Solutions <br />System</h2>
                    <p class="d_block fs_18">Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore magna aliquaenim ad minim veniam.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_40 pt_50 pr_30 pb_35 b_radius_10 tran_5">
                                <div class="icon-box p_relative d_iblock mb_30">
                                    <div class="icon p_relative d_iblock fs_50 g_color tran_5"><i class="icon-11"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-2.png" alt=""></div>
                                    <div class="icon-shape hero-shape-four p_absolute w_90 h_70"></div>
                                </div>
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Strategic Consulting Services</a></h4>
                                <p class="p_relative d_block mb_20">Lorem ipsum dolor sit elit consectetur sed eiusmod tempor labore.</p>
                                <div class="link">
                                    <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold">Learn more<i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_40 pt_50 pr_30 pb_35 b_radius_10 tran_5">
                                <div class="icon-box p_relative d_iblock mb_30">
                                    <div class="icon p_relative d_iblock fs_50 g_color tran_5"><i class="icon-12"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-3.png" alt=""></div>
                                    <div class="icon-shape hero-shape-four p_absolute w_90 h_70"></div>
                                </div>
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Best Financial Advice</a></h4>
                                <p class="p_relative d_block mb_20">Lorem ipsum dolor sit elit consectetur sed eiusmod tempor labore.</p>
                                <div class="link">
                                    <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold">Learn more<i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_40 pt_50 pr_30 pb_35 b_radius_10 tran_5">
                                <div class="icon-box p_relative d_iblock mb_30">
                                    <div class="icon p_relative d_iblock fs_50 g_color tran_5"><i class="icon-13"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-4.png" alt=""></div>
                                    <div class="icon-shape hero-shape-four p_absolute w_90 h_70"></div>
                                </div>
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Investment & Management</a></h4>
                                <p class="p_relative d_block mb_20">Lorem ipsum dolor sit elit consectetur sed eiusmod tempor labore.</p>
                                <div class="link">
                                    <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold">Learn more<i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block pl_40 pt_50 pr_30 pb_35 b_radius_10 tran_5">
                                <div class="icon-box p_relative d_iblock mb_30">
                                    <div class="icon p_relative d_iblock fs_50 g_color tran_5"><i class="icon-14"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-5.png" alt=""></div>
                                    <div class="icon-shape hero-shape-four p_absolute w_90 h_70"></div>
                                </div>
                                <h4 class="p_relative d_block fs_20 lh_30 fw_sbold mb_20"><a href="service-details.html">Corporate Clients & Services</a></h4>
                                <p class="p_relative d_block mb_20">Lorem ipsum dolor sit elit consectetur sed eiusmod tempor labore.</p>
                                <div class="link">
                                    <a href="service-details.html" class="p_relative d_iblock fs_15 lh_25 fw_sbold">Learn more<i class="icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-one end -->


        <!-- video-one -->
        <section class="video-one p_relative pt_140 pb_150">
            <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/video-bg.jpg);"></div>
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute hero-shape-two l_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-13.png);"></div>
                <div class="pattern-2 p_absolute l_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                <div class="pattern-3 p_absolute hero-shape z_1" style="background-image: url(assets/images/shape/shape-15.png);"></div>
                <div class="pattern-4 p_absolute t_0 r_0 z_1" style="background-image: url(assets/images/shape/shape-16.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-container p_relative d_block">
                    <div class="video-btn p_absolute r_0 z_1">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn p_relative d_iblock w_100 h_100 lh_100 text-center b_radius_50 fs_25" data-caption=""><i class="icon-10"></i></a>
                    </div>
                    <div class="content-box p_relative d_block z_1">
                        <h2 class="p_relative d_block fs_40 lh_50 fw_bold mb_10">Services That Lead The Way To Better Business.</h2>
                        <p class="fs_17 mb_20">Fruit is their fill meat, hath abundantly place meat don't stars so and which signs third second after seasons under.</p>
                        <div class="btn-box">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="theme-btn theme-btn-two lightbox-image"><span data-text="Play Video">Play Video</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-one -->


        <!-- chooseus-one -->
        <section class="chooseus-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative sec-pad">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_two">
                                <div class="content-box p_relative d_block mr_130 z_1">
                                    <div class="sec-title p_relative d_block mb_20">
                                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">CHOOSE Atrix</span>
                                        <h2 class="p_relative d_block fs_40 fw_bold mb_0">Few Reasons Why You Should Choose Us</h2>
                                    </div>
                                    <div class="text p_relative d_block mb_25 wow fadeInUp" data-wow-duration="1500ms">
                                        <p class="fs_18">Fruit is their fill meat, hath abundantly place meat don't stars.</p>
                                    </div>
                                    <div class="inner-box p_relative d_block wow fadeInUp" data-wow-duration="1500ms">
                                        <div class="single-item p_relative d_block pl_80 mb_16">
                                            <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50 b_shadow_7">
                                                <div class="icon p_relative d_iblock g_color"><i class="icon-15"></i></div>
                                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-1.png" alt=""></div>
                                            </div>
                                            <h4 class="d_block fs_20 lh_30 mb_4">Innovative Business</h4>
                                            <p class="mb_0">Lorem ipsum dolor sit elit consectetur sed tempor.</p>
                                        </div>
                                        <div class="single-item p_relative d_block pl_80 mb_16">
                                            <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50 b_shadow_7">
                                                <div class="icon p_relative d_iblock g_color"><i class="icon-15"></i></div>
                                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-1.png" alt=""></div>
                                            </div>
                                            <h4 class="d_block fs_20 lh_30 mb_4">Expert Marketing</h4>
                                            <p class="mb_0">Lorem ipsum dolor sit elit consectetur sed tempor.</p>
                                        </div>
                                        <div class="single-item p_relative d_block pl_80">
                                            <div class="icon-box p_absolute l_0 t_3 w_50 h_50 lh_50 text-center b_radius_50 b_shadow_7">
                                                <div class="icon p_relative d_iblock g_color"><i class="icon-15"></i></div>
                                                <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-1.png" alt=""></div>
                                            </div>
                                            <h4 class="d_block fs_20 lh_30 mb_4">Audiance Analysis</h4>
                                            <p class="mb_0">Lorem ipsum dolor sit elit consectetur sed tempor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_two">
                                <div data-animation-box class="image-box p_relative d_block ml_30 pb_140 mt_20">
                                    <div class="shape parallax-scene parallax-scene-3">
                                        <div data-depth="0.40" class="shape-1 p_absolute w_150 h_150 z_2" style="background-image: url(assets/images/shape/shape-17.png);"></div>
                                        <div data-depth="0.50" class="shape-2 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                                        <div data-depth="0.30" class="shape-3 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                                    </div>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-1 p_relative d_block b_radius_10" data-animation="overlay-animation"><img src="assets/images/resource/chooseus-1.jpg" alt=""></figure>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-2 p_absolute l_0 b_0 b_radius_10 d_block" data-animation="overlay-animation"><img src="assets/images/resource/chooseus-2.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chooseus-one end -->


        <!-- process-one -->
        <section class="process-one p_relative sec-pad text-center bg-color-1">
            <div class="pattern-layer">
                <div class="pattern-1 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-9.png);"></div>
                <div class="pattern-2 p_absolute t_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-10.png);"></div>
                <div class="pattern-3 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-11.png);"></div>
                <div class="pattern-4 p_absolute r_0 b_0" data-parallax='{"x": 100}' style="background-image: url(assets/images/shape/shape-12.png);"></div>
            </div>
            <div class="auto-container">
                <div class="sec-title p_relative d_block mb_60">
                    <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">Process</span>
                    <h2 class="p_relative d_block fs_40 fw_bold mb_30">Always Work Done by The <br />Following Process</h2>
                    <p>Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore aliquaenim minim veniam.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                        <div class="processing-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="shape p_absolute" style="background-image: url(assets/images/shape/shape-19.png);"></div>
                                <div class="icon-box p_relative d_iblock w_170 h_170 lh_170 tran_5 b_radius_50 mb_30 z_1">
                                    <div class="icon p_relative d_iblock tran_5 g_color fs_50"><i class="icon-17"></i></div>
                                    <div class="hov-icon p_absolute l_0 t_0 r_0 w_170 h_170 lh_170 r_0 fs_50 tran_5"><i class="icon-16"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-9.png" alt=""></div>
                                    <span class="count-box p_absolute d_iblock t_5 w_40 h_40 lh_40 b_radius_50 fs_18 fw_sbold z_1">1</span>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_15">Make Schedule</h4>
                                <p>Lorem ipsum dolor sit amet adipelit sed eiusmtempor dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                        <div class="processing-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="shape p_absolute" style="background-image: url(assets/images/shape/shape-19.png);"></div>
                                <div class="icon-box p_relative d_iblock w_170 h_170 lh_170 tran_5 b_radius_50 mb_30 z_1">
                                    <div class="icon p_relative d_iblock tran_5 g_color fs_50"><i class="icon-18"></i></div>
                                    <div class="hov-icon p_absolute l_0 t_0 r_0 w_170 h_170 lh_170 r_0 fs_50 tran_5"><i class="icon-16"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-9.png" alt=""></div>
                                    <span class="count-box p_absolute d_iblock t_5 w_40 h_40 lh_40 b_radius_50 fs_18 fw_sbold z_1">2</span>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_15">Start Discussion</h4>
                                <p>Lorem ipsum dolor sit amet adipelit sed eiusmtempor dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 processing-block">
                        <div class="processing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="icon-box p_relative d_iblock w_170 h_170 lh_170 tran_5 b_radius_50 mb_30 z_1">
                                    <div class="icon p_relative d_iblock tran_5 g_color fs_50"><i class="icon-19"></i></div>
                                    <div class="hov-icon p_absolute l_0 t_0 r_0 w_170 h_170 lh_170 r_0 fs_50 tran_5"><i class="icon-16"></i></div>
                                    <div class="icon-img hidden-icon"><img src="assets/images/icons/hid-icon-9.png" alt=""></div>
                                    <span class="count-box p_absolute d_iblock t_5 w_40 h_40 lh_40 b_radius_50 fs_18 fw_sbold z_1">3</span>
                                </div>
                                <h4 class="d_block fs_20 lh_30 mb_15">Enjoy Plan</h4>
                                <p>Lorem ipsum dolor sit amet adipelit sed eiusmtempor dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- process-one end -->


        <!-- skills-one -->
        <section class="skills-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative sec-pad">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_three">
                                <div data-animation-box class="image-box p_relative d_block mr_30 pr_190 pt_90">
                                    <div class="shape parallax-scene parallax-scene-4">
                                        <div data-depth="0.50" class="shape-1 p_absolute w_65 h_65" style="background-image: url(assets/images/shape/shape-20.png);"></div>
                                        <div data-depth="0.30" class="shape-2 p_absolute w_95 h_95" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                                    </div>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-2 p_absolute t_0 r_0 b_radius_10" data-animation="overlay-animation"><img src="assets/images/resource/skills-2.jpg" alt=""></figure>
                                    <figure data-animation-text class="overlay-anim-black-bg image image-1 p_relative d_block b_radius_10" data-animation="overlay-animation"><img src="assets/images/resource/skills-1.jpg" alt=""></figure>
                                    <div class="text p_absolute r_30 b_30 pt_25 pr_70 pl_30 pb_25 z_1">
                                        <h4 class="p_relative d_block fs_20 lh_30 mb_0">Custom Business Solutions Since 1995.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content_block_three">
                                <div class="content-box p_relative d_block ml_30">
                                    <div class="sec-title p_relative d_block mb_20">
                                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">Expertise</span>
                                        <h2 class="p_relative d_block fs_40 fw_bold mb_30">Make Your Dream Come True & Great Number</h2>
                                    </div>
                                    <div class="text p_relative d_block mb_30 wow fadeInUp" data-wow-duration="1500ms">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                                    </div>
                                    <div class="progress-inner p_relative d_block wow fadeInUp" data-wow-duration="1500ms">
                                        <div class="progress-box p_relative d_block mb_35">
                                            <h6 class="d_block fs_16 lh_20 mb_7">Analysis</h6>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="95%"></div>
                                                <div class="count-text p_absolute r_0 b_10 fs_16">95%</div>
                                            </div>
                                        </div>
                                        <div class="progress-box p_relative d_block mb_35">
                                            <h6 class="d_block fs_16 lh_20 mb_7">SEO Audit</h6>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="70%"></div>
                                                <div class="count-text p_absolute r_0 b_10 fs_16">70%</div>
                                            </div>
                                        </div>
                                        <div class="progress-box p_relative d_block">
                                            <h6 class="d_block fs_16 lh_20 mb_7">Optimization</h6>
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="90%"></div>
                                                <div class="count-text p_absolute r_0 b_10 fs_16">90%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- skills-one end -->


        <!-- clients-one -->
        <section class="clients-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a></figure>
                        </div>
                        <div class="clients-logo-box">
                            <figure class="image"><a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                            <figure class="overlay-image"><a href="index.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- clients-one end -->


        <!-- testimonial-one -->
        <section class="testimonial-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative pt_150 pb_140">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="sec-title p_relative d_block mb_60 text-center z_1">
                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">Testimonials</span>
                        <h2 class="p_relative d_block fs_40 fw_bold mb_30">Trusted by More Than 3k Clients <br />Around The World</h2>
                        <p>Amet consectur adipiscing elit sed eiusmod ex tempor incididunt <br />labore dolore aliquaenim minim veniam.</p>
                    </div>
                    <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Kevin Spacey</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit dicing elit sed do usmod tempor ux incididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix unde omnis iste natus error sit voluptatem accusantium doloreque laudantum.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-2.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Nicolas Lawson</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box p_relative d_block">
                                <div class="text p_relative d_block b_radius_10 pt_35 pr_40 pb_40 pl_40 mb_30">
                                    <ul class="rating clearfix p_relative d_block mb_15">
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                        <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor amet consectur elit adicing elit sed do usmod tempor quis incididunt enim.</p>
                                </div>
                                <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                    <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="assets/images/resource/testimonial-3.png" alt=""></figure>
                                    <h4 class="d_block fs_20 lh_30 mb_2">Keanu Reeves</h4>
                                    <span class="designation p_relative d_block fs_16 lh_20">Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-one -->


        <!-- funfact-one -->
        <section class="funfact-one pt_90 pb_80 text-center p_relative">
            <div class="shape parallax-scene parallax-scene-5">
                <div data-depth="0.50" class="shape-1 p_absolute" style="background-image: url(assets/images/shape/shape-21.png);"></div>
                <div data-depth="0.30" class="shape-2 p_absolute" style="background-image: url(assets/images/shape/shape-22.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color fw_bold mb_17">
                                    <span class="count-text" data-speed="2500" data-stop="90">0</span>
                                </div>
                                <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Successful projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color fw_bold mb_17">
                                    <span class="count-text" data-speed="2500" data-stop="2.6">0</span><span>M</span>
                                </div>
                                <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color fw_bold mb_17">
                                    <span class="count-text" data-speed="2500" data-stop="35">0</span>
                                </div>
                                <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Experienced Staff</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                        <div class="counter-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block">
                                <div class="count-outer count-box p_relative d_block fs_70 lh_70 g_color fw_bold mb_17">
                                    <span class="count-text" data-speed="2500" data-stop="10">0</span>
                                </div>
                                <p class="p_relative d_block fs_16 lh_20 fw_medium color_white">Awards Win</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-one end -->


        <!-- pricing-one -->
        <section class="pricing-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative sec-pad">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="sec-title p_relative d_block mb_35 text-center z_1">
                        <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">Pricing Table</span>
                        <h2 class="p_relative d_block fs_40 fw_bold mb_30">Not Any Hidden Charge, Choose <br />Your Pricing Plan</h2>
                    </div>
                    <div class="tabs-box">
                        <div class="tab-btn-box p_relative d_block mb_60 centred">
                            <ul class="tab-btns tab-buttons clearfix p_relative d_iblock">
                                <li class="tab-btn active-btn" data-tab="#tab-1">Monthly</li>
                                <li class="tab-btn" data-tab="#tab-2">Yearly</li>
                            </ul>
                        </div>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 pricing-block">
                                        <div class="pricing-block-one">
                                            <div class="pricing-table p_relative d_block pt_45 pr_50 pb_50 pl_50 b_radius_10">
                                                <div class="table-header p_relative d_block mb_30">
                                                    <h6 class="d_block fs_16 lh_20 fw_medium g_color mb_11">Basic Plan</h6>
                                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_0">$39.75 <span class="fs_17">/ mo</span></h2>
                                                    <p class="fs_18">Fruit is their fill meat, hath abundantly place meat don't stars.</p>
                                                </div>
                                                <div class="table-content p_relative d_block p_relative pt_25 pr_30 pl_30 pb_25 b_radius_10 mb_40">
                                                    <ul class="feature-list clearfix">
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25 mb_16">1 User</li>
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25 mb_16">Competitive analysis</li>
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25">Monthly management</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="index.html" class="theme-btn theme-btn-two"><span data-text="Select Plan">Select Plan</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 pricing-block">
                                        <div class="pricing-block-one active-block">
                                            <div class="pricing-table p_relative d_block pt_45 pr_50 pb_50 pl_50 b_radius_10">
                                                <div class="shape-1 hero-shape-three p_absolute"></div>
                                                <div class="shape-2 p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-24.png);"></div>
                                                <div class="table-header p_relative d_block mb_30">
                                                    <h6 class="d_block fs_16 lh_20 fw_medium g_color mb_11">Special Plan</h6>
                                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_0">$49.75 <span class="fs_17">/ mo</span></h2>
                                                    <p class="fs_18">Fruit is their fill meat, hath abundantly place meat don't stars.</p>
                                                </div>
                                                <div class="table-content p_relative d_block p_relative pt_25 pr_30 pl_30 pb_25 b_radius_10 mb_40">
                                                    <ul class="feature-list clearfix">
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25 mb_16">1 User</li>
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25 mb_16">Competitive analysis</li>
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25">Monthly management</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="index.html" class="theme-btn theme-btn-one">Select Plan<i class="icon-4"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab" id="tab-2">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 pricing-block">
                                        <div class="pricing-block-one active-block">
                                            <div class="pricing-table p_relative d_block pt_45 pr_50 pb_50 pl_50 b_radius_10">
                                                <div class="shape-1 hero-shape-three p_absolute"></div>
                                                <div class="shape-2 p_absolute t_0 r_0" style="background-image: url(assets/images/shape/shape-24.png);"></div>
                                                <div class="table-header p_relative d_block mb_30">
                                                    <h6 class="d_block fs_16 lh_20 fw_medium g_color mb_11">Special Plan</h6>
                                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_0">$69.75 <span class="fs_17">/ ye</span></h2>
                                                    <p class="fs_18">Fruit is their fill meat, hath abundantly place meat don't stars.</p>
                                                </div>
                                                <div class="table-content p_relative d_block p_relative pt_25 pr_30 pl_30 pb_25 b_radius_10 mb_40">
                                                    <ul class="feature-list clearfix">
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25 mb_16">1 User</li>
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25 mb_16">Competitive analysis</li>
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25">Monthly management</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="index.html" class="theme-btn theme-btn-one">Select Plan<i class="icon-4"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 pricing-block">
                                        <div class="pricing-block-one">
                                            <div class="pricing-table p_relative d_block pt_45 pr_50 pb_50 pl_50 b_radius_10">
                                                <div class="table-header p_relative d_block mb_30">
                                                    <h6 class="d_block fs_16 lh_20 fw_medium g_color mb_11">Premium Plan</h6>
                                                    <h2 class="d_block fs_40 lh_50 fw_bold mb_0">$99.75 <span class="fs_17">/ ye</span></h2>
                                                    <p class="fs_18">Fruit is their fill meat, hath abundantly place meat don't stars.</p>
                                                </div>
                                                <div class="table-content p_relative d_block p_relative pt_25 pr_30 pl_30 pb_25 b_radius_10 mb_40">
                                                    <ul class="feature-list clearfix">
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25 mb_16">1 User</li>
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25 mb_16">Competitive analysis</li>
                                                        <li class="p_relative d_block fs_16 lh_25 pl_25">Monthly management</li>
                                                    </ul>
                                                </div>
                                                <div class="table-footer">
                                                    <a href="index.html" class="theme-btn theme-btn-two"><span data-text="Select Plan">Select Plan</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-one end -->


        <!-- cta-one -->
        <section class="cta-one p_relative pt_130 pb_140 centred">
            <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/cta-bg.jpg);"></div>
            <div class="shape">
                <div class="shape-1 hero-shape-three p_absolute z_1"></div>
                <div class="shape-2 p_absolute l_0 b_0 z_1" style="background-image: url(assets/images/shape/shape-26.png);"></div>
                <div class="shape-3 hero-shape-three p_absolute z_1"></div>
                <div class="shape-4 p_absolute t_0 r_0 z_1" style="background-image: url(assets/images/shape/shape-16.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-box p_relative z_1">
                    <h2 class="d_block fs_40 fw_bold mb_20">Need Help Finding The Best Solution To Operate Your Business?</h2>
                    <p class="fs_17 mb_35">We help our clients succeed by creating brand identities, digital <br />experiences, and print materials that communicate clearly.</p>
                    <a href="index.html" class="theme-btn theme-btn-two wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><span data-text="Get Started">Get Started</span></a>
                </div>
            </div>
        </section>
        <!-- cta-one end -->


        <!-- news-one -->
        <section class="news-one p_relative">
            <div class="auto-container">
                <div class="inner-container p_relative sec-pad">
                    <div class="section-line">
                        <div class="line line-1 p_absolute"></div>
                        <div class="line line-2 p_absolute"></div>
                        <div class="line line-3 p_absolute"></div>
                    </div>
                    <div class="upper-box p_relative d_block z_1 pb_30">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                                <div class="sec-title p_relative d_block mb_20">
                                    <span class="sub-title p_relative d_iblock fs_15 fw_medium g_color mb_19">Article</span>
                                    <h2 class="p_relative d_block fs_40 fw_bold mb_0">Latest Articles</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                                <div class="text p_relative d_block pl_100">
                                    <p class="fs_18">Our design services starts and ends with a best-in-class experience strategy that builds brands.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                        <div class="post-date p_absolute l_30 t_30 b_shadow_6 pt_1 pr_19 pb_1 pl_19 z_1">
                                            <h6 class="p_relative d_iblock fs_15 fw_medium g_color">Oct 20, 2021</h6>
                                        </div>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                                        <ul class="post-info clearfix p_relative d_block mb_5">
                                            <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="blog-details.html">Ashley Bronks</a></li>
                                            <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                                        </ul>
                                        <h4 class="d_block fs_20 lh_30 mb_15"><a href="blog-details.html">Unsatiable Entreaties May Collecting Power.</a></h4>
                                        <p class="d_block mb_20">Lorem ipsum dolor sit amet consectur adipisicing sed.</p>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow slideInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                        <div class="post-date p_absolute l_30 t_30 b_shadow_6 pt_1 pr_19 pb_1 pl_19 z_1">
                                            <h6 class="p_relative d_iblock fs_15 fw_medium g_color">Oct 15, 2021</h6>
                                        </div>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                                        <ul class="post-info clearfix p_relative d_block mb_5">
                                            <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="blog-details.html">Ashley Bronks</a></li>
                                            <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                                        </ul>
                                        <h4 class="d_block fs_20 lh_30 mb_15"><a href="blog-details.html">Need Help Finding The Best Solution.</a></h4>
                                        <p class="d_block mb_20">Lorem ipsum dolor sit amet consectur adipisicing sed.</p>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 b_shadow_6">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                        <div class="post-date p_absolute l_30 t_30 b_shadow_6 pt_1 pr_19 pb_1 pl_19 z_1">
                                            <h6 class="p_relative d_iblock fs_15 fw_medium g_color">Oct 12, 2021</h6>
                                        </div>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_30 pr_30 pb_40 pl_40">
                                        <ul class="post-info clearfix p_relative d_block mb_5">
                                            <li class="p_relative d_iblock float_left mr_30 fs_16"><a href="blog-details.html">Ashley Bronks</a></li>
                                            <li class="p_relative d_iblock float_left fs_16">10 mins Read</li>
                                        </ul>
                                        <h4 class="d_block fs_20 lh_30 mb_15"><a href="blog-details.html">Make Your Dream Come True & Great Number</a></h4>
                                        <p class="d_block mb_20">Lorem ipsum dolor sit amet consectur adipisicing sed.</p>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn theme-btn-two"><span data-text="Learn More">Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-one end -->


        <!-- footer-one -->
        <footer class="footer-one">
            <div class="pattern-layer">
                <div class="pattern-1 hero-shape-three"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-28.png);"></div>
                <div class="pattern-3 hero-shape-three"></div>
                <div class="pattern-4" style="background-image: url(assets/images/shape/shape-30.png);"></div>
            </div>
            <div class="footer-top">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <figure class="footer-logo pull-left">
                            <a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a>
                        </figure>
                        <ul class="social-links pull-right clearfix"> 
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-widget-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="widget-title">
                                    <h4>About</h4>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incididunt labore dolore magna aliqua enim ad minim.</p>
                                </div>
                                <div class="subscribe-inner">
                                    <form action="https://html.tonatheme.com/2023/atrix/contact.html" method="post" class="subscribe-form">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your email address" readonly="">
                                            <button type="submit"><i class="icon-4"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_80 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="widget-title">
                                    <h4>Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">About</a></li>
                                        <li><a href="index.html">Services</a></li>
                                        <li><a href="index.html">Job</a></li>
                                        <li><a href="index.html">opportunities</a></li>
                                        <li><a href="index.html">Location</a></li>
                                        <li><a href="index.html">Article</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="widget-title">
                                    <h4>Services</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.html">About</a></li>
                                        <li><a href="index.html">Services</a></li>
                                        <li><a href="index.html">Job</a></li>
                                        <li><a href="index.html">opportunities</a></li>
                                        <li><a href="index.html">Location</a></li>
                                        <li><a href="index.html">Article</a></li>
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="widget-title">
                                    <h4>Contacts</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                        <li><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                        <li><a href="mailto:sample@example.com">sample@example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner clearfix">
                        <div class="copyright pull-left">
                            <p><a href="index.html">ATRIX</a> &copy; 2021 All Right Reserved</p>
                        </div>
                      
                        <ul class="footer-nav clearfix pull-right">
                            <li><a href="index.html">Terms of Service</a></li>
                            <li><a href="index.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-one end -->


        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text g_color">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->


    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/parallax.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from html.tonatheme.com/2023/atrix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jan 2024 06:18:36 GMT -->
</html>
