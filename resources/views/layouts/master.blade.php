<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'LMS') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

        <!-- App css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">
        {{-- font-awesome link --}}
        <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.min.css') }}">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/icofont/css/icofont.css') }}">
        <!-- third party css -->
        <link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <!-- third party css end -->

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
{{--        <div class="wrapper">--}}
{{--            <!-- ========== Left Sidebar Start ========== -->--}}
{{--            <div class="leftside-menu">--}}

{{--                <!-- LOGO -->--}}
{{--                <a href="{{ route('admin.dashboard') }}" class="logo text-center logo-light">--}}
{{--                    <span class="logo-lg">--}}
{{--                        <img src="{{ asset('assets/images/favicon.png') }}" alt="school_logo" height="55"><small class="text-info h6">Federal University Kashere.</small>--}}
{{--                        --}}{{-- <p class="text-info">--}}
{{--                            FUK--}}
{{--                        </p> --}}
{{--                    </span>--}}
{{--                    <span class="logo-sm">--}}
{{--                        <img src="{{ asset('assets/images/favicon.png') }}" alt="" height="55">--}}

{{--                    </span>--}}
{{--                </a>--}}

{{--                <div class="h-100" id="leftside-menu-container" data-simplebar="">--}}

{{--                    <!--- Sidemenu -->--}}
{{--                    <ul class="side-nav">--}}
{{--                        <li class="side-nav-item">--}}
{{--                            <a href="{{ route('admin.dashboard') }}" class="side-nav-link">--}}
{{--                                <i class="uil-home-alt"></i>--}}
{{--                                <span> Dashboards </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="side-nav-title side-nav-item">Apps</li>--}}

{{--                        <li class="side-nav-item">--}}
{{--                            <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">--}}
{{--                                <i class="icofont icofont-group-students"></i>--}}
{{--                                <span> Student management </span>--}}
{{--                                <span class="menu-arrow"></span>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="sidebarTasks">--}}
{{--                                <ul class="side-nav-second-level">--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ route('create.student') }}"><i class="icofont icofont-group-students"></i> Add student</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="fas fa-user-cog"></i> Manage student</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li class="side-nav-item">--}}
{{--                            <a href="apps-calendar.html" class="side-nav-link">--}}
{{--                                <i class="uil-calender"></i>--}}
{{--                                <span> Issue list </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="side-nav-item">--}}
{{--                            <a data-bs-toggle="collapse" href="#sidebarIssueBooks" aria-expanded="false" aria-controls="sidebarIssueBooks" class="side-nav-link">--}}
{{--                                <i class="icofont icofont-book-alt"></i>--}}
{{--                                <span> Issue books </span>--}}
{{--                                <span class="menu-arrow"></span>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="sidebarIssueBooks">--}}
{{--                                <ul class="side-nav-second-level">--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="icofont icofont-teacher"></i> Lecturer issue book</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="icofont icofont-group-students"></i> Student issue book</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li class="side-nav-item">--}}
{{--                            <a data-bs-toggle="collapse" href="#sidebarManageBooks" aria-expanded="false" aria-controls="sidebarManageBooks" class="side-nav-link">--}}
{{--                                <i class="fas fa-location-arrow"></i>--}}
{{--                                <span> Manange books </span>--}}
{{--                                <span class="menu-arrow"></span>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="sidebarManageBooks">--}}
{{--                                <ul class="side-nav-second-level">--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> Add books</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#"><i class="fa fa-user-friends"></i> Display books</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li class="side-nav-item">--}}
{{--                            <a href="{{ route('project.create') }}" target="_blank" class="side-nav-link">--}}
{{--                                <i class="fa fa-cloud-upload-alt"></i>--}}
{{--                                <span> Student project uploader </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="side-nav-item">--}}
{{--                            <a href="apps-file-manager.html" class="side-nav-link">--}}
{{--                                <i class="fa fa-book"></i>--}}
{{--                                <span> View requested book </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="side-nav-title side-nav-item">Custom</li>--}}

{{--                        <li class="side-nav-item">--}}
{{--                            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">--}}
{{--                                <i class="uil-copy-alt"></i>--}}
{{--                                <span> Staffs </span>--}}
{{--                                <span class="menu-arrow"></span>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="sidebarPages">--}}
{{--                                <ul class="side-nav-second-level">--}}
{{--                                    <li>--}}
{{--                                        <a href="#">Add staff</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">Manage staff</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                        <li class="side-nav-title side-nav-item">Others</li>--}}
{{--                        <li class="side-nav-item">--}}
{{--                            <a data-bs-toggle="collapse" href="#sidebarLayoutsa" aria-expanded="false" aria-controls="sidebarLayoutsa" class="side-nav-link">--}}
{{--                                <i class="uil-cog"></i>--}}
{{--                                <span> Setting </span>--}}
{{--                                <span class="menu-arrow"></span>--}}
{{--                            </a>--}}
{{--                            <div class="collapse" id="sidebarLayoutsa">--}}
{{--                                <ul class="side-nav-second-level">--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ route('profile') }}"><i class="fas fa-user-cog"></i> Profile</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ route('add.year') }}"><i class="icofont icofont-ui-calendar"></i> Add year </a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ route('create.curriculum') }}"><i class="icofont icofont-link-alt"></i> Curriculum</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ route('create.courses') }}"><i class="icofont icofont-read-book-alt"></i> Course of study</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ route('create.department') }}"><i class="icofont icofont-list"></i> Department</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                    </ul>--}}

{{--                    <!-- End Sidebar -->--}}

{{--                    <div class="clearfix"></div>--}}

{{--                </div>--}}
{{--                <!-- Sidebar -left -->--}}

{{--            </div>--}}
{{--            <!-- Left Sidebar End -->--}}

{{--            <!-- ============================================================== -->--}}
{{--            <!-- Start Page Content here -->--}}
{{--            <!-- ============================================================== -->--}}

{{--            <div class="content-page">--}}
{{--                <div class="content">--}}
{{--                    <!-- Topbar Start -->--}}
{{--                    <div class="navbar-custom">--}}
{{--                        <ul class="list-unstyled topbar-menu float-end mb-0">--}}
{{--                            <li class="dropdown notification-list d-lg-none">--}}
{{--                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">--}}
{{--                                    <i class="dripicons-search noti-icon"></i>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">--}}
{{--                                    <form class="p-3">--}}
{{--                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="notification-list">--}}
{{--                                <a class="nav-link end-bar-toggle" href="javascript: void(0);">--}}
{{--                                    <i class="dripicons-gear noti-icon"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li class="dropdown notification-list">--}}
{{--                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">--}}
{{--                                    <span class="account-user-avatar">--}}
{{--                                        <img src="{{ asset('assets/images/users/avatar-blank.jpg') }}" alt="user-image" class="rounded-circle">--}}
{{--                                    </span>--}}
{{--                                    <span>--}}
{{--                                        <span class="account-user-name">{{ Auth::guard('admin')->user()->email }}</span>--}}
{{--                                        <span class="badge bg-info">Online</span>--}}
{{--                                    </span>--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">--}}
{{--                                    <!-- item-->--}}
{{--                                    <div class=" dropdown-header noti-title">--}}
{{--                                        <h6 class="text-overflow m-0">Welcome !</h6>--}}
{{--                                    </div>--}}

{{--                                    <!-- item-->--}}
{{--                                    <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                                        <i class="mdi mdi-account-circle me-1"></i>--}}
{{--                                        <span>My Account</span>--}}
{{--                                    </a>--}}

{{--                                    <!-- item-->--}}
{{--                                    <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                                        <i class="mdi mdi-account-edit me-1"></i>--}}
{{--                                        <span>Settings</span>--}}
{{--                                    </a>--}}

{{--                                    <!-- item-->--}}
{{--                                    <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                                        <i class="mdi mdi-lifebuoy me-1"></i>--}}
{{--                                        <span>Support</span>--}}
{{--                                    </a>--}}

{{--                                    <!-- item-->--}}
{{--                                    <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                                        <i class="mdi mdi-lock-outline me-1"></i>--}}
{{--                                        <span>Lock Screen</span>--}}
{{--                                    </a>--}}

{{--                                    <!-- item-->--}}
{{--                                    <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">--}}
{{--                                        <i class="mdi mdi-logout me-1"></i>--}}
{{--                                        <span>Logout</span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                        <button class="button-menu-mobile open-left">--}}
{{--                            <i class="mdi mdi-menu"></i>--}}
{{--                        </button>--}}
{{--                        <div class="app-search dropdown d-none d-lg-block">--}}
{{--                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">--}}
{{--                                <!-- item-->--}}
{{--                                <div class="dropdown-header noti-title">--}}
{{--                                    <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>--}}
{{--                                </div>--}}

{{--                                <!-- item-->--}}
{{--                                <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                                    <i class="uil-notes font-16 me-1"></i>--}}
{{--                                    <span>Analytics Report</span>--}}
{{--                                </a>--}}

{{--                                <!-- item-->--}}
{{--                                <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                                    <i class="uil-life-ring font-16 me-1"></i>--}}
{{--                                    <span>How can I help you?</span>--}}
{{--                                </a>--}}

{{--                                <!-- item-->--}}
{{--                                <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                                    <i class="uil-cog font-16 me-1"></i>--}}
{{--                                    <span>User profile settings</span>--}}
{{--                                </a>--}}

{{--                                <!-- item-->--}}
{{--                                <div class="dropdown-header noti-title">--}}
{{--                                    <h6 class="text-overflow mb-2 text-uppercase">Users</h6>--}}
{{--                                </div>--}}

{{--                                <div class="notification-list">--}}
{{--                                    <!-- item-->--}}
{{--                                    <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">--}}
{{--                                            <div class="w-100">--}}
{{--                                                <h5 class="m-0 font-14">Erwin Brown</h5>--}}
{{--                                                <span class="font-12 mb-0">UI Designer</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}

{{--                                    <!-- item-->--}}
{{--                                    <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                                        <div class="d-flex">--}}
{{--                                            <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">--}}
{{--                                            <div class="w-100">--}}
{{--                                                <h5 class="m-0 font-14">Jacob Deo</h5>--}}
{{--                                                <span class="font-12 mb-0">Developer</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- end Topbar -->--}}

{{--                    <!-- Start Content-->--}}
{{--                    <div class="container-fluid mt-3">--}}
{{--                        @include('flashMessages.messages')--}}
{{--                        @yield('content')--}}
{{--                    </div> <!-- container -->--}}

{{--                </div> <!-- content -->--}}

{{--                <!-- Footer Start -->--}}
{{--                <footer class="footer">--}}
{{--                    <div class="container-fluid">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <script>document.write(new Date().getFullYear())</script> Made with <b>&#10084;</b> by fadil.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </footer>--}}
{{--                <!-- end Footer -->--}}

{{--            </div>--}}

{{--            <!-- ============================================================== -->--}}
{{--            <!-- End Page content -->--}}
{{--            <!-- ============================================================== -->--}}


{{--        </div>--}}
        <!-- END wrapper -->
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- LOGO -->
                <a href="{{ route('admin.dashboard') }}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/favicon.png') }}" alt="school_logo" height="55"><small class="text-info h6">Federal University Kashere.</small>
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/favicon.png') }}" alt="" height="55">

                    </span>
                </a>

                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">
                        <li class="side-nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboards </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                                <i class="uil-copy-alt"></i>
                                <span> Staffs </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPages">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="#">Add staff</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage staff</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title side-nav-item">Others</li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayoutsa" aria-expanded="false" aria-controls="sidebarLayoutsa" class="side-nav-link">
                                <i class="uil-cog"></i>
                                <span> System Setting </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLayoutsa">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('profile') }}"><i class="fas fa-user-cog"></i> User Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('add.year') }}"><i class="icofont icofont-ui-calendar"></i> Add year </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('create.curriculum') }}"><i class="icofont icofont-link-alt"></i> Curriculum</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('create.courses') }}"><i class="icofont icofont-read-book-alt"></i> Course of study</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('create.department') }}"><i class="icofont icofont-list"></i> Department</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>

                            <li class="notification-list">
                                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="{{ asset('assets/images/users/avatar-blank.jpg') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">{{ Auth::guard('admin')->user()->full_name }}</span>
                                        <span class="account-position">Active</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy me-1"></i>
                                        <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>
                                    <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="mt-3">
                            @yield('content')
                        </div>
                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> Made with <b class="text-danger">&#10084;</b> by fadil.
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>


                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>


                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                        <span>Made with <label class="text-danger">&#10083</label> by fadil</span>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->


        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

        <!-- Apex js -->
        <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>

        <!-- Todo js -->
        <script src="{{ asset('assets/js/ui/component.todo.js') }}"></script>

        <!-- demo app -->
        <script src="{{ asset('assets/js/pages/demo.dashboard-crm.js') }}"></script>
        <!-- end demo js-->
        <!-- third party js -->
        <script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.select.min.js') }}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
        <!-- end demo js-->

    </body>
</html>
