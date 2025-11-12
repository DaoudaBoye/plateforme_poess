<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Bootstrap 4.6 & AdminLTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/styles.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/min/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap4-toggle/css/bootstrap4-toggle.min.css') }}">

    <!-- Custom styles -->
    <style>
        .btn-active { background-color: #007bff !important; color: white !important; }
        .main-content { margin-top: 60px; margin-left: 18rem; margin-bottom: 60px; }
        .nav-link.active { background-color: #007bff; color: white; }
        .nav-treeview .nav-link.active { background-color: white; color: #007bff; }
        .nav-treeview .nav-link.active p { color: #007bff; }
        .custom-alert-success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .custom-alert-danger { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .toast { position: fixed; top: 20px; right: 20px; z-index: 1050; min-width: 200px; }
    </style>

    @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.template-plateforme.topbar')

        <!-- Sidebar -->
        @include('layouts.template-plateforme.sidebar')

        <!-- Main Content -->
        <div class="content-wrapper main-content">
            @yield('content')
        </div>

        <!-- Footer -->
        @include('layouts.template-plateforme.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>

    <!-- jQuery, Bootstrap, AdminLTE -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap4-toggle/js/bootstrap4-toggle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
