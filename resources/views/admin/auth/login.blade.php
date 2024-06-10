<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'LMS') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

        <!-- App css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />
        {{-- font-awesome link --}}
        <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.min.css') }}">

    </head>

    <body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <a href="{{ route('home') }}" class="logo-dark">
                                <span><img src="{{ asset('assets/images/favicon.png') }}" alt="FUK E-Libry" height="60"><label class="text text-muted h4">Federal University Kashere</label></span>
                            </a>
                            @include('flashMessages.messages')
                        </div>
                        <!-- title-->
                        <h4 class="mt-0">Admin login <i class="fa fa-lock"></i></h4>
                        <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                        <!-- form -->
                        <form action="{{ route('save.admin') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" name="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <a href="pages-recoverpw-2.html" class="text-muted float-end"><small>Forgot your password?</small></a>
                                <label for="password" class="form-label">Password</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Enter your password">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>
                            <div class="d-grid mb-0 text-center">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                            </div>
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Made with <b class="text-danger">&#10084;</b> by fadil.</p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <p class="lead"><i class="mdi mdi-format-quote-open"></i> The only thing that you absolutely have to know, is the location of the library. . <i class="mdi mdi-format-quote-close"></i>
                    </p>
                    <p>
                        Albert Einstein
                    </p>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

    </body>

</html>
