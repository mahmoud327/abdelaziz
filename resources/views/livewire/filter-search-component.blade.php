<div>
    <div class="block block-type-11 style-5 wow fadeInUp" data-wow-delay="0.3s">
        <span class="offset-170 md-offset-90 sm-offset-110 xs-offset-15"></span>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="sorting-menu" data-wow-delay="0.3s">
                        <div class="responsive-filtration-title">Filter by...</div>
                        <div class="responsive-filtration-toggle">
                            <a  wire:click="filterTab('all')" class=@if ($activeTab =='all') active

                            @endif >

                            الكل
                                <span class="decor-right active-element"></span>
                            </a>
                            @foreach ($categories as $cat)
                                <a   wire:click="filterTab({{ $cat->id }})"  class=@if ($activeTab == $cat->id) active

                                    @endif >
                                    {{ $cat->name }}
                                    <span class="decor-right active-element"></span>
                                </a>
                            @endforeach

                        </div>
                        <span class="offset-80 md-offset-30"></span>
                    </div>
                    <div class="sorting-container full-page borders" data-wow-delay="0.3s">
                        <div class="grid-sizer"></div>
                        @foreach ($works as $work)
                        <div class="sorting-item animated-block hover-animated filter-5">
                            <img src="{{ $work->image_path }}" height="270" width="270"
                                alt="" />
                            <div class="hover-content">
                                <span class="top"></span>
                                <span class="right"></span>
                                <span class="left"></span>
                                <span class="bottom"></span>
                                <div class="content">
                                    <div class="wrapper">
                                        <h5 class="h4 white">{{optional($work->category)->name   }}</h5>
                                    </div>
                                    <span class="offset-15"></span>
                                    <a class="button animated-button colored small-button"
                                        href="portfolio-detail-1.html">{{optional($work->category)->name   }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <div class="clear"></div>
                    <span class="offset-45 md-offset-25"></span>
                    <a class="button big-button animated-button align-center" href="#">
                        <span class="content">view all works</span>
                        <span class="top"></span>
                        <span class="right"></span>
                        <span class="left"></span>
                        <span class="bottom"></span>
                    </a>
                </div>
            </div>
        </div>
        <span class="offset-160 md-offset-80"></span>
    </div>
</div>
