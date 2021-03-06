<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Raportku</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/fav_icon.png')}}" rel="icon">
  <link href="{{ asset('frontend/assets/img/icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.2.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

@include('frontend/layouts.navbar')

@yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="pull-right hidden-xs">

          <div class="mr-md-auto text-center text-md-right">
            <h3>SD Negeri 58 Payakumbuh</h3>
            <p>
              Jalan Tanjung Pinang <br>
              Daya Bangun, Payakumbuh Barat<br>
              Payakumbuh, Sumatera Barat 26221<br><br>
              <strong>Phone:</strong> +6275290530<br>
              <strong>Email:</strong> yulvirayaya@yahoo.com<br>
            </p>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Raportku 2021</span></strong>. kel2 Tif-Inter'19
        </div>
      </div>
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js' )}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
