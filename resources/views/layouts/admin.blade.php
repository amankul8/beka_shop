<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>Admin</title>
    <!-- Custom Stylesheet -->
    <link href="{{ asset('/distAdmin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/distAdmin/plugins/summernote/dist/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('/distAdmin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
            <a href="{{route('admin-index')}}">
                <span class="brand-title">
                    <img src="{{asset('distAdmin/images/logo-text.png')}}" alt="">
                </span>
            </a>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content clearfix">

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Dashboard</li>
                <li>
                    <a href="{{route('admin-products')}}" aria-expanded="false">
                        <i class="icon-notebook menu-icon"></i><span class="nav-text">Тавары</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin-categories')}}" aria-expanded="false">
                        <i class="icon-grid menu-icon"></i><span class="nav-text">Категории</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin-models')}}" aria-expanded="false">
                        <i class="icon-badge menu-icon"></i><span class="nav-text">Модели</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin-colors')}}" aria-expanded="false">
                        <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Цвета</span>
                    </a>
                </li>
                <li>
                    <a class="text-warning" href="{{route('logout')}}" aria-expanded="false">
                        <i class="icon-logout menu-icon"></i><span class="nav-text">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->

    @yield('content')

    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">

    </div>
    <!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->

<script src="{{ asset('/distAdmin/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('/distAdmin/js/custom.min.js') }}"></script>
<script src="{{ asset('/distAdmin/js/settings.js') }}"></script>
<script src="{{ asset('/distAdmin/js/gleek.js') }}"></script>
<script src="{{ asset('/distAdmin/js/styleSwitcher.js') }}"></script>

<script src="{{ asset('/distAdmin/js/dashboard/dashboard-1.js') }}"></script>

<script src="{{ asset('/distAdmin/plugins/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('/distAdmin/plugins/summernote/dist/summernote-init.js') }}"></script>

<script src="{{ asset('/distAdmin/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/distAdmin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/distAdmin/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>

</body>

</html>

