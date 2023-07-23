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
                    @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
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
<script>
    function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(51.508742,-0.120850),
      zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>
</div>
</div>

<script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('assets/js/idangerous.swiper.min.js')}}"></script>
<script src="{{asset('assets/js/global.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/progressbar.min.js')}}"></script>
{{-- sweet alert --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{-- google map --}}
<script src="{{asset('assets/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('assets/js/global.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="{{asset('assets/js/map.js')}}"></script>
{{-- bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
