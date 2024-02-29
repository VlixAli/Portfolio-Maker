@props([
    'title' => 'Portfolio'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$title}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset("assets/vendor/aos/aos.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio
    * Updated: Jan 29 2024 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>

{{ $slot }}

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>iPortfolio</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset("assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
<script src="{{asset("assets/vendor/aos/aos.js")}}"></script>
<script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
<script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
<script src="{{asset("assets/vendor/typed.js/typed.umd.js")}}"></script>
<script src="{{asset("assets/vendor/waypoints/noframework.waypoints.js")}}"></script>
<script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>

<!-- Template Main JS File -->
<script src="{{asset("assets/js/main.js")}}"></script>

</body>

</html>
