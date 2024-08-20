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

    </head>

    <body class="loading" data-layout-config='{"darkMode":false}'>

        <!-- NAVBAR START -->
        <nav class="navbar navbar-expand-lg py-lg-3 navbar-dark">
            <div class="container">

                <!-- logo -->
                <a href="index.html" class="navbar-brand me-lg-5">
                    <img src="{{ asset('assets/images/favicon.png') }}" alt="" class="logo-dark" height="58">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- menus -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <!-- left menu -->
                    <ul class="navbar-nav me-auto align-items-center">
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link active" href="">Home</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="">Features</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="">FAQs</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="">Contact</a>
                        </li>
                    </ul>

                    <!-- right menu -->
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item me-0">
                            <a href="../../product/hyper-responsive-admin-dashboard-template/index.htm" target="_blank" class="btn btn-sm btn-light btn-rounded d-none d-lg-inline-flex">
                                <i class="mdi mdi-github me-1"></i> Star
                            </a>
                            <button class="btn btn-sm btn-light btn-rounded" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight">
                                <i class="fa fa-user-lock me-1"></i> login
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <h5 id="offcanvasRightLabel"><img src="{{ asset('assets/images/favicon.png') }}" alt="" height="30"> FUKashere E-LIBRARY</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">

                                    <!-- authentication account -->
                                    <div class="card shadow">
                                        <div class="card-body p-2">
                                            <div class="list-group list-group-flush my-2">
                                                <a href="{{ route('admin.login') }}" target="_blank" class="list-group-item list-group-item-action border-0"><i class='icofont icofont-teacher me-1'></i> Admin login</a>
                                                <a href="{{ route('student.login') }}" target="_blank" class="list-group-item list-group-item-action border-0"><i class='icofont icofont-group-students me-1'></i> Student login</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end authentication account -->

                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- NAVBAR END -->

        <!-- START HERO -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="mt-md-4">
                            <div>
                                <span class="badge bg-danger rounded-pill">New</span>
                                <span class="text-white-50 ms-1">Welcome to Federal University Of Kashere Gombe E-LIBRARY</span>
                            </div>
                            <h2 class="text-white fw-normal mb-4 mt-3 hero-title">
                                Introducing the <strong>'Knowledge Hub'</strong> Library Management System at Federal University Kashere!
                            </h2>

                            <p class="mb-4 font-16 text-white-50">
                                The <strong>K-hub</strong> <i>'Knowledge Hub'</i> is a cutting-edge platform designed to streamline and enhance the library experience for students, faculty, and staff at Springfield University. This innovative system allows users to easily search and access a vast collection of books, journals, and digital resources, making research and learning more efficient and effective. With features like online cataloging, circulation management, and personalized recommendations, the Knowledge Hub is the perfect tool for academic success.
                            </p>

                            <p class="mb-4 font-16 text-white-50">
                                Whether you're a student working on a research project, a faculty member preparing for a lecture, or simply a book lover looking for your next great read, the Knowledge Hub has something for everyone. With its user-friendly interface and robust functionality, this system is set to revolutionize the way our community interacts with the library. So why wait? Explore the Knowledge Hub today and discover a world of knowledge at your fingertips!
                            </p>

                            <button id="signUp" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#centermodal">Sign up <i class="mdi mdi-arrow-right ms-1"></i></button>

                            <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myCenterModalLabel">Create account</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('create.student') }}" method="POST">
                                                @csrf
                                                <label for="simpleinput" class="form-label">First name:</label>
                                                <input type="text" id="simpleinput" name="firstName" class="form-control @error('firstName')
                                                    is-invalid
                                                @enderror" value="{{ old('firstName') }}">
                                                @error('firstName')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <div class="mt-2">
                                                    <label for="simpleinput" class="form-label">Surname:</label>
                                                    <input type="text" id="simpleinput" name="surname" class="form-control @error('surname')
                                                        is-invalid
                                                    @enderror" value="{{ old('surrname') }}">
                                                    @error('surname')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mt-2">
                                                    <label for="simpleinput" class="form-label">Other name:</label>
                                                    <input type="text" id="simpleinput" name="otherName" class="form-control @error('otherName')
                                                        is-invalid
                                                    @enderror" value="{{ old('otherName') }}">
                                                    @error('otherName')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mt-2">
                                                    <label for="simpleinput" class="form-label">Matric number:</label>
                                                    <input type="text" id="simpleinput" name="matricNumber" class="form-control @error('matricNumber')
                                                        is-invalid
                                                    @enderror" value="{{ old('matricNumber') }}">
                                                    @error('matricNumber')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mt-2">
                                                    <label for="simpleinput" class="form-label">Email address:</label>
                                                    <input type="text" id="simpleinput" name="emailAddress" class="form-control @error('emailAddress')
                                                        is-invalid
                                                    @enderror" value="{{ old('emailAddress') }}">
                                                    @error('emailAddress')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mt-2">
                                                    <label for="simpleinput" class="form-label">Password:</label>
                                                    <input type="password" id="simpleinput" name="password" class="form-control @error('password')
                                                        is-invalid
                                                    @enderror">
                                                    @error('password')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="mt-2">
                                                    <label for="simpleinput" class="form-label">Confirm password:</label>
                                                    <input type="password" id="simpleinput" name="confirmPassword" class="form-control @error('confirmPassword')
                                                        is-invalid
                                                    @enderror">
                                                    @error('confirmPassword')
                                                        <div class="text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <hr>
                                                <button type="submit" class="btn btn-secondary">Submit</button>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <div class="text-md-end mt-3 mt-md-0">
                            <img src="{{ asset('assets/images/startup.svg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HERO -->

        <!-- START FEATURES 2 -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mt-0"><i class="mdi mdi-heart-multiple-outline"></i></h1>
                            <h3>Features you'll <span class="text-danger">love</span></h3>
                            <p class="text-muted mt-2">K-hub comes with next generation ui design and have multiple benefits
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 py-5 align-items-center">
                    <div class="col-lg-5">
                        <img src="{{ asset('assets/images/features-1.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <h3 class="fw-normal">What We Offer</h3>
                        <p class="text-muted mt-3">
                            We offer a comprehensive online library management system design to support your acadamic success. Our platform provide instant access to a vast collection of e-books, articles, research papers, and digital resources.
                        </p>
                        <p class="text-muted mt-3">
                            Our goal is to provide a flexible and inclusive learning enviroment that support your acadamic excellence, and helps you achieve success in your studey beyond.
                        </p>

                        <div class="mt-4">
                            <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Mobile-friendly access, allowing you to learn anywhere, anytime.</p>
                            <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Instant access to a vast collection of e-books, articles, research paper, and digital resources. </p>
                            <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Collaboration spaces for group for group project and research.</p>
                            <p class="text-muted"><i class="mdi mdi-circle-medium text-primary"></i> Accessibility features, including a question and answers bank from previous exams, available for student to review.</p>
                            <p class="test-muted"><i class="mdi mdi-circle-medium text-primary"></i>
                            and much more..!
                            </p>
                        </div>

                        <a href="" class="btn btn-primary btn-rounded mt-3">Read More <i class="mdi mdi-arrow-right ms-1"></i></a>

                    </div>
                </div>

            </div>
        </section>
        <!-- END FEATURES 2 -->


        <!-- START CONTACT -->
        <section class="py-5 bg-light-lighten border-top border-bottom border-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h3>Get In <span class="text-primary">Touch</span></h3>
                            <p class="text-muted mt-2">Need help or have questions about the Knowledge Hub <i>K-hub</i> ? <br> Contact us via our email address at kHub@fukashere.edu or (+234) 81-1887-0934. <br> Visit us in person or fill out our online form. Let us support your academic success!.</p>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-md-4">
                        <h4 class="text-center">Contact us <span class="text-primary">On</span></h4>
                        <p class="text-muted"><span class="fw-bold">Customer Support:</span><br> <span class="d-block mt-1">+234 8118870934</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Email Address:</span><br> <span class="d-block mt-1">7.fadil@gmail.com</span></p>
                        <p class="text-muted mt-4"><span class="fw-bold">Office Address:</span><br> <span class="d-block mt-1">Federal University Kashere Gombe, Gombe State.</span></p>
                    </div>

                    <div class="col-md-8">
                        <form>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label for="fullname" class="form-label">Your Name</label>
                                        <input class="form-control form-control-light" type="text" id="fullname" placeholder="Name...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-2">
                                        <label for="emailaddress" class="form-label">Your Email</label>
                                        <input class="form-control form-control-light" type="email" required="" id="emailaddress" placeholder="Enter you email...">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label for="subject" class="form-label">Your Subject</label>
                                        <input class="form-control form-control-light" type="text" id="subject" placeholder="Enter subject...">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label for="comments" class="form-label">Message</label>
                                        <textarea id="comments" rows="4" class="form-control form-control-light" placeholder="Type your message here..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary">Send a Message <i class="mdi mdi-telegram ms-1"></i> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT -->

        <!-- START FOOTER -->
        <footer class="bg-dark py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/favicon.png') }}" alt="" class="logo-dark" height="68">
                        <p class="text-muted mt-4">Federal University Of Kashere makes it easier to build better websites with
                            <br> great speed. Save hundreds of hours of design
                            <br> and development by using it.</p>

                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="https://github.com/7-Fadil" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-light">Company</h5>

                        <ul class="list-unstyled ps-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">About Us</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Documentation</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Blog</a></li>
                        </ul>

                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-light">Apps</h5>

                        <ul class="list-unstyled ps-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Ecommerce Pages</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Email</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Sms</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 mt-3 mt-lg-0">
                        <h5 class="text-light">Discover</h5>

                        <ul class="list-unstyled ps-0 mb-0 mt-3">
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Help Center</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Our Products</a></li>
                            <li class="mt-2"><a href="javascript: void(0);" class="text-muted">Privacy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-5">
                            <p class="text-muted mt-2 text-center">
                                <script>document.write(new Date().getFullYear())</script> Made with <b>&#10084;</b> by <a href="https://github.com/7-Fadil">fadil.</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        @if ($errors->any())
            <script>
                $(document).ready(function() {
                    $('#signUp').click()
                });
            </script>
        @endif

        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

    </body>

</html>
