<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/admin/production/images/muarojambi.png" rel="icon">
  <link href="/selecao/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/selecao/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/selecao/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="/selecao/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/selecao/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/selecao/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/selecao/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="/selecao/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="/selecao/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/selecao/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/selecao/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v2.3.0
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <!--<h1 class="text-light"><a href="/">KASANG LOPAK ALAI</a></h1>
         Uncomment below if you prefer to use an image logo -->
        <a ><img src="/logo/logo.png" alt="" class="img-fluid" s></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#profil">Profil</a></li>
          <li><a href="#services">Penduduk</a></li>
          <li><a href="#berita">Berita</a></li>
          <li><a href="#perangkat">Perangkat</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="profil" class="profil">
      <div class="container mt-5">

        <div class="section-title" data-aos="zoom-out">
          <h2>{{$id->kategori}}</h2>
          <p>{{$id->judul}}</p>
        </div>

        <div class="row content" data-aos="fade-up">
            <img src="{{Storage::url($id->foto)}}" alt="">
        </div>
        <div class="row content" data-aos="fade-up">
            {{$id->isi}}
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>KASANG LOPAK ALAI</h3>
      <p>Jl. Raya Kasang Lopak Alai RT 03 Dusun Air Mawar Kode Pos : 36373</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        <a href="/login">Login</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="/selecao/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/selecao/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/selecao/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/selecao/assets/vendor/php-email-form/validate.js"></script>
  <script src="/selecao/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/selecao/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/selecao/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/selecao/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="/selecao/assets/js/main.js"></script>

</body>

</html>