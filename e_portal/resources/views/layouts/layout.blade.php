<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EGN E-Recruitment, Jobs Portal.">
    <title id="page-title">
        @yield('title') {{ $company_name }}
    </title>
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome-animation@1.1.1/css/font-awesome-animation.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/css/OverlayScrollbars.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0-rc/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/jszip-3.10.1/dt-1.13.8/datatables.min.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.3/themes/black/pace-theme-flash.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    
    <link rel="icon" type="image/x-icon" href="{{ asset('images/DRS-Logo.png') }}">
    <style>
        * {
            font-family: monospace;
            font-size: 1.5dvh;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
    <div class="pace pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light mr-3 text-sm" style="opacity:0.8">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-sm-inline-block">
                    <a href="{{ route('portal.index') }}" class="nav-link"><i class="fas fa-home"></i> Home</a>
                </li>
            </ul>
        
            <!-- Center content (User ID) -->
            @if (session()->has('user_id'))
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-success">
                        <i class="far fa-user-circle"></i>
                        <span class="font-weight-bold">
                            <span>Welcome, {{ session('user_name') }}</span>
                        </span>
                    </a>
                </li>
            </ul>
        
            <!-- Right navbar links -->
            <ul class="navbar-nav">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown mr-3 ml-3 navbar-notifications">
                    <!-- Add any notification items here if needed -->
                </li>
        
                <!-- Logout button -->
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="btn btn-outline-danger logout btn-sm rounded-pill">
                        <i class="far fa-power-off font-weight-bold"></i> Logout
                    </a>
                </li>
            </ul>
            @else
                <!-- <span>Guest</span> -->
            @endif
        </nav>
        
        <!-- /.navbar -->

        <!-- ============================================= -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4 sidebar-light-navy">
            <!-- Brand Logo -->
            <a href="" class="brand-link text-sm">
                <img src="{{ asset('images/DRS-Logo.png') }}" alt="EGN E-Recruitment Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold"> {{ $company_name }}</span>
            </a>

            @yield('side_navbar')
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link link log-in-link mt-2">
                                <i class="fas fa-sign-in-alt fa-2x nav-icon"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link link register-link">
                                <i class="far fa-user-plus fa-2x nav-icon"></i>
                                <p>Register</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
            @yield('side_navbar')
        </aside>
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid" id="dynamic-content">
                    @yield('main')
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @yield('footer')
        <!-- Main Footer -->
        <footer class="main-footer text-sm" style="opacity:0.8">
            &copy; 2024: Developed by <a href="https://egn.pythonanywhere.com/" target="_blank">EGN Tech Solutions</a>
            <div class="float-right d-sm-inline-block">
                <a href="https://wa.me/254701838170" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp Us</a>
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0-rc/js/adminlte.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4/jszip-3.10.1/dt-1.13.8/datatables.min.js"></script>
    <!-- Add your custom JavaScript files here -->
</body>

</html>
