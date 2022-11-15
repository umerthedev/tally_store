<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Tally Store</title>

    <!-- Custom CSS -->
    <link href="customer_assets/assets/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        <div class="header header-transparent dark-text">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#">
                            <img src="customer_assets/assets/img/logo-red.png" class="logo" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                        <div class="mobile_nav">
                            <ul>
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#login"
                                        class="text-danger fs-lg">
                                        <i class="lni lni-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#login"
                                        class="crs_yuo12 w-auto text-white bg-danger">
                                        <span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post
                                            Job</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none">
                        <ul class="nav-menu">
                            <li>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/home') }}">Dashboard</a>
                                    @else
                                        <a href="#">Home</a>
                                        {{-- <ul class="nav-dropdown nav-submenu">
                                   
                                </ul> --}}
                                    @endauth
                                @endif
                            </li>
                        </ul>

                        <ul class="nav-menu nav-menu-social align-to-right">
                            @if (Route::has('login'))
                                @auth
                                    <x-app-layout>

                                    </x-app-layout>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}" class="ft-medium">
                                            <i class="lni lni-user mr-2"></i>Sign In
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}" class="ft-medium">
                                            <i class=""></i>Sign Up
                                        </a>
                                    </li>
                                @endauth
                            @endif
                            {{-- <li class="add-listing bg-danger">
                                <a href="dashboard-post-job.html">
                                    <i class="lni lni-circle-plus mr-1"></i> Post a Job
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        <!-- ======================= Home Banner ======================== -->
        <div class="home-banner margin-bottom-0" style="background: #f6f7f9">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="banner_caption text-left mb-4">
                            <div class="d-block mb-2"></div>
                            <br />
                            <br />
                            <br />
                            <h1 class="banner_title ft-bold mb-1">
                                Explore More Than<br /><span class="text-danger">7840+</span>
                                Shops
                            </h1>
                            <p class="fs-md ft-regular">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque
                            </p>
                        </div>
                        <form class="bg-white rounded p-1">
                            <div class="row no-gutters">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                                    <div class="form-group position-relative">
                                        <input type="text" class="form-control lg form-ico border"
                                            placeholder="Shop Name" />
                                        <i class="bnc-ico lni lni-search-alt"></i>
                                    </div>
                                    <div class="form-group position-relative">
                                        <input type="text" class="form-control lg form-ico"
                                            placeholder="Location or Zip Code" />
                                        <i class="bnc-ico lni lni-target"></i>
                                    </div>
                                    <div class="form-group position-relative">
                                        <select class="custom-select lg border">
                                            <option value="1">Choose Categories</option>
                                            <option value="2">Super Shop</option>
                                            <option value="3">General Store</option>
                                            <option value="4">Engineering Services</option>
                                            <option value="5">Healthcare/Pharma</option>
                                            <option value="6">Telecom/ Internet</option>
                                            <option value="7">Finance/Insurance</option>
                                        </select>
                                    </div>
                                    <div class="form-group position-relative">
                                        <button class="btn full-width custom-height-lg bg-danger text-white fs-md"
                                            type="button">
                                            Find Shop
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="bnr_thumb">
                            <img src="customer_assets/assets/img/bn-1.png" class="img-fluid bnr_img" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======================= Home Banner ======================== -->


        <!-- ======================= Blog Start ============================ -->
        <section class="space min">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-4">
                            <h6 class="text-muted mb-0">Shop In Your Area</h6>
                            <h2 class="ft-bold">
                                Pickup Your <span class="text-danger">Favorite Shops</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <!-- Single Item -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="blg_grid_box">
                            <div class="blg_grid_thumb">
                                <a href="blog-detail.html"><img src="https://via.placeholder.com/1200x800"
                                        class="img-fluid" alt="" /></a>
                            </div>
                            <div class="blg_grid_caption">
                                <div class="blg_tag"><span>Marketing</span></div>
                                <div class="blg_title">
                                    <h4>
                                        <a href="blog-detail.html">How To Register &amp; Enrolled on SkillUp Step by
                                            Step?</a>
                                    </h4>
                                </div>
                                <div class="blg_desc">
                                    <p>
                                        At vero eos et accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum
                                    </p>
                                </div>
                            </div>
                            <div class="crs_grid_foot">
                                <div
                                    class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
                                    <div class="crs_fl_first">
                                        <div class="crs_tutor">
                                            <div class="crs_tutor_thumb">
                                                <a href="instructor-detail.html"><img
                                                        src="https://via.placeholder.com/500x500"
                                                        class="img-fluid circle" width="35" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="crs_fl_last">
                                        <div class="foot_list_info">
                                            <ul>
                                                <li>
                                                    <div class="elsio_ic">
                                                        <i class="fa fa-eye text-success"></i>
                                                    </div>
                                                    <div class="elsio_tx">10k Views</div>
                                                </li>
                                                <li>
                                                    <div class="elsio_ic">
                                                        <i class="fa fa-clock text-warning"></i>
                                                    </div>
                                                    <div class="elsio_tx">10 July 2021</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- ======================= Blog Start ============================ -->


        <!-- ======================= All category ======================== -->
        <section class="space gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-muted mb-0">Popular Categories</h6>
                            <h2 class="ft-bold">Browse Top Categories</h2>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-laptop-phone fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">
                                        Software Company
                                    </h4>
                                    <span class="text-muted">607 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-cloud fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">
                                        Cloud Computing
                                    </h4>
                                    <span class="text-muted">960 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-shopify fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">
                                        Logistics/Shipping
                                    </h4>
                                    <span class="text-muted">438 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-construction fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">
                                        Engineering Services
                                    </h4>
                                    <span class="text-muted">644 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-phone-set fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">
                                        Telecom/ Internet
                                    </h4>
                                    <span class="text-muted">380 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-sthethoscope fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">
                                        Healthcare/Pharma
                                    </h4>
                                    <span class="text-muted">472 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-money-protection fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">
                                        Finance/Insurance
                                    </h4>
                                    <span class="text-muted">654 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-diamond fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">
                                        Product Software
                                    </h4>
                                    <span class="text-muted">732 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-briefcase fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">
                                        Diversified/Retail
                                    </h4>
                                    <span class="text-muted">610 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-graduation fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Education</h4>
                                    <span class="text-muted">960 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-mastercard fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">Banking/BPO</h4>
                                    <span class="text-muted">740 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="cats-wrap text-center">
                            <a href="job-search-v1.html" class="cats-box d-block rounded bg-white px-2 py-4">
                                <div
                                    class="text-center mb-2 mx-auto position-relative d-inline-flex align-items-center justify-content-center p-3 bg-light-danger circle">
                                    <i class="lni lni-gallery fs-lg text-danger"></i>
                                </div>
                                <div class="cats-box-caption">
                                    <h4 class="fs-md mb-0 ft-medium m-catrio">
                                        Printing & Packaging
                                    </h4>
                                    <span class="text-muted">425 Jobs</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /row -->

                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="position-relative text-center">
                            <a href="job-search-v1.html"
                                class="btn btn-md bg-danger rounded text-light hover-theme">Browse All Categories<i
                                    class="lni lni-arrow-right-circle ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= All category ======================== -->

        <!-- ======================= Newsletter Start ============================ -->
        <section class="space bg-cover"
            style="background: #ea2b33 url(customer_assets/assets/img/landing-bg.png) no-repeat">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="sec_title position-relative text-center mb-5">
                            <h6 class="text-light mb-0">Subscribr Now</h6>
                            <h2 class="ft-bold text-light">Get All New Job Notification</h2>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                        <form class="bg-white rounded p-1">
                            <div class="row no-gutters">
                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="form-control lg left-ico"
                                            placeholder="Enter Your Email Address" />
                                        <i class="bnc-ico lni lni-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                    <div class="form-group mb-0 position-relative">
                                        <button class="btn full-width custom-height-lg bg-dark text-white fs-md"
                                            type="button">
                                            Subscribe
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Newsletter Start ============================ -->

        <!-- ============================ Footer Start ================================== -->
        <footer class="light-footer light-dark-footer style-2">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="footer_widget">
                                <img src="customer_assets/assets/img/logo-red.png" class="img-footer small mb-2"
                                    alt="" />

                                <div class="address mt-2">
                                    3298 Grant Street Longview, New Texox<br />United Kingdom
                                    75601
                                </div>
                                <div class="address mt-3">
                                    1-202-555-0106<br />support@workplex.com
                                </div>
                                <div class="address mt-2">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="theme-cl"><i
                                                    class="lni lni-facebook-filled"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="theme-cl"><i
                                                    class="lni lni-twitter-filled"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="theme-cl"><i class="lni lni-youtube"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="theme-cl"><i
                                                    class="lni lni-instagram-filled"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="theme-cl"><i
                                                    class="lni lni-linkedin-original"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">For Employers</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Explore Candidates</a></li>
                                    <li><a href="#">Job Pricing</a></li>
                                    <li><a href="#">Submit Job</a></li>
                                    <li><a href="#">Shortlisted</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">For Candidates</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Explore All Jobs</a></li>
                                    <li><a href="#">Browse Categories</a></li>
                                    <li><a href="#">Saved Jobs</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">About Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Who We'r?</a></li>
                                    <li><a href="#">Our Mission</a></li>
                                    <li><a href="#">Our team</a></li>
                                    <li><a href="#">Packages</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Helpful Topics</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">FAQ's Page</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom br-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0">
                                © 2022 Workplex. Designd By
                                <a href="https://themezhub.com">ThemezHub</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

        <!-- Log In Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal"
            aria-hidden="true">
            <div class="modal-dialog modal-xl login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-headers">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ti-close"></span>
                        </button>
                    </div>

                    <div class="modal-body p-5">
                        <div class="text-center mb-4">
                            <h2 class="m-0 ft-regular">Login</h2>
                        </div>

                        <form>
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" placeholder="Username*" />
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password*" />
                            </div>

                            <div class="form-group">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="flex-1">
                                        <input id="dd" class="checkbox-custom" name="dd"
                                            type="checkbox" />
                                        <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                    </div>
                                    <div class="eltio_k2">
                                        <a href="#" class="text-danger">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit"
                                    class="btn btn-md full-width bg-danger text-light fs-md ft-medium">
                                    Login
                                </button>
                            </div>

                            <div class="form-group text-center mb-0">
                                <p class="extra">
                                    Not a member?<a href="#et-register-wrap" class="text-dark">
                                        Register</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="customer_assets/assets/js/jquery.min.js"></script>
    <script src="customer_assets/assets/js/popper.min.js"></script>
    <script src="customer_assets/assets/js/bootstrap.min.js"></script>
    <script src="customer_assets/assets/js/slick.js"></script>
    <script src="customer_assets/assets/js/slider-bg.js"></script>
    <script src="customer_assets/assets/js/smoothproducts.js"></script>
    <script src="customer_assets/assets/js/snackbar.min.js"></script>
    <script src="customer_assets/assets/js/jQuery.style.switcher.js"></script>
    <script src="customer_assets/assets/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
</body>

</html>
