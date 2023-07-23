        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light">2023 &copy; <a href="https://tharrwa.com/">Abdelaziz Khalid</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="{{asset('adminassets/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugins JS-->
    <script src="{{asset('adminassets/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/js/plugins/tippy4.min.js')}}.js')}}"></script>
    <!--Main JS-->
    <script src="{{asset('adminassets/assets/js/main.js')}}"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="{{asset('adminassets/assets/js/plugins/moment/moment.min.js')}}"></script>

    <!--Daterange Picker-->
    <script src="{{asset('adminassets/assets/js/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('adminassets/assets/js/plugins/daterangepicker/daterangepicker.active.js')}}"></script>

    <!--Echarts-->
    <script src="{{asset('adminassets/assets/js/plugins/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/js/plugins/chartjs/chartjs.active.js')}}"></script>

    <!--VMap-->
    <script src="{{asset('adminassets/assets/js/plugins/vmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('adminassets/assets/js/plugins/vmap/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('adminassets/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('adminassets/assets/js/plugins/vmap/vmap.active.js')}}"></script>
    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


</body>

</html>
