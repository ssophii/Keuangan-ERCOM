<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Keuangan ERCOM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/ti-icons/css/themify-icons.css') }}">
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

</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="/dashboard"><img src="{{ asset('assets/images/ercom.png') }}" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="/dashboard"><img src="{{ asset('assets/images/ercom-mini.png') }}" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                  <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search">
                      <i class="icon-search"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <i class="fa-solid fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="/profile">
                    <i class="ti-settings text-primary"></i>
                    Settings
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     <i class="ti-power-off text-primary"></i>
                    <span>Log Out</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
              @if (Auth::user()->role == 'bendahara'|| Auth::user()->role == 'anggota')
              <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                  <i class="fa-solid fa-calculator menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
              </li>
              @endif
              @if (Auth::user()->role == 'bendahara')
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="fa-solid fa-file-circle-plus menu-icon"></i>
                    <span class="menu-title">Pemasukkan</span>
                </a>
              </li>
              @endif
              @if (Auth::user()->role == 'bendahara')
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="fa-solid fa-file-circle-minus menu-icon"></i>
                    <span class="menu-title">Pengeluaran</span>
                </a>
              </li>
              @endif
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
              <div class="row">
                <div class="col-md-12 mb-3 mb-xl-3">
                  <div class="row">
                    <div class="col-12 col-xl-8 card">
                        <h3 class="font-weight-bold mt-3 mb-2">HALLO {{ Auth::user()->name }}!</h3>
                      {{-- <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6> --}}
                    </div>
                  </div>
                </div>
              </div>
            {{-- <div class="row"> --}}
                <main class="flex-1">
                    {{-- <div class="container mx-auto p-4"> --}}
                        {{ $slot }}
                    {{-- </div> --}}
                </main>    
            {{-- </div> --}}
              
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Engineering Research Community 2024</span> 
              </div>
            </footer> 
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>   
        <!-- page-body-wrapper ends -->
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
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/template.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->

  
</body>
</html>

