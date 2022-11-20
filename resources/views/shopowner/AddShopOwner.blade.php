<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tally Store</title>

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
                            <li class="active"><a href="{{ url('/home') }}"><i
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
                {{-- <div class="form-group position-relative ">
                    <a href="{{ url('add_shopinfo') }}">
                        <button class="btn full-width custom-height-lg bg-dark text-white rounded" type="button">
                            Add Shop
                        </button></a>
                </div> --}}
                <div class="dashboard-widg-bar d-block">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="_dashboard_content bg-white rounded mb-4">
                                <div class="_dashboard_content_header br-bottom py-3 px-3">
                                    <div class="_dashboard__header_flex">
                                        <h4 class="mb-0 ft-medium fs-md"><i
                                                class="fa fa-file mr-1 theme-cl fs-sm"></i>Add Shop Info</h4>
                                    </div>
                                </div>

                                <div class="_dashboard_content_body py-3 px-3">
                                    <form class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                            <div class="custom-file avater_uploads">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile"><i
                                                        class="fa fa-user"></i></label>
                                            </div>
                                        </div>

                                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label class="text-dark ft-medium">Shop Name</label>
                                                        <input type="text" class="form-control rounded"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label class="text-dark ft-medium">Shop Address</label>
                                                        <input type="text" class="form-control rounded"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label class="text-dark ft-medium">Shop category</label>
                                                        <select class="form-control rounded">
                                                            <option>Snacks & Instant Foods</option>
                                                            <option>Home Care & Cleaning</option>
                                                            <option>Bread, Biscuits & Cake</option>
                                                            <option>Personal Care</option>
                                                            <option>Baby Food & Care</option>
                                                            <option>Baby Food & Care</option>
                                                            <option>Fruits & Vegetables</option>
                                                            <option>Fashion & Lifestyles</option>
                                                            <option>Digital Gift Card</option>
                                                            <option>Milk & Dairy Product</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="form-group">
                                                        <label class="text-dark ft-medium">Email</label>
                                                        <input type="email" class="form-control rounded"
                                                            value="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label class="text-dark ft-medium">About Shop</label>
                                                        <textarea class="form-control with-light" placeholder="Resume Content"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save &
                            Preview</button>
                    </div>
                </div>
                <!-- footer -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="py-3">© 2022 Workplex. Designd By ThemezHub.</div>
                    </div>
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
