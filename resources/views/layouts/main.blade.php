<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/css/adminlte.css">
    <link rel="stylesheet" href="/assets/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    @include('sweetalert::alert')
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                <span class="brand-text font-weight-light">Admin Pages</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="ri-home-2-line"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/company" class="nav-link">
                                <i class="ri-file-list-2-line"></i>
                                <p>
                                    Company
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mb-5">
                            <a href="/employees" class="nav-link">
                                <i class="ri-file-text-line"></i>
                                <p>
                                    Employee
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-block btn-info"><i class="ri-logout-box-r-line"></i> Log Out</button>
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content -->

        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/js/adminlte.min.js"></script>
    <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>

</html>
