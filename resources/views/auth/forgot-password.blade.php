<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Website Keuangan ERCOM</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/qrcode.svg') }}">
    {{-- <link href="{{ asset('assets/img/logo-unib.png') }}" rel="icon">
    <link href="{{ asset('assets/images/logo-himatif.png') }}" rel="shortcut icon"> --}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/vendor.bundle.base.css') }}">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- Injected Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}"> --}}

</head>

<body class="max-width">
    {{-- <body class="index-page max-width"> --}}

    <!-- Header Section -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/images/ercom-mini.png') }}" alt="">
                <h1 class="sitename">Website Keuangan ERCOM</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}">Login</a></li>
                    <li><a href="{{ url('register') }}">Register</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>
    <!-- End Header -->

    <main class="main" >

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div class="container" style="height: 65vh">
                <div class="row gy-4 justify-content-between" style="height: 100%">
                    <div class="col-lg-4 mx-auto rounded-lg align-middle">
                        <div class="mb-4 text-sm text-gray-600">
                            <div class="auth-form-dark text-left py-5 px-4 px-sm-5 bg-white shadow rounded-lg pt-5 pb-5">
                                <h4 class="text-dark">Lupa Password?</h4>
                                <h6 class="font-weight-light text-secondary">Hubungi Bendahara Umum</h6>
                                <h6 class="font-weight-light text-secondary">email : <a href="mailto:yuliapratiwi@gmail.com">yuliapratiwi@gmail.com</a></h6>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-lg font-weight-medium pt-2 pb-2" href="{{ url('/') }}">
                                      Kembali
                                    </button>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>

        </section><!-- End Hero Section -->

    </main><!-- End Main -->

    <!-- Footer Section -->
    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
            <!-- Add any footer content here if necessary -->
        </div>

        <div class="container copyright text-center mt-4">
            <p><span>Administrasi dan Keuangan HIMATIF 2024</span></p>
        </div>
    </footer><!-- End Footer -->

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Vendor Bundle (Optional) -->
    <script src="{{ asset('assets/vendor/js/vendor.bundle.base.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Injected Scripts -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>


</body>

</html>
