@include('layouts.userheader')
<style>
    .block-type-24 img {
        width: 50% !important;
        height: 50% !important;
    }
    .left-thumb {
   margin-top:104px !important;
}
</style>
<span class="top-line"></span>
<span class="right-line"></span>
<span class="bottom-line"></span>
<span class="left-line"></span>
<div class="blocks-container">
    <!-- BLOCK "TYPE 24 STYLE 2 PAGE 3.7" -->
    <div class="block block-type-24 style-2">
        <span class="offset-155 md-offset-80"></span>
        <div class="container">
            <div class="row">
                <article class="normal grei-919191">
                    <div class="col-md-6 col-sm-6 col-xs-12 align-left">
                        <h2 class="h2-36 uppercased">  {{ $work->title }}.</h2>
                        <span class="sm-offset-20"></span>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 align-left">
                        <p>
                          {{ $work->description }}.</p>
                    </div>
                </article>
                <span class="offset-50 md-offset-20"></span>
                <div class="col-md-4 col-sm-4 col-xs-12" data-wow-delay="0.3s">
                    <div class="wrap">
                        <h6 class="heading h6-14 uppercased"><span
                                class="line-decoration active-element"></span>category:</h6>
                        <span class="md-offset-10"></span>
                        <div class="category grei-919191">{{ optional($work->category)->name }}</div>
                        <span class="sm-offset-20"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12" data-wow-delay="0.3s">
                    <div class="wrap">
                        <h6 class="heading h6-14 uppercased"><span class="line-decoration active-element"></span>client:
                        </h6>
                        <span class="md-offset-10"></span>
                        <div class="client grei-919191">{{ $work->client_name }}</div>
                        <span class="sm-offset-20"></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12" data-wow-delay="0.3s">
                    <div class="wrap">
                        <h6 class="heading h6-14 uppercased"><span class="line-decoration active-element"></span>job:
                        </h6>
                        <span class="md-offset-10"></span>
                        <div class="job grei-919191">{{ $work->job }}</div>
                    </div>
                    <span class="offset-80 md-offset-40"></span>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12" data-wow-delay="0.3s">
                    <img src="{{$work->image_path }}" alt="" />
                    <article class="normal col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 grei-919191">
                        <div class="decoration-vertical active-element middle"></div>
                        <h6 class="h5 capitalized">{{ $work->title }}</h6>
                        <span class="offset-20 md-offset-10"></span>
                        <p>{{ $work->description }}</p>
                        <span class="offset-25 md-offset-15"></span>
                    </article>
                    <img src="{{$work->image_path }}" width="150px" />
                    <span class="offset-30 md-offset-15"></span>
                </div>




                @if ($work->name)

                    @for ($i = 0; $i < count($work->image); $i++)
                        <div class="images col-md-6 col-sm-6 col-xs-12 left-thumb">
                            @isset ($work->image)
                                <img src="{{ asset('uploads/works/'.$work->image[$i]) }}"  width="150px" height="100px" />
                                @else

                            @endif
                            <article class="normal col-md-10 col-md-offset-1  grei-919191">
                                <div class="decoration-vertical active-element middle"></div>
                                <h6 class="h5 capitalized hover-effect-bold"><a href="#">{{ $work->name[$i] }}</a>
                                </h6>
                                <span class="offset-20 md-offset-10"></span>
                                <p> {{ $work->desc[$i] }}
                                </p>
                            </article>
                            <span class="xs-offset-15"></span>
                        </div>
                    @endfor
                @endif
            </div>
            {{-- <div class="row">
                <span class="offset-155 md-offset-80"></span>
                <div class="col-md-12 col-xs-12 buttons" data-wow-delay="0.3s">
                    <div class="wrapper">
                        <a class="button animated-button active-element left" href="#">
                            <span class="content">prev project</span>
                            <span class="top"></span>
                            <span class="right"></span>
                            <span class="bottom"></span>
                            <span class="left"></span>
                        </a>
                        <h5 class="h5"><a href="#" class="hover-effect-bold">Nine Corporate Web-site</a></h5>
                    </div>
                    <a class="menu-button" href="#">
                        <span class="span1"></span>
                        <span class="span2"></span>
                        <span class="span3"></span>
                        <span class="span4"></span>
                        <span class="span5"></span>
                        <span class="span6"></span>
                        <span class="span7"></span>
                        <span class="span8"></span>
                        <span class="span9"></span>
                    </a>
                    <div class="wrapper">
                        <h5 class="h5"><a href="#" class="hover-effect-bold">Packaging For Soap</a></h5>
                        <a class="button animated-button active-element right" href="#">
                            <span class="content">next project</span>
                            <span class="top"></span>
                            <span class="right"></span>
                            <span class="bottom"></span>
                            <span class="left"></span>
                        </a>
                    </div>
                </div>
                <span class="offset-160 md-offset-80"></span>
            </div> --}}
        </div>
        {{-- <div class="container-fluid">
            <div class="row">
                <div class="block-type-23">
                    <div class="col-md-6 col-sm-6 col-xs-12 left-thumb">
                        <div class="animated-block hover-animated">
                            <span class="top"></span>
                            <span class="right"></span>
                            <span class="bottom"></span>
                            <span class="left"></span>
                            <span class="clip">
                                <span class="bg-nofixed"
                                    style="background-image:url(img/block-24/style-2/gallery3.jpg)">
                                </span>
                            </span>
                            <div class="hover-content">
                                <a class="button animated-button colored small-button" href="#">
                                    <span class="top-row">branding</span>
                                    <span class="bottom-row">branding</span>
                                </a>
                                <div class="content">
                                    <a class="category x-small" href="#">in <span
                                            class="uppercased">corporate</span></a>
                                    <span class="offset-15"></span>
                                    <h5 class="h4 white"><a class="link hover-effect-bold" href="#">Packaging
                                            for Yogurt</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="xs-offset-15"></span>
                    <div class="col-md-6 col-sm-6 col-xs-12 right-thumb">
                        <div class="animated-block hover-animated">
                            <span class="top"></span>
                            <span class="right"></span>
                            <span class="bottom"></span>
                            <span class="left"></span>
                            <span class="clip">
                                <span class="bg-nofixed"
                                    style="background-image:url(img/block-24/style-2/gallery4.jpg)">
                                </span>
                            </span>
                            <div class="hover-content">
                                <a class="button animated-button colored small-button" href="#">
                                    <span class="top-row">branding</span>
                                    <span class="bottom-row">branding</span>
                                </a>
                                <div class="content">
                                    <a class="category x-small" href="#">in <span
                                            class="uppercased">corporate</span></a>
                                    <span class="offset-15"></span>
                                    <h5 class="h4 white"><a class="link hover-effect-bold" href="#">Packaging
                                            for Yogurt</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="offset-30 md-offset-15"></span>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- BLOCK "TYPE 24 STYLE 2 PAGE 3.7" -->
    <!-- FOOTER STYLE 2-->
    <footer class="normal style-2">
        <div class="container">
            <div class="row">
                <div class="offset-60 md-offset-30"></div>
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 align-center">
                    <a href="#" class="footer-logo">
                        <img src="img/main/logo-white.png" alt="" />
                    </a>
                    <article class="grei-6e6e6e">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="offset-50 md-offset-25"></div>
                <nav class="col-md-12 col-sm-12 col-xs-12 x-small">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Before & after</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pages</a></li>
                    </ul>
                </nav>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="offset-50 md-offset-30 sm-offset-20"></div>
                    <div class="follow">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                    <div class="offset-60 md-offset-30"></div>
                </div>

            </div>
        </div>
        <div class="copywrite col-md-12 col-sm-12 col-xs-12">
            <span class="offset-40"></span>
            © 2016 Evio. All Rights reserved. Development by <a href="#"
                class="trademark yellow">UnionAgency</a>
            <div class="clear"></div>
            <span class="offset-40"></span>
        </div>
    </footer>
    <!-- FOOTER STYLE 2-->
</div>
</div>

<script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('assets/js/idangerous.swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/global.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/progressbar.min.js') }}"></script>
</body>

</html>
