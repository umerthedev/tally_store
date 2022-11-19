<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Workplex - Creative Job Board HTML Template</title>

    <!-- Custom CSS -->
    <link href="customer_assets/assets/css/styles.css" rel="stylesheet">

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
        <div class="header header-light dark-text head-shadow">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#">
                            <img src="customer_assets/assets/img/logo.png" class="logo" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                        <div class="mobile_nav">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#login"
                                        class="crs_yuo12 w-auto text-dark gray">
                                        <span class="embos_45"><i
                                                class="lni lni-power-switch mr-1 mr-1"></i>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">
                        <ul class="nav-menu">

                            <li><a href="{{ url('/') }}">Home</a>
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

        <!-- ======================= dashboard Detail ======================== -->

        <div class="dashboard-wrap bg-light">
            <a class="mobNavigation" data-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
                aria-controls="MobNav">
                <i class="fas fa-bars mr-2"></i>Dashboard Navigation
            </a>
            <div class="collapse" id="MobNav">
                <div class="dashboard-nav">
                    <div class="dashboard-inner">
                        <ul data-submenu-title="Main Navigation">
                            <li class="active"><a href="employer-dashboard.html"><i
                                        class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
                            <li><a href="dashboard-post-job.html"><i class="lni lni-files mr-2"></i>Post New Offer</a>
                            </li>
                            <li><a href="dashboard-manage-jobs.html"><i class="lni lni-add-files mr-2"></i>Manage
                                    Orders</a></li>
                            <li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span
                                        class="count-tag">4</span></a></li>
                        </ul>
                        <ul data-submenu-title="My Accounts">
                            <li><a href="dashboard-my-profile.html"><i class="lni lni-user mr-2"></i>My Profile </a>
                            </li>
                            <li><a href="dashboard-change-password.html"><i class="lni lni-lock-alt mr-2"></i>Change
                                    Password</a></li>
                            <li><a href="javascript:void(0);"><i class="lni lni-trash-can mr-2"></i>Delete Account</a>
                            </li>
                            <li><a href="index.html"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="dashboard-content">
                <div class="dashboard-tlbar d-block mb-5">
                    <div class="row">
                        <div class="colxl-12 col-lg-12 col-md-12">
                            <h1 class="ft-medium">Hello, {{ Auth::user()->name }}</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item text-muted"><a href="{{ url('/home') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#" class="theme-cl">Add Shop Info</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="form-group position-relative ">
                    <a href="{{ url('add_shopinfo') }}">
                        <button class="btn full-width custom-height-lg bg-dark text-white rounded" type="button">
                            Add Shop
                        </button></a>
                </div>



                <!-- footer -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="py-3">© 2022 Workplex. Designd By ThemezHub.</div>
                    </div>
                </div>

            </div>

        </div>
        <!-- ======================= dashboard Detail End ======================== -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    @include('shopowner.script')

</body>

</html>
