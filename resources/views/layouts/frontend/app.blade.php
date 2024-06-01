<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('templates/frontend/clever') }}/img/core-img/favicon.ico">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('templates/frontend/clever') }}/style.css">
    <!-- @include('layouts.frontend.style') -->
    <style>
        .navbar-custom{
            top: 100px;
        }
    @media (max-width: 768px) {
        .header-content {
            flex-direction: column;
        }

        .header-content > div {
            margin-bottom: 10px;
        }

        .navbar-toggler {
            margin-right: 15px;
        }

        .navbar-nav {
            text-align: center;
        }

        .navbar-nav .nav-item {
            margin: 5px 0;
        }
    }

    @media (max-width: 800px) {
        .header-container {
            display: none;
        }
        .navbar-custom {
            top: 0;
        }
    }

    .navbar-nav .nav-link {
        transition: color 0.3s, background-color 0.3s;
    }

    .navbar-nav .nav-link:hover {
        color: #FFD700;
        /* Change text color on hover */
        background-color: #560000;
        /* Change background color on hover */
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #f1f1f1;
        /* Change background color on hover */
    }
</style>
    @stack('css')
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->


        <!-- Navbar Area -->
        @include('layouts.frontend.navbar')
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.frontend.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/active.js"></script>
    @stack('js')
</body>
</html>
