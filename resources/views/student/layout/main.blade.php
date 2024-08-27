<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="fadil" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>


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
                <a href="" class="logo text-center logo-light">
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
                            <a href="{{ route('student.dashboard') }}" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboards </span>
                            </a>
                        </li>

                        {{-- profile --}}
                        <li class="side-nav-item">
                            <a href="{{ route('student.profile') }}" class="side-nav-link">
                                <i class="uil-user"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        {{-- borrowed book --}}
                        <li class="side-nav-item">
                            <a href="{{ route('borrow.book') }}" class="side-nav-link">
                                <i class="uil-book uil-check"></i>
                                <span>Borrowed Books</span>
                            </a>
                        </li>

                        {{-- overdue books --}}
                        <li class="side-nav-item">
                            <a href="{{ route('book.overdue') }}" class="side-nav-link">
                                <i class="uil-book-alt uil-exclamation-octagon"></i>
                                <span>Overdue Books </span>
                            </a>
                        </li>

                        {{-- book reservation --}}
                        <li class="side-nav-item">
                            <a href="{{ route('book.reservation') }}" class="side-nav-link">
                                <i class="uil-book-alt uil-clock uil-plus"></i>
                                <span>Book Reservation</span>
                            </a>
                        </li>

                        {{-- search catalog --}}
                        <li class="side-nav-item">
                            <a href="{{ route('search.catalog') }}" class="side-nav-link">
                                <i class="uil-search"></i>
                                <span>Search Books</span>
                            </a>
                        </li>

                        {{-- fines and fees --}}
                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <i class="uil-money-bill"></i>
                                <span>Overdue charges</span>
                            </a>
                        </li>

                        {{-- Library announcement --}}
                        <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <i class="uil-newspaper"></i>
                                <span>Library Announcement</span>
                            </a>
                        </li>

                        {{-- Book renewal --}}
                        {{-- <li class="side-nav-item">
                            <a href="#" class="side-nav-link">
                                <i class="uil-book-alt uil-sync"></i>
                                <span>Book Renewal</span>
                            </a>
                        </li> --}}

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#resources" aria-expanded="false" aria-controls="sidebarLayoutsa" class="side-nav-link">
                                <i class="uil-book-alt uil-compass"></i>
                                <span> Resources </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="resources">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('profile') }}"><i class="fas fa-book"></i> Handout</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile') }}"><i class="uil-book-alt"></i> P&Q</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

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

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div style="max-height: 230px;" data-simplebar="">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View All
                                    </a>

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
                                        <span class="account-user-name">{{ Auth::guard('student')->user()->matric_number }}</span>
                                        <span class="badge bg-success rounded-pill">Active</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('student.logout') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
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
                                <script>document.write(new Date().getFullYear())</script> Made with <b class="text text-danger">&#10084;</b> by fadil.
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

            <div class="rightbar-content h-100" data-simplebar="">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1">

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>


                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1">
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>


                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1">
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
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

                        <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
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
        <script src="{{ asset('assets/js/pages/demo.dashboard-projects.js') }}"></script>
        <!-- end demo js-->

        <!-- demo app -->
        <script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
        <!-- end demo js-->

    </body>

</html>
