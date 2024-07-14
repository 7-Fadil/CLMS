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
                            <a href="{{ route('create.book') }}" class="side-nav-link">
                                <i class="fas fa-book"></i>
                                <span> Books </span>
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
                                        <a href="#"><i class="mdi mdi-plus"></i> Add staff</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="mdi mdi-book"></i> Manage staff</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#report" aria-expanded="false" aria-controls="report" class="side-nav-link">
                                <i class="fas fa-file-alt"></i>
                                <span> Report </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="report">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="#"><i class="mdi mdi-account-details"></i> Student</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="mdi mdi-bookmark"></i> Books</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#accessControl" aria-expanded="false" aria-controls="accessControl" class="side-nav-link">
                                <i class="fas fa-key"></i>
                                <span> Access control </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="accessControl">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('user-management') }}"><i class="fas fa-user-lock"></i> User management(Admin)</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-user-cog"></i> User signature</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-dot-circle"></i> Role</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-lock"></i> Approval setup</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#curriculum" aria-expanded="false" aria-controls="report" class="side-nav-link">
                                <i class="fas fa-link"></i>
                                <span> Curriculum </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="curriculum">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('create.curriculum') }}"><i class="fas fa-plus"></i> Add curriculum</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-file"></i> Report</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#approval" aria-expanded="false" aria-controls="approval" class="side-nav-link">
                                <i class="fas fa-fire-alt"></i>
                                <span> Approval </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="approval">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="#"><i class="mdi mdi-plus-circle"></i> Fresh</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="mdi mdi-card-plus-outline"></i> Renewal</a>
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
                                        <a href="{{ route('add.year') }}"><i class="fas fa-calendar"></i> Add Session </a>
                                    </li>
                                    <li>

                                    <li>
                                        <a href="{{ route('create.courses') }}"><i class="fas fa-book"></i> Course of study</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('create.department') }}"><i class="fas fa-list"></i> Department</a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="fas fa-bell"></i> Notification</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('book.category') }}"><i class="mdi mdi-book-variant-multiple"></i> Book Category</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <hr>
                        <li class="side-nav-item">
                            <a href="{{ route('admin.logout') }}" class="side-nav-link">
                                <i class="mdi mdi-arrow-left-bold-circle-outline"></i>
                                <span> Logout </span>
                            </a>
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

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="{{ asset('assets/images/users/avatar-blank.jpg') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">{{ Auth::guard('admin')->user()->full_name }}</span>
                                        {{-- <span class="account-position">Active</span> --}}
                                        <span class="badge bg-success">Active</span>
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
                                        <i class="mdi mdi-lock-outline me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>
                                    <a href="{{ route('admin.logout') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-power me-1"></i>
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
        <script src="{{ asset('assets/js/pages/demo.dashboard-projects.js') }}"></script>
        <!-- end demo js-->

        <!-- demo app -->
        <script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
        <!-- end demo js-->

    </body>
</html>
