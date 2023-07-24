@include('layouts.userheader')
<span class="top-line"></span>
<span class="right-line"></span>
<span class="bottom-line"></span>
<span class="left-line"></span>
<div class="blocks-container style-4">
    <!-- BLOCK "TYPE 22 with MAP" -->
    <div class="block map block-type-22 style-2">
        <div class="container-fluid">
            <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="block">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1 col-sm-12 col-xs-12">
                            <span class="offset-80 md-offset-60"></span>
                            <article class="main large">
                                <h2 class="h1 title bg-title active-element activated">{{trans('lang.Contact us')}}<span
                                        class="bg"></span></h2>
                                <div class="offset-15"></div>
                                <p>
                                    {{trans('lang.We are happy to serve you')}}
                                </p>
                                <span class="offset-45 md-offset-20"></span>
                            </article>
                        </div>
                        <div class="col-md-11 col-md-offset-1 col-sm-12 col-xs-12 normal">
                            <div class="normal ">
                                <div class="line-decoration active-element"></div>
                                <span class="h5 h6-14">{{ trans('lang.phone') }} :</span>
                                <div class="tel small-13 "><span><a href="tel:613-837-66284" class="grei-919191 tel">
                                          </a></span><span>/</span><span><a href="tel:613-837-66284"
                                            class="grei-919191 tel">{!!$massage->description!!}</a></span></div>
                                <span class="offset-15 md-offset-20"></span>
                            </div>
                            <div class="normal">
                                <div class="line-decoration active-element"></div>
                                <h6 class="h5 h6-14">{{ trans('lang.e-mail') }} :</h6>
                                <div class="email small-13"><a class="grei-919191 email" href="mailto:support@evio.com"
                                        target="_top"><span>support@evio.com</span></a><span>/</span><a
                                        class="grei-919191 email" href="mailto:support@evio.com"
                                        target="_top"><span>support@evio.com</span></a></div>
                                <span class="offset-15 md-offset-20"></span>
                            </div>
                            <address class="normal grei-919191">
                                <div class="line-decoration active-element"></div>
                                <div class="h5 h6-14">{{ trans('lang.address') }} :</div>
                                <div class="address small-13">{{$massage->name}}
                                 </div>

                            </address>
                            <span class="offset-25 md-offset-15"></span>
                        </div>
                        <form action="{{ route('massage.store') }}" method="POST" enctype="multipart/form-data"
                            class="col-md-11 col-md-offset-1 col-sm-12 col-xs-12 contact-form">
                            @csrf
                            <input class="col-xs-12" type="text" name="name" placeholder="{{trans('lang.Name')}}" />
                            <span class="sm-offset-15"></span>
                            <input class="col-xs-12" type="text" name="email" placeholder="{{ trans('lang.e-mail') }}" />
                            <span class="offset-25 md-offset-15"></span>
                            <input class="col-md-12 col-sm-12 col-xs-12" type="number" name="phone"
                                placeholder="{{ trans('lang.phone') }}" />
                            <span class="offset-25 md-offset-15"></span>
                            <textarea class="col-md-12 col-sm-12 col-xs-12" name="massage" placeholder="{{trans('lang.Message')}}"></textarea>
                            <div class="button-wrap col-md-12 col-sm-12 col-xs-12">
                                <span class="offset-50 md-offset-25"></span>

                                <div class="button big-button animated-button submit-button">
                                    <form onsubmit="return confirm('Are You sure ?');">
                                        <button type="submit"
                                            class="delete button button-box button-xs button-danger">{{ trans('lang.Send Masseg') }}</button>

                                        @if (isset($massage))
                                            <script>
                                                swal({
                                                    title: "Good job!",
                                                    text: "You clicked the button!",
                                                    icon: "success",
                                                    button: "Aww yiss!",
                                                });
                                            </script>
                                        @endisset



                                    </form>

                                </div>
                                <span class="offset-120 md-offset-60"></span>
                            </div>
                        </form>
                        <div class="map-wrapper">
                            <div id="map-canvas" data-lat="40.799194" data-lng="-74.326140" data-zoom="15">
                            </div>
                            <div class="addresses-block">
                                <a data-lat="40.799194" data-lng="-74.326140"
                                    data-string="1. Here is some address or email or phone or something else..."></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOCK "TYPE 22 with MAP" -->
    @include('layouts.userfooter')
