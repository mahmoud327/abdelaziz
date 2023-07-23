<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/idangerous.swiper.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{asset('assets/img/mp.png')}}" />
    {{-- font aswesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>MASTER PRO</title>
</head>

<body data-theme="theme-1" class="without-border-default text-center" >
    <!-- LOADER -->
    {{-- <div id="loader-wrapper">
        <img src="{{asset('assets/img/main/loader.GIF')}}" alt=""/>
    </div> --}}
    <!-- LOADER -->

    <!-- HEADER STYLE 1 -->
    <header class="style-2 style-3 style-6 ">
        <span class="animated-bg"></span>
        <div class="table-view">
            <div class="cell-view">
                <a href="/" id="logo">
                    <img src="{{asset('assets/img/mp.png')}}" alt="image" class="logo-black"/>
                    <img src="{{asset('assets/img/mp.png')}}" alt="image" class="logo-white"/>
                </a>
                <div class="mob-icon">
                    <span class="top nodelay"></span>
                    <span class="middle nodelay"></span>
                    <span class="bottom nodelay"></span>
                </div>
                <div class="menu-icon">
                    <span class="top nodelay"></span>
                    <span class="middle nodelay"></span>
                    <span class="bottom nodelay"></span>
                </div>
                <nav>
                    <ul>
                        <li class="hover-effect-bold">
                            <a href="/" class="active-element">{{trans('lang.Home')}}</a>

                        </li>
                        <li class="hover-effect-bold">
                            <a href="about" class="noplus">{{trans('lang.ABOUT')}}</a></li>
                        <li class="hover-effect-bold">
                            <a href="portfolio">{{trans('lang.PORTFOLIO')}}</a>
                        </li>
                        {{-- <li class="hover-effect-bold"><a href="services" class="noplus">SERVICES</a></li> --}}
                        <li class="hover-effect-bold">
                            <a href="/massage">{{trans('lang.CONTACT')}}</a>
                        </li>

                        <li class="hover-effect-bold mt-0">{{ LaravelLocalization::getCurrentLocaleNative() }}
                            <ul class="submenu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>




                    </ul>
                </nav>
            </div>
        </div>
    </header>
