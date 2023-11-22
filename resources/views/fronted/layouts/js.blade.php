 <!--jquery library js-->
 <script src="{{ asset('') }}fronted/js/jquery-3.6.0.min.js"></script>
 <!--bootstrap js-->
 <script src="{{ asset('') }}fronted/js/bootstrap.bundle.min.js"></script>
 <!--font-awesome js-->
 <script src="{{ asset('') }}fronted/js/Font-Awesome.js"></script>
 <!--select2 js-->
 <script src="{{ asset('') }}fronted/js/select2.min.js"></script>
 <!--slick slider js-->
 <script src="{{ asset('') }}fronted/js/slick.min.js"></script>
 <!--simplyCountdown js-->
 <script src="{{ asset('') }}fronted/js/simplyCountdown.js"></script>
 <!--product zoomer js-->
 <script src="{{ asset('') }}fronted/js/jquery.exzoom.js"></script>
 <!--nice-number js-->
 <script src="{{ asset('') }}fronted/js/jquery.nice-number.min.js"></script>
 <!--counter js-->
 <script src="{{ asset('') }}fronted/js/jquery.waypoints.min.js"></script>
 <script src="{{ asset('') }}fronted/js/jquery.countup.min.js"></script>
 <!--add row js-->
 <script src="{{ asset('') }}fronted/js/add_row_custon.js"></script>
 <!--multiple-image-video js-->
 <script src="{{ asset('') }}fronted/js/multiple-image-video.js"></script>
 <!--sticky sidebar js-->
 <script src="{{ asset('') }}fronted/js/sticky_sidebar.js"></script>
 <!--price ranger js-->
 <script src="{{ asset('') }}fronted/js/ranger_jquery-ui.min.js"></script>
 <script src="{{ asset('') }}fronted/js/ranger_slider.js"></script>
 <!--isotope js-->
 <script src="{{ asset('') }}fronted/js/isotope.pkgd.min.js"></script>
 <!--venobox js-->
 <script src="{{ asset('') }}fronted/js/venobox.min.js"></script>
 <!--classycountdown js-->
 <script src="{{ asset('') }}fronted/js/jquery.classycountdown.js"></script>

 <!--main/custom js-->
 <script src="{{ asset('') }}fronted/js/main.js"></script>

 <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 <script>
    @if ($errors->any())
           @foreach ($errors->all() as $error )
           toastr.error("{{ $error }}")
           
           @endforeach
         @endif
 </script>