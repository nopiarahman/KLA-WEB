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
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span> Desa Kasang Lopak Alai</span></h2>
          <p class="animate__animated fanimate__adeInUp"><td><img src="{{('/logo/logo.png')}}" width="150" height="150"></td></p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Pusat Pelayanan Informasi Elektronik</h2>
          <p class="animate__animated animate__fadeInUp">Ini merupakan halaman website untuk pusat informasi elektronik yang dapat di akses secara publik untuk mengetahui perkembangan desa.</p>
        </div>
      </div>

      <!-- Slide 3 
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>-->

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="profil" class="profil">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Profil Desa</h2>
          <p>Kasang Lopak Alai</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              Sejarah desa Kasang Lopak Alai sebelum tahun 1982 adalah bagian dari desa Lopak Alai. Pada tahun 1982 desa Lopak Alai dimekarkan menjadi dua desa.
              Satu desa Lopak Alai yang pada waktu itu dipimpin oleh Datuk Usman Tholip, kemudian desaKasang Lopak Alai dipimpinOleh Datuk H.M Syafe’idengan Sekdesnya Bapak Kasim Inas dibantu oleh tiga orang kepala urusan yaitu:
            </p>
            <ul>
              <li><i></i> Bapak Sudarno S, sebagai Kaur Pemerintahan </li>

	<li><i></i> Bapak Susilo Budiono sebagai Kaur Pembangunan </li>
              <li><i></i> Bapak M. Saleh sebagai Kaur Umum </li>
            </ul>
            <p>
              Kasang Lopak Alai pada waktuitu dibagi menjadi dua Dusun yaitu Dusun Air Mawar (Dusun I) dan Dusun Andil (Dusun II), Dusun Air Mawar dipimpin Oleh Bapak Warso dan Dusun Andil dipimpin Bapak Ngadirin, dan kemudian terdiri dari dua (2) RW dan 6 RT yang masing-masing RW membawahi beberapa RT.
            </p>


          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Secara geografis desa Kasang Lopak Alai terletak di bagian selatan ibukota Kabupaten Muaro Jambi dengan luas wilayah lebih kurang 1.425 Ha Km2 dengan batas wilayah sebagai berikut:
            </p>
            <ul>
              <li><i></i> Sebelah Utara dengan : Sungai Kumpeh </li>
              <li><i></i> Sebelah Timur dengan : Desa Solok </li>
              <li><i></i> Sebelah Sekatan dengan : Desa Tangkit Baru (Kec. Sungai Gelam) </li>
              <li><i></i> Sebelah Barat dengan  : Desa Kasang Kota Karang </li>
            </ul>
            <p>
              Luas wilayah desa Kasang Lopak Alai adalah : 1.425 Ha/ 20 Km2 yang terdiri dari :
            </p>
            <ul>
              <li><i></i> Tanah Sawah : ± 131 Ha </li>
              <li><i></i> Tanah Perkarangan : ± 650 Ha </li>
              <li><i></i> Tanah Perkebunan : ± 644 Ha </li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>PENDUDUK</h2>
          <p>Grafik Penduduk</p>
          
        </div>
<a href="/grafik">
        <div class="row">

          <!-- <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="las la-globe-americas" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="las la-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div> -->
        </div>
</a>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="berita" class="berita">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Berita</h2>
          <p>Apa Kabar Desa</p>
        </div>

        <ul id="berita" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="/selecao/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="/selecao/assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="/selecao/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="/selecao/assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="/selecao/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="/selecao/assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="/selecao/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="/selecao/assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="/selecao/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="/selecao/assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="/selecao/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="/selecao/assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="/selecao/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="/selecao/assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="/selecao/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="/selecao/assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="/selecao/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="/selecao/assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Team Section ======= -->
    <section id="perangkat" class="perangkat">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Perangkat Desa</h2>
          <p>Kasang Lopak Alai</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>PAWI</h4>
                <span>KEPALA DESA</span>
              </br></br></br>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>TUGIMAN</h4>
                <span>BPD</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>SARIMAN</h4>
                <span>SEKERTARIS DESA</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>SULASTRI</h4>
                <span>KEPALA SELEKSI PELAYANAN</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
</div>
              <div class="member-info">
                <h4>M. HADI KURNIA, S.P</h4>
                <span>KEPALA SELEKSI KESEJATERAAN</span>
              </br></br></br>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>HENDRA, S.Pd</h4>
                <span>KEPALA SELEKSI KESEJATERAAN</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>FATIMAH</h4>
                <span>KEPALA URUSAN KEUANGAN</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>KHAIRUL ANWAR.A</h4>
                <span>KEPALA URUSAN UMUM</span>
</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>ADI</h4>
                <span>KEPALA URUSAN PERENCANAAN</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>ARDI ARIPIN, S.Pd</h4>
                <span>KADUS AIR MAWAR</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="/selecao/assets/img/team/isi.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>JOKO PRIANTO, S.E</h4>
                <span>KADUS ANDIL</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Jl. Raya Kasang Lopak Alai RT 03  Kode Pos : 36373</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>kasanglopakalai@yahoo.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+62 823 740 969 73</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
        &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
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