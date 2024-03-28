<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{ asset('/') }}fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/owl.theme.default.min.css">


    <link rel="stylesheet" href="{{ asset('/') }}css/aos.css">

    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">

  </head>
  <body>

  <div class="site-wrap">
    @include('frontend.inc.header')

    @yield('content')

    @include('frontend.inc.footer')
  </div>

  <script src="{{ asset('/') }}js/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('/') }}js/jquery-ui.js"></script>
  <script src="{{ asset('/') }}js/popper.min.js"></script>
  <script src="{{ asset('/') }}js/bootstrap.min.js"></script>
  <script src="{{ asset('/') }}js/owl.carousel.min.js"></script>
  <script src="{{ asset('/') }}js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('/') }}js/aos.js"></script>

  <script src="{{ asset('/') }}js/main.js"></script>

  </body>
</html>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>{{ config('app.name') }}</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}css/font-awesome.css">

    <link rel="stylesheet" href="{{ asset('/') }}css/templatemo-hexashop.css">

    <link rel="stylesheet" href="{{ asset('/') }}css/owl-carousel.css">

    <link rel="stylesheet" href="{{ asset('/') }}css/lightbox.css">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>






    <!-- jQuery -->
    <script src="{{ asset('/') }}js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('/') }}js/popper.js"></script>
    <script src="{{ asset('/') }}js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="{{ asset('/') }}js/owl-carousel.js"></script>
    <script src="{{ asset('/') }}js/accordions.js"></script>
    <script src="{{ asset('/') }}js/datepicker.js"></script>
    <script src="{{ asset('/') }}js/scrollreveal.min.js"></script>
    <script src="{{ asset('/') }}js/waypoints.min.js"></script>
    <script src="{{ asset('/') }}js/jquery.counterup.min.js"></script>
    <script src="{{ asset('/') }}js/imgfix.min.js"></script>
    <script src="{{ asset('/') }}js/slick.js"></script>
    <script src="{{ asset('/') }}js/lightbox.js"></script>
    <script src="{{ asset('/') }}js/isotope.js"></script>

    <!-- Global Init -->
    <script src="{{ asset('/') }}js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>

  </body>
</html>
