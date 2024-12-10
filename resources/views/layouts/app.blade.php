<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website Keuangan ERCOM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/ti-icons/css/themify-icons.css') }}"> --}}
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/qrcode.svg') }}">
    {{-- datatables --}}
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!-- Fomantic UI CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.css">

    <!-- DataTables Semantic UI CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.semanticui.css">

    <!-- Fomantic UI JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.9.2/semantic.min.js"></script>

    <!-- DataTables Core JS -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <!-- DataTables Semantic UI JS -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.semanticui.js"></script>

    <style>
        .underline {
            text-decoration: underline;
            /* Memberikan garis bawah */
            text-underline-offset: 4px;
            /* Jarak garis bawah */
            text-decoration-thickness: 2px;
            /* Ketebalan garis bawah */
            text-decoration-color: #000;
            /* Warna garis bawah */
        }

        .sidebar {
            position: fixed;
            top: 70px;
            left: 0;
            height: 100vh;
            /* Sidebar memenuhi tinggi viewport */
            width: 250px;
            /* Lebar sidebar */
            z-index: 1000;
            /* Pastikan berada di atas elemen lain */
            overflow-y: auto;
            /* Scroll jika konten sidebar terlalu panjang */
        }

        /* Tambahkan margin ke elemen utama agar tidak tertutup oleh sidebar */
        .main-panel {
            margin-left: 250px;
            /* Sesuaikan dengan lebar sidebar */
        }
    </style>

</head>

<body>
    <div>
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo mr-5" href="/dashboard"><img
                            src="{{ asset('assets/images/ercom.png') }}" class="mr-2" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="/dashboard"><img
                            src="{{ asset('assets/images/ercom-mini.png') }}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                                id="profileDropdown">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="/profile">
                                    <i class="ti-settings text-primary"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off text-primary"></i>
                                    <span>Log Out</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial -->
                <!-- partial:partials/_sidebar.html -->

                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">
                                <i class="fa-solid fa-calculator menu-icon"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#pemasukkan" aria-expanded="false" aria-controls="pemasukkan">
                                <i class="fa-solid fa-file-circle-plus menu-icon"></i>
                                <span class="menu-title">Pemasukkan</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="pemasukkan">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="/pemasukkan">Catatan Pemasukkan</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="/riwayatPemasukkan">Riwayat Pemasukkan</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#pengeluaran" aria-expanded="false" aria-controls="pengeluaran">
                                <i class="fa-solid fa-file-circle-minus menu-icon"></i>
                                <span class="menu-title">Pengeluaran</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="pengeluaran">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="/pengeluaran">Catatan Pengeluaran</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="/riwayatPengeluaran">Riwayat Pengeluaran</a></li>
                                </ul>
                            </div>
                        </li>
                        

                        @if (Auth::user()->role == 'bendahara')
                            <li class="nav-item">
                                <a class="nav-link" href="/anggota">
                                    <i class="fa-solid fa-user-group menu-icon"></i>
                                    <span class="menu-title">Anggota</span>
                                </a>
                            </li>
                        @endif
                    </ul>

                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div>
                            <div>
                                <h3 class="font-weight-bold mb-2 underline"> {{ Auth::user()->name }}</h3>
                                <p>{{ ucfirst(Auth::user()->role) }}</p>
                                {{-- <div class="mb-3 pb-2 pt-1 px-2 bg-white shadow">
                        <div class="mb-10">
                            <h3 class="font-weight-bold mt-3 mb-2">HALLO {{ Auth::user()->name }}!</h3>
                        </div>
                    </div> --}}
                            </div>
                        </div>
                        {{-- <div class="row"> --}}
                        <main class="flex-1">
                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                    {{ $slot }}

                                </div>
                            </div>
                        </main>
                        {{-- </div> --}}

                        <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html -->
                        <!-- partial -->
                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Engineering Research
                        Community 2024</span>
                </div>
            </footer>
        </div>
        <!-- plugins:js -->
        <script src="{{ asset('assets/vendor/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('assets/vendor/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>
        <script>
            const csrfToken = '{{ csrf_token() }}';
        </script>
        <script src="{{ asset('assets/js/modal.js') }}"></script>


        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

        <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('assets/js/template.js') }}"></script>
        <script src="{{ asset('assets/js/settings.js') }}"></script>
        <script src="{{ asset('assets/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('assets/js/dashboard.js') }}"></script>
        <script src="{{ asset('assets/js/Chart.roundedBarCharts.js') }}"></script>
        <script src="{{ asset('assets/js/chart.js') }}"></script>
        <!-- End custom js for this page-->


</body>

</html>
