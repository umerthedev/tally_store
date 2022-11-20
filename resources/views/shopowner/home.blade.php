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
                                    <li class="breadcrumb-item text-muted"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="theme-cl">Dashboard</a></li>
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

                <div class="dashboard-widg-bar d-block">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="dash-widgets py-5 px-4 bg-success rounded">
                                <h2 class="ft-medium mb-1 fs-xl text-light">46</h2>
                                <p class="p-0 m-0 text-light fs-md">Submit Jobs</p>
                                <i class="lni lni-empty-file"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="dash-widgets py-5 px-4 bg-purple rounded">
                                <h2 class="ft-medium mb-1 fs-xl text-light">87</h2>
                                <p class="p-0 m-0 text-light fs-md">Applications</p>
                                <i class="lni lni-users"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="dash-widgets py-5 px-4 bg-danger rounded">
                                <h2 class="ft-medium mb-1 fs-xl text-light">312</h2>
                                <p class="p-0 m-0 text-light fs-md">Notifications</p>
                                <i class="lni lni-bar-chart"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="dash-widgets py-5 px-4 bg-blue rounded">
                                <h2 class="ft-medium mb-1 fs-xl text-light">32</h2>
                                <p class="p-0 m-0 text-light fs-md">Bookmark</p>
                                <i class="lni lni-heart"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="dashboard-gravity-list with-icons">
                                <h4 class="mb-0 ft-medium">Recent Activities</h4>
                                <ul>
                                    <li>
                                        <i class="dash-icon-box ti-layers text-purple bg-light-purple"></i> Your job
                                        for <strong class="ft-medium text-dark"><a href="#">IOS
                                                Developer</a></strong> has been approved!
                                        <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                                    </li>

                                    <li>
                                        <i class="dash-icon-box ti-star text-success bg-light-success"></i> Jodie
                                        Farrell left a review <div class="numerical-rating high" data-rating="5.0">
                                        </div> for<strong class="ft-medium text-dark"><a href="#"> Real Estate
                                                Logo</a></strong>
                                        <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                                    </li>

                                    <li>
                                        <i class="dash-icon-box ti-heart text-warning bg-light-warning"></i> Someone
                                        bookmarked your <strong class="ft-medium text-dark"><a href="#">SEO
                                                Expert Job</a></strong> listing!
                                        <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                                    </li>

                                    <li>
                                        <i class="dash-icon-box ti-star text-info bg-light-info"></i> Gracie Mahmood
                                        left a review <div class="numerical-rating mid" data-rating="3.8"></div> on
                                        <strong class="ft-medium text-dark"><a href="#">Product
                                                Design</a></strong>
                                        <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                                    </li>

                                    <li>
                                        <i class="dash-icon-box ti-heart text-danger bg-light-danger"></i> Your Magento
                                        Developer job expire<strong class="ft-medium text-dark"><a
                                                href="#">Renew</a></strong> now it!
                                        <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                                    </li>

                                    <li>
                                        <i class="dash-icon-box ti-star text-success bg-light-success"></i> Ethan
                                        Barrett left a review <div class="numerical-rating high" data-rating="4.7">
                                        </div> on <strong class="ft-medium text-dark"><a href="#">New
                                                Logo</a></strong>
                                        <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                                    </li>

                                    <li>
                                        <i class="dash-icon-box ti-star text-purple bg-light-purple"></i> Your Magento
                                        Developer job expire <strong class="ft-medium text-dark"><a
                                                href="#">Renew</a></strong> now it.
                                        <a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="dashboard-gravity-list invoices with-icons">
                                <h4 class="mb-0 ft-medium">Invoices</h4>
                                <ul>

                                    <li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
                                        <strong class="ft-medium text-dark">Starter Plan</strong>
                                        <ul>
                                            <li class="unpaid">Unpaid</li>
                                            <li>Order: #20551</li>
                                            <li>Date: 01/08/2019</li>
                                        </ul>
                                        <div class="buttons-to-right">
                                            <a href="javascript:void(0);" class="button text-light bg-warning">View
                                                Invoice</a>
                                        </div>
                                    </li>

                                    <li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
                                        <strong class="ft-medium text-dark">Basic Plan</strong>
                                        <ul>
                                            <li class="paid">Paid</li>
                                            <li>Order: #20550</li>
                                            <li>Date: 01/07/2019</li>
                                        </ul>
                                        <div class="buttons-to-right">
                                            <a href="javascript:void(0);" class="button text-light bg-warning">View
                                                Invoice</a>
                                        </div>
                                    </li>

                                    <li><i class="dash-icon-box ti-files text-danger bg-light-danger"></i>
                                        <strong class="ft-medium text-dark">Extended Plan</strong>
                                        <ul>
                                            <li class="paid">Paid</li>
                                            <li>Order: #20549</li>
                                            <li>Date: 01/06/2019</li>
                                        </ul>
                                        <div class="buttons-to-right">
                                            <a href="javascript:void(0);" class="button text-light bg-warning">View
                                                Invoice</a>
                                        </div>
                                    </li>

                                    <li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
                                        <strong class="ft-medium text-dark">Platinum Plan</strong>
                                        <ul>
                                            <li class="paid">Paid</li>
                                            <li>Order: #20548</li>
                                            <li>Date: 01/05/2019</li>
                                        </ul>
                                        <div class="buttons-to-right">
                                            <a href="javascript:void(0);" class="button text-light bg-warning">View
                                                Invoice</a>
                                        </div>
                                    </li>

                                    <li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
                                        <strong class="ft-medium text-dark">Extended Plan</strong>
                                        <ul>
                                            <li class="paid">Paid</li>
                                            <li>Order: #20547</li>
                                            <li>Date: 01/04/2019</li>
                                        </ul>
                                        <div class="buttons-to-right">
                                            <a href="javascript:void(0);" class="button text-light bg-warning">View
                                                Invoice</a>
                                        </div>
                                    </li>

                                    <li><i class="dash-icon-box ti-files text-info bg-light-info"></i>
                                        <strong class="ft-medium text-dark">Platinum Plan</strong>
                                        <ul>
                                            <li class="paid">Paid</li>
                                            <li>Order: #20546</li>
                                            <li>Date: 01/03/2019</li>
                                        </ul>
                                        <div class="buttons-to-right">
                                            <a href="javascript:void(0);" class="button text-light bg-warning">View
                                                Invoice</a>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
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
