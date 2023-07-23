@include('layouts.userheader')
    <!-- HEADER STYLE 1 -->
    <div id="content-wrapper" class="without-border-default style-3">
        <span class="top-line"></span>
        <span class="right-line"></span>
        <span class="bottom-line"></span>
        <span class="left-line"></span>
        <div class="blocks-container style-2">
            <!-- BLOCK "TYPE 9  WITH SLIDER PAGE 1.4" -->
            <div class="block block-type-9 with-slider height-100 block-on-background">
                <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1" data-md-slides="1" data-lg-slides="1">
                    <div class="swiper-wrapper">
                        @foreach ($baners as $baner )


                        <div class="swiper-slide">
                            <div class="clip">
                                <div class="bg-nofixed" style="background-image:url({{ Storage::url($baner->image) }})"></div>
                                <span class="bg-span light10"></span>
                            </div>
                            <div class="table-view style-4">
                                <div class="cell-view">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                                                <article class="main align-center style-2 round-decoration large animated-slide">
                                                    <h1 class="h1 white uppercased xx-large slide-scale-animation">
                                                        {{$baner->name}}
                                                    </h1>
                                                    <span class="offset-10"></span>
                                                    <p>{{$baner->description}}</p>
                                                </article>
                                                <div class="decoration-vertical long active-element"></div>
                                                <span class="button animated-button colored small-button slide-right-animation"><a href="/portfolio">{{ trans('lang.view all .....')}}</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="pagination"></div>
                </div>
            </div>
            <!-- BLOCK "TYPE 9  WITH SLIDER PAGE 1.4" -->
            <!-- BLOCK "TYPE 11 STYLE 5 PAGE 3.6" -->
            <div class="block block-type-11 style-6 style-10 style-12">
                <span class="offset-155 md-offset-80"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                            <article class="main large align-center">
                                <h2 class="h1 title bg-title active-element">{{ trans('lang.our works') }}<span class="bg"></span></h2>
                                <div class="offset-15"></div>
                                <p>
                                    {{ trans('lang.Following pictures of our work have been included') }}
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <span class="offset-25 md-offset-30"></span>
                            <div class="sorting-container full-page borders" data-wow-delay="0.3s">
                                <div class="grid-sizer"></div>


                                <div class="sorting-item animated-block hover-animated style-2 thin">
                                    <div class="slide-heading">
                                        <span class="offset-55"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <div class="decoration-vertical active-element"></div>
                                    </div>
                                    <img src="{{ asset('assets/img/event/2N7A4694.jpg') }}" height="270" width="270"
                                        alt="" />
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin with-bottom-heading">
                                    <img src="{{ asset('assets/img/event/2N7A4905.jpg') }}" height="270" width="270"
                                        alt="" />
                                    <div class="slide-heading bottom-heading">
                                        <div class="decoration-vertical active-element"></div>
                                        <span class="offset-50"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <span class="offset-55"></span>
                                    </div>
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin with-left-heading">
                                    <img src="{{ asset('assets/img/event/2N7A5001.jpg') }}" height="270" width="270"
                                        alt="" />
                                    <div class="slide-heading left-heading">
                                        <div class="normal line-decoration centered active-element wide"></div>
                                        <span class="offset-50"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <span class="offset-55"></span>
                                    </div>
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin with-left-heading">
                                    <img src="{{ asset('assets/img/event/2N7A5591.JPG') }}" height="270" width="270"
                                        alt="" />
                                    <div class="slide-heading left-heading">
                                        <div class="normal line-decoration centered active-element wide"></div>
                                        <span class="offset-50"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <span class="offset-55"></span>
                                    </div>
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin">
                                    <div class="slide-heading">
                                        <span class="offset-55"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <div class="decoration-vertical active-element"></div>
                                    </div>
                                    <img src="{{ asset('assets/img/event/D7R08135.jpg') }}" height="270" width="270"
                                        alt="" />
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin">
                                    <div class="slide-heading">
                                        <span class="offset-55"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <div class="decoration-vertical active-element"></div>
                                    </div>
                                    <img src="{{ asset('assets/img/event/2N7A5643.JPG') }}" height="270" width="270"
                                        alt="" />
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div
                                    class="sorting-item animated-block hover-animated style-2 style-3 thin with-right-heading">
                                    <img src="{{ asset('assets/img/event/2N7A5746.JPG') }}" height="270" width="270"
                                        alt="" />
                                    <div class="slide-heading right-heading">
                                        <div class="normal line-decoration centered active-element wide"></div>
                                        <span class="offset-50"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <span class="offset-55"></span>
                                    </div>
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin with-bottom-heading">
                                    <img src="{{ asset('assets/img/event/2N7A5757.JPG') }}" height="270" width="270"
                                        alt="" />
                                    <div class="slide-heading bottom-heading">
                                        <div class="decoration-vertical active-element"></div>
                                        <span class="offset-50"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <span class="offset-55"></span>
                                    </div>
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin">
                                    <div class="slide-heading">
                                        <span class="offset-55"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <div class="decoration-vertical active-element"></div>
                                    </div>
                                    <img src="{{ asset('assets/img/event/2N7A5791.JPG') }}" height="270"
                                        width="270" alt="" />
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div
                                    class="sorting-item animated-block hover-animated style-2 style-3 thin with-right-heading">
                                    <img src="{{ asset('assets/img/event/SAQR4081.jpg') }}" height="270"
                                        width="270" alt="" />
                                    <div class="slide-heading right-heading">
                                        <div class="normal line-decoration centered active-element wide"></div>
                                        <span class="offset-50"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <span class="offset-55"></span>
                                    </div>
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin with-bottom-heading">
                                    <img src="{{ asset('assets/img/event/SAQR217س8.jpg') }}" height="270"
                                        width="270" alt="" />
                                    <div class="slide-heading bottom-heading">
                                        <div class="decoration-vertical active-element"></div>
                                        <span class="offset-50"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <span class="offset-55"></span>
                                    </div>
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin">
                                    <div class="slide-heading">
                                        <span class="offset-55"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <div class="decoration-vertical active-element"></div>
                                    </div>
                                    <img src="{{ asset('assets/img/event/2N7A5979.jpg') }}" height="270"
                                        width="270" alt="" />
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div
                                    class="sorting-item animated-block hover-animated style-2 style-3 thin with-right-heading">
                                    <img src="{{ asset('assets/img/event/2N7A9238.jpg') }}" height="270"
                                        width="270" alt="" />
                                    <div class="slide-heading right-heading">
                                        <div class="normal line-decoration centered active-element wide"></div>
                                        <span class="offset-50"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <span class="offset-55"></span>
                                    </div>
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin with-bottom-heading">
                                    <img src="{{ asset('assets/img/event/3N1A4087.jpg') }}" height="270"
                                        width="270" alt="" />
                                    <div class="slide-heading bottom-heading">
                                        <div class="decoration-vertical active-element"></div>
                                        <span class="offset-50"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <span class="offset-55"></span>
                                    </div>
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin with-bottom-heading">
                                    <img src="{{ asset('assets/img/event/2N7A8136.JPG') }}" height="270"
                                        width="270" alt="" />
                                    <div class="slide-heading bottom-heading">
                                        <div class="decoration-vertical active-element"></div>
                                        <span class="offset-50"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <span class="offset-55"></span>
                                    </div>
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <div class="sorting-item animated-block hover-animated style-2 thin">
                                    <div class="slide-heading">
                                        <span class="offset-55"></span>
                                        <h5 class="h4 align-center"><a class="link hover-effect-bold"
                                                href="portfolio">{{ trans('lang.title') }}</a></h5>
                                        <div class="decoration-vertical active-element"></div>
                                    </div>
                                    <img src="{{ asset('assets/img/event/3N1A5091.jpg') }}" height="270"
                                        width="270" alt="" />
                                    <div class="hover-content">
                                        <span class="top"></span>
                                        <span class="right"></span>
                                        <span class="left"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <span class="offset-60 md-offset-30"></span>
                        <a class="button big-button animated-button align-center" href="portfolio">
                            <span class="content">{{ trans('lang.view all works') }}</span>
                            <span class="top"></span>
                            <span class="right"></span>
                            <span class="left"></span>
                            <span class="bottom"></span>
                        </a>
                    </div>
                </div>
            </div>
            </div>
            <!-- BLOCK "TYPE 11 STYLE 5 PAGE 3.6" -->
            <!-- BLOCK "TYPE 10 STYLE 4-5-6 PAGE 1.4" -->
            <div class="block block-type-10 style-4 style-5 style-6">
                <span class="offset-155 md-offset-80"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                            <article class="main large align-center">
                                <h2 class="h1 title bg-title active-element">{{trans('lang.OUR SERVICES')}}<span class="bg"></span>
                                </h2>
                                <div class="offset-15"></div>
                                <p>
                                    {{ trans('lang.You can see all the services we provide') }}
                                </p>
                                <div class="offset-85 md-offset-40"></div>
                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12" data-wow-delay="0.3s">
                            <div class="animated-block scroll-animation block-type-7 normal-square animate-higher">
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                                <span class="left"></span>
                                <span class="center"></span>
                                <a href="/portfolio" class="icon-wrapper circle-decoration animate-circle" id="circle-id">
                                    <img src="{{ asset('assets/img/camer-removebg-preview.png') }}" width="120"
                                        alt="">
                                    <span class="center"></span>
                                </a>
                            </div>
                            <div class="table-view">
                                <div class="cell-view">
                                    <article class="normal grei-919191">
                                        <div class="clearfix">
                                            <h5 class="h6-14 uppercased">
                                                <a href="/portfolio" class="hover-effect-bold">
                                                {{ trans('lang.NATURAL LANDSCAPE')}}
                                                </a>
                                            </h5>
                                        </div>
                                        <div class="decoration-vertical active-element">

                                        </div>
                                        <p>@@@@@@@@@</p>
                                        <span class="offset-25"></span>
                                        <ul class="uppercased dark-555555 x-small decorated">
                                            <li><a href="/portfolio">@@@@</a></li>
                                            <li><a href="/portfolio">@@@@</a></li>
                                            <li><a href="/portfolio">@@@@</a></li>
                                            <li><a href="/portfolio">@@@@</a></li>
                                        </ul>
                                        <span class="offset-45 md-offset-25"></span>
                                        <a href="/portfolio" class="button animated-button">
                                            <span class="content">{{trans('lang.view all .....')}}</span>
                                            <span class="top"></span>
                                            <span class="right"></span>
                                            <span class="left"></span>
                                            <span class="bottom"></span>
                                        </a>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12" data-wow-delay="0.3s">
                            <span class="sm-offset-40"></span>
                            <div class="animated-block scroll-animation block-type-7 normal-square animate-higher">
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                                <span class="left"></span>
                                <span class="center"></span>
                                <a href="/portfolio" class="icon-wrapper circle-decoration animate-circle" id="circle-id2">
                                    <img src="{{ asset('assets/img/camer-removebg-preview.png') }}" width="120"
                                        alt="">
                                    <span class="center"></span>
                                </a>
                            </div>
                            <div class="table-view">
                                <div class="cell-view">
                                    <article class="normal grei-919191">
                                        <div class="clearfix">
                                            <h5 class="h6-14 uppercased">
                                                <a href="/portfolio" class="hover-effect-bold">
                                                    {{ trans('lang.PORTRAIT PHOTOGRAPHY') }}
                                                </a>
                                            </h5>
                                        </div>
                                        <div class="decoration-vertical active-element"></div>
                                        <p>@@@@@@@@@</p>
                                        <span class="offset-25"></span>
                                        <ul class="uppercased dark-555555 x-small decorated">
                                            <li><a href="/portfolio">@@@@@</a></li>
                                            <li><a href="/portfolio">@@@@@</a></li>
                                            <li><a href="/portfolio">@@@@@</a></li>
                                            <li><a href="/portfolio">@@@@@</a></li>
                                        </ul>
                                        <span class="offset-45 md-offset-25"></span>
                                        <a href="/portfolio" class="button animated-button">
                                            <span class="content">{{trans('lang.view all .....')}}</span>
                                            <span class="top"></span>
                                            <span class="right"></span>
                                            <span class="left"></span>
                                            <span class="bottom"></span>
                                        </a>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12" data-wow-delay="0.3s">
                            <span class="sm-offset-40"></span>
                            <div class="animated-block scroll-animation block-type-7 normal-square animate-higher">
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                                <span class="left"></span>
                                <span class="center"></span>
                                <a href="/portfolio" class="icon-wrapper circle-decoration animate-circle" id="circle-id3">
                                    <img src="{{ asset('assets/img/camer-removebg-preview.png') }}" width="120"
                                        alt="">
                                    <span class="center"></span>
                                </a>
                            </div>
                            <div class="table-view">
                                <div class="cell-view">
                                    <article class="normal grei-919191">
                                        <div class="clearfix">
                                            <h5 class="h6-14 uppercased">
                                                <a href="/portfolio" class="hover-effect-bold">
                                                    {{ trans('lang.COMPANY BRANDING') }}
                                                </a>
                                            </h5>
                                        </div>
                                        <div class="decoration-vertical active-element"></div>
                                        <p>@@@@@@@@@</p>
                                        <span class="offset-25"></span>
                                        <ul class="uppercased dark-555555 x-small decorated">
                                            <li><a href="/portfolio">@@@@</a></li>
                                            <li><a href="/portfolio">@@@@ </a></li>
                                            <li><a href="/portfolio">@@@@</a></li>
                                            <li><a href="/portfolio">@@@@ </a></li>
                                        </ul>
                                        <span class="offset-45 md-offset-25"></span>
                                        <a href="/portfolio" class="button animated-button">
                                            <span class="content">{{trans('lang.view all .....')}}</span>
                                            <span class="top"></span>
                                            <span class="right"></span>
                                            <span class="left"></span>
                                            <span class="bottom"></span>
                                        </a>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BLOCK "TYPE 10 STYLE 4-5-6 PAGE 1.4" -->
            <!-- BLOCK "TYPE 9  WITH SLIDER PAGE 1.4" -->
            <div class="block block-type-25">
                <span class="offset-160 md-offset-80"></span>
                <div class="block block-type-9 block-on-background who-we-are-block">
                    <div class="content-top">
                        <div class="clip">
                            <div class="bg-nofixed"
                                style="background-image:url({{ asset('https://images.pexels.com/photos/2793450/pexels-photo-2793450.jpeg?auto=compress&cs=tinysrgb&w=800&lazy=load') }})">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                                    <article class="main align-center">
                                        <h1 class="h1 white title uppercased active-element">
                                            {{trans('lang.About us')}}
                                            <span class="bg"></span>
                                        </h1>
                                        <span class="offset-20 md-offset-10"></span>
                                        <p>@@@@@@@@@@@@@@@@@@@@@@@@@</p>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500"
                        data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1" data-md-slides="1"
                        data-lg-slides="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="content-bottom">
                                            <div class="container">
                                                <div class="row">
                                                    <div
                                                        class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                                                        <article class="additional align-center capitalized x-small">
                                                            <div class="decoration-vertical active-element"></div>
                                                            <h2 class="h2 white">{{trans('lang.Who we are')}}</h2>
                                                            <span class="offset-10"></span>
                                                            <div class="subheading">{{trans('lang.We Are magicans With Magic Wand')}}
                                                            </div>
                                                            <span class="offset-65 md-offset-45"></span>
                                                            <p>@@@@@@@@@@@@@@@ <br>@@@@@@@@@@@@@@@ <br> @@@@@@@@@@@@@@</p>
                                                            <span class="offset-60 md-offset-30"></span>
                                                            <div class="block-type-1 style-2">
                                                                <div
                                                                    class="animated-block scroll-animation square rotated animate-lower">
                                                                    <span class="top"></span>
                                                                    <span class="right"></span>
                                                                    <span class="bottom"></span>
                                                                    <span class="left"></span>
                                                                </div>
                                                                <div class="circle-decoration animate-circle transparent-bg big-circle"
                                                                    id="circle-id4"></div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="content-bottom">
                                            <div class="container">
                                                <div class="row">
                                                    <div
                                                        class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                                                        <article class="additional align-center capitalized x-small">
                                                            <div class="decoration-vertical active-element"></div>
                                                            <h2 class="h2 white">{{trans('lang.Who we are')}}</h2>
                                                            <span class="offset-10"></span>
                                                            <div class="subheading">{{trans('lang.We Are magicans With Magic Wand')}}
                                                            </div>
                                                            <span class="offset-65 md-offset-45"></span>
                                                            <p>@@@@@@@@@@@@@@@ <br>@@@@@@@@@@@@@@@ <br> @@@@@@@@@@@@@@</p>
                                                            <span class="offset-60 md-offset-30"></span>
                                                            <div class="block-type-1 style-2">
                                                                <div
                                                                    class="animated-block scroll-animation square rotated animate-lower">
                                                                    <span class="top"></span>
                                                                    <span class="right"></span>
                                                                    <span class="bottom"></span>
                                                                    <span class="left"></span>
                                                                </div>
                                                            </div>
                                                            <div class="circle-decoration animate-circle transparent-bg big-circle"
                                                                id="circle-id5"></div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="content-bottom">
                                            <div class="container">
                                                <div class="row">
                                                    <div
                                                        class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                                                        <article class="additional align-center capitalized x-small">
                                                            <div class="decoration-vertical active-element"></div>
                                                            <h2 class="h2 white">{{trans('lang.Who we are')}}</h2>
                                                            <span class="offset-10"></span>
                                                            <div class="subheading">{{trans('lang.We Are magicans With Magic Wand')}}
                                                            </div>
                                                            <span class="offset-65 md-offset-45"></span>
                                                            <p>@@@@@@@@@@@@@@@ <br>@@@@@@@@@@@@@@@ <br> @@@@@@@@@@@@@@</p>
                                                            <span class="offset-60 md-offset-30"></span>
                                                            <div class="block-type-1 style-2">
                                                                <div
                                                                    class="animated-block scroll-animation square rotated animate-lower">
                                                                    <span class="top"></span>
                                                                    <span class="right"></span>
                                                                    <span class="bottom"></span>
                                                                    <span class="left"></span>
                                                                </div>
                                                            </div>
                                                            <div class="circle-decoration animate-circle transparent-bg big-circle"
                                                                id="circle-id6"></div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="content-bottom">
                                            <div class="container">
                                                <div class="row">
                                                    <div
                                                        class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12">
                                                        <article class="additional align-center capitalized x-small">
                                                            <div class="decoration-vertical active-element"></div>
                                                            <h2 class="h2 white">{{trans('lang.Who we are')}}</h2>
                                                            <span class="offset-10"></span>
                                                            <div class="subheading">{{trans('lang.We Are magicans With Magic Wand')}}
                                                            </div>
                                                            <span class="offset-65 md-offset-45"></span>
                                                            <p>@@@@@@@@@@@@@@@ <br>@@@@@@@@@@@@@@@ <br> @@@@@@@@@@@@@@</p>
                                                            <span class="offset-60 md-offset-30"></span>
                                                            <div class="block-type-1 style-2">
                                                                <div
                                                                    class="animated-block scroll-animation square rotated animate-lower">
                                                                    <span class="top"></span>
                                                                    <span class="right"></span>
                                                                    <span class="bottom"></span>
                                                                    <span class="left"></span>
                                                                </div>
                                                            </div>
                                                            <div class="circle-decoration animate-circle transparent-bg big-circle"
                                                                id="circle-id7"></div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination none"></div>
                        <div class="swiper-button-prev swiper-arrow left colored">
                            <span class="animated-block hover-animated thin">
                                <img src="{{ asset('assets/img/main/colored-arrow-left.png') }}" alt="#" />
                                <span class="clip">
                                    <span class="bg-nofixed"
                                        style="background: url({{ asset('assets/img/main/colored-arrow-left-theme-2.png') }}) no-repeat"></span>
                                </span>
                                <b class="active-element"></b>
                                <b class="active-element"></b>
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                                <span class="left"></span>
                            </span>
                        </div>
                        <div class="swiper-button-next swiper-arrow right colored">
                            <span class="animated-block hover-animated thin">
                                <img src="{{ asset('assets/img/main/colored-arrow-right.png') }}" alt="#" />
                                <span class="clip">
                                    <span class="bg-nofixed"
                                        style="background: url({{ asset('assets/img/main/colored-arrow-right-theme-2.png') }}) no-repeat"></span>
                                </span>
                                <b class="active-element"></b>
                                <b class="active-element"></b>
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="bottom"></span>
                                <span class="left"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <span class="xs-offset-30 offset-160"></span>

            </div>
            <!-- BLOCK "TYPE 9  WITH SLIDER PAGE 1.4" -->
            <!-- FOOTER STYLE 2-->
            <footer class="normal style-2">
                <div class="container">
                    <div class="row">
                        <div class="offset-60 md-offset-30"></div>
                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 align-center">
                            <a href="#" class="footer-logo">
                                <img src="{{asset('assets/img/mp.png')}}"  alt=""/>
                            </a>
                            <article class="grei-6e6e6e">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </article>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-50 md-offset-25"></div>
                        <nav class="col-md-12 col-sm-12 col-xs-12 x-small">
                            <ul>
                                <li><a href="/">{{trans('lang.Home')}}</a></li>
                                <li><a href="about">{{trans('lang.ABOUT')}}</a></li>
                                <li><a href="portfolio">{{trans('lang.PORTFOLIO')}}</a></li>
                                {{-- <li><a href="#">Services</a></li> --}}
                                <li><a href="/massage">{{trans('lang.CONTACT')}}</a></li>
                            </ul>
                        </nav>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="offset-50 md-offset-30 sm-offset-20"></div>
                            <div class="follow">
                                <a href="https://www.facebook.com/">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="https://twitter.com/">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="https://www.pinterest.com/">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                            </div>
                            <div class="offset-60 md-offset-30"></div>
                        </div>

                    </div>
                </div>
                <div class="copywrite col-md-12 col-sm-12 col-xs-12">
                    <span class="offset-40"></span>
                    © 2023 Master Pro. All Rights reserved. <br> Development by <a href="https://tharrwa.com" class="trademark yellow">tharrwa</a>
                    <div class="clear"></div>
                    <span class="offset-40"></span>
                </div>
            </footer>
            <!-- FOOTER STYLE 2-->
        </div>
    </div>

    <script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{asset('assets/js/idangerous.swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/global.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/progressbar.min.js')}}"></script>
</body>
</html>
