<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beka Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('dist/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/styles/responsive.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('dist/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/styles/categories_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/styles/categories_responsive.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('dist/styles/contact_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/styles/contact_responsive.css')}}">

    <link rel="stylesheet" href="{{asset('dist/plugins/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/styles/single_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/styles/single_responsive.css')}}">
</head>

<body>

<div class="super_container">

    <!-- Header -->

    <header class="header trans_300">

        <!-- Top Navigation -->

        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top_nav_left">
                            <span>
                                <i class="fa fa-phone"></i>
                                +999 555 55 55 55
                            </span>
                            <span class="ml-3">
                                <i class="fa fa-phone"></i>
                                +999 555 55 55 55
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="top_nav_right">
                            <ul class="top_nav_menu">

                                <!-- Currency / Language / My Account -->

                                <li class="language">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li class="language">
                                    <a href="#">
                                        <i class="fa fa-telegram"></i>
                                        Telegram
                                    </a>
                                </li>
                                <li class="language">
                                    <a href="#">
                                        <i class="fa fa-whatsapp"></i>
                                        WhatsApp
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <div class="main_nav_container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <div class="logo_container">
                            <a href="{{route('home')}}">Man<span>ia</span></a>
                        </div>
                        <nav class="navbar">
                            <ul class="navbar_menu">
                                <li><a href="{{route('home')}}">Главная</a></li>
                                <li><a href="{{route('products')}}">Товары</a></li>
                                <li><a href="{{route('about-us')}}">О нас</a></li>
                                <li><a href="{{route('contact-us')}}">Контакты</a></li>
                            </ul>
                            <div class="hamburger_container">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="fs_menu_overlay"></div>
    <div class="hamburger_menu">
        <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="hamburger_menu_content text-left pl-3">
            <ul class="menu_top_nav">
                <li class="menu_item"><a href="{{route('home')}}">Главная</a></li>
                <li class="menu_item"><a href="{{route('products')}}">Товары</a></li>
                <li class="menu_item"><a href="{{route('about-us')}}">О нас</a></li>
                <li class="menu_item"><a href="{{route('contact-us')}}">Контакты</a></li>
            </ul>
        </div>
    </div>


    @yield('content')

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
                        <ul class="footer_nav">
                            <li><a href="#">Категории</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="contact.html">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="{{asset('dist/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('dist/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('dist/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('dist/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('dist/plugins/easing/easing.js')}}"></script>
<script src="{{asset('dist/js/custom.js')}}"></script>

<script src="{{asset('dist/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{asset('dist/js/categories_custom.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{asset('dist/js/contact_custom.js')}}"></script>

<script src="{{asset('dist/js/single_custom.js')}}"></script>

</body>

</html>
