<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Master Pro</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('adminassets/assets/images/mp.png') }}">

    <!-- CSS
 ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('adminassets/assets/css/vendor/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('adminassets/assets/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminassets/assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminassets/assets/css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('adminassets/assets/css/vendor/cryptocurrency-icons.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('adminassets/assets/css/plugins/plugins.css') }}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('adminassets/assets/css/helper.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('adminassets/assets/css/style.css') }}">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{ asset('adminassets/assets/css/style-primary.css') }}">

</head>


<body class="skin-dark" dir="rtl">

    <div class="main-wrapper">


        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="/admin">
                            <img src="{{ asset('adminassets/assets/images/mplogo.jpg') }}" alt="">
                            <img src="{{ asset('adminassets/assets/images/mplogo.jpg') }}" class="logo-light"
                                alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">



                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i
                                                class="zmdi zmdi-menu"></i></button></div>

                                    <!--Header Search-->
                                    <div class="col-auto">

                                        <div class="header-search">
                                            <button class="header-search-open d-block d-xl-none"><i
                                                    class="zmdi zmdi-search"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">

                                    <!--Language-->
                                    <li class="adomx-dropdown position-relative col-auto">
                                        <a class="toggle" href="#"><img class="lang-flag"
                                                src="{{ asset('https://www.photoarby.com/wp-content/uploads/2019/02/226-1.png') }}"
                                                alt="" width="35"><i class="zmdi zmdi-caret-down drop-arrow"></i></a>

                                        <!-- Dropdown -->
                                        <ul class="adomx-dropdown-menu dropdown-menu-language">
                                            <li><a href="#"><img
                                                        src="{{ asset('https://www.photoarby.com/wp-content/uploads/2019/02/226-1.png') }}"
                                                        alt=""> العربيه</a></li>

                                            <li><a href="#"><img
                                                        src="{{ asset('adminassets/assets/images/flags/flag-1.jpg') }}"
                                                        alt=""> English</a></li>

                                        </ul>

                                    </li>


                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                                <span class="avatar">
                                                    <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG6a6KfKK66Jy1eCuDau7yp2rb5dIfGvl45g&usqp=CAU') }}"
                                                        alt="">
                                                    <span class="status"></span>
                                                </span>
                                                @auth
                                                <span class="name">{{ Auth::user()->name }}</span>
                                                @endif
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user" dir="ltr">
                                            <div class="head">
                                                        @auth
                                                <h5 class="name"><a href="/admin">{{ Auth::user()->name }}</a></h5>
                                                <a class="mail" href="#">{{ Auth::user()->email }}</a>
                                                @endif
                                            </div>
                                            <div class="body">
                                                <ul>
                                                    <li><a href="{{route('profile.edit')}}"><i class="zmdi zmdi-account"></i>اعدادات الحساب</a>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link :href="route('logout')"
                                                                onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                            {{ __('تسجيل الخروج') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        {{-- <li  class="has-sub-menu"><a href="{{ route('admin.index')}}"><span> الرئيسيه </span></a></li> --}}
                        <li class="has-sub-menu"><a href="/"><i class="ti-home"></i> <span>لوحة
                                    التحكم</span></a>
                            <ul class="side-header-sub-menu">

                                <li><a href="{{ route('admin.photos.index')}}"><span>  اضافة صور للمعرض </span></a></li>
                                <li><a href="{{ route('admin.baners.index')}}"><span> البانر  </span></a></li>
                            </ul>
                        </li>


                        <li class="has-sub-menu"><a href="#"><i class="ti-package"></i> <span> الرسائل </span></a>
                            <ul class="side-header-sub-menu">
                                <!--<li><a href="elements-accordions.html"><span>صندوق البريد</span></a></li>-->
                                <li><a href="{{ route('admin.contects.index')}}"><span>وسائل التواصل </span></a></li>
                            </ul>
                        </li>


                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->
