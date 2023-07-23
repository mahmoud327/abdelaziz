
@include('layouts.userheader')
  <!-- HEADER STYLE 2 -->
  <span class="top-line"></span>
  <span class="right-line"></span>
  <span class="bottom-line"></span>
  <span class="left-line"></span>
  <div class="blocks-container">
      <!-- BLOCK "TYPE 11  STYLE 3 PAGE 6.1" -->
      <div class="block block-type-11 style-7 style-9">
          <span class="offset-145 md-offset-80"></span>
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                      <article class="main large align-center">
                          <h2 class="h1 title bg-title active-element">{{trans('lang.PORTFOLIO')}}<span class="bg"></span></h2>
                          <div class="offset-15"></div>
                          <p>
                            {{ trans('lang.Just a small part of our honorable work') }}
                          </p>
                          <div class="offset-70 md-offset-40"></div>
                      </article>
                  </div>
              </div>
          </div>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="full-page borders hover-left" data-wow-delay="0.3s">
                          <div class="grid-sizer"></div>
                          @foreach ($image as $image)


                          <div class="sorting-item animated-block hover-animated">
                              <a href="#" class="img-link"><img src="{{ Storage::url($image->image) }}" height="100" width="100" alt="" /></a>
                              <div class="hover-content">
                                  <span class="top"></span>
                                  <span class="right"></span>
                                  <span class="left"></span>
                                  <span class="bottom"></span>
                                  <div class="content">
                                      <div class="wrapper">
                                          <h5 class="h5 white"><a class="link hover-effect-bold" href="#">{{$image->name}}</a></h5>
                                      </div>
                                      <span class="offset-15"></span>
                                      <span class="button animated-button colored small-button">{!! $image->description !!}</span>
                                  </div>
                              </div>
                          </div>
                          @endforeach
                      </div>
                  </div>
                  <span class="offset-10"></span>
                  <div class="clear"></div>
              </div>
          </div>
      </div>
      <!-- BLOCK "TYPE 11 STYLE 3 PAGE 6.1" -->
      @include('layouts.userfooter')
