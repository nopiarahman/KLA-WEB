<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/admin/production/images/muarojambi.png" type="image/ico" />

    <title>@yield('titleadmin')</title>
    @yield('head')
    <!-- Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

    <link href="/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/admin/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/useradmin" class="site_title"> <span>Kasang Lopak Alai</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="/logo/profil.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Selamat Datang,</span>
                            <h2>{{ Auth::user()->name }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />
                    @auth
                        @if (Auth::user()->admin == 0 && Auth::user()->role == 'admin')
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section"> 
                    </li>&nbsp; &nbsp; &nbsp;


                            <h3>ADMIN</h3>
                            <ul class="nav side-menu">
                                <li><a href="/home"><i class="fa fa-home"></i> Home </a>
                                </li>
                                <li><a href="/profil"><i class="fa fa-pencil-square-o"></i> Profil Desa</a>
                                </li>
                                <li><a href="/berita"><i class="fa fa-desktop"></i> Berita Desa</a>
                                </li>
                                <li><a><i class="fa fa-table"></i> Penduduk <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/penduduk"><i class="fa fa-user"></i> Penduduk </a>
                                        </li>
                                        <li><a href="/kk"><i class="fa fa-table"></i> Kartu Keluarga </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Surat <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/suketb"><i class="fa fa-table"></i> Surat Keterangan Biasa </a>
                                        </li>
                                        <li><a href="/sktm"><i class="fa fa-table"></i> Surat Keterangan Tidak Mampu </a>
                                        </li>
                                        <li><a href="/sku"><i class="fa fa-table"></i> Surat Keterangan Usaha </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-clone"></i>Laporan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/lpenduduk">Laporan Penduduk</a></li>
                                        <li><a href="/lsurat">Laporan Surat Keterangan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /sidebar menu -->

                @elseif (Auth::user()->role == 'penduduk')
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section"> 
                </li>&nbsp; &nbsp; &nbsp;


                        <h3>PENDUDUK</h3>
                        <ul class="nav side-menu">
                            <li><a href="/home"><i class="fa fa-home"></i> Home </a>
                            </li>
                            <li><a><i class="fa fa-table"></i> Data Penduduk <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/dataDiri"><i class="fa fa-user"></i> Data Diri </a>
                                    </li>
                                    <li><a href="{{route('kartuKeluarga')}}"><i class="fa fa-table"></i> Kartu Keluarga </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('suratPendudukBaru')}}"> <i class="fa fa-envelope"></i> Pengajuan Surat </a>
{{-- 
                            <li><a><i class="fa fa-table"></i> Permintaan Surat <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{route('suratPendudukBaru')}}"><i class="fa fa-table"></i>Baru</a>
                                    </li>
                                    <li><a href="{{route('suratPendudukSelesai')}}"><i class="fa fa-table"></i>Selesai Diproses </a>
                                    </li>
                                </ul>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /sidebar menu -->
                @elseif (Auth::user()->role == 'sekdes')
                <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section"> 
                    </li>&nbsp; &nbsp; &nbsp;


                            <h3>SEKDES</h3>
                            <ul class="nav side-menu">
                                <li><a href="/home"><i class="fa fa-home"></i> Home </a>
                                </li>
                                <!--<li><a href="/profil"><i class="fa fa-pencil-square-o"></i> Profil Desa</a>
                                </li>
                                <li><a href="/berita"><i class="fa fa-desktop"></i> Berita Desa</a>
                                </li>-->
                                <li><a><i class="fa fa-table"></i> Penduduk <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/sdpenduduk"><i class="fa fa-user"></i> Penduduk </a>
                                        </li>
                                        <li><a href="/sdkk"><i class="fa fa-table"></i> Kartu Keluarga </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Surat <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/sdskb"><i class="fa fa-table"></i> Surat Keterangan Biasa </a>
                                        </li>
                                        <li><a href="/sdsktm"><i class="fa fa-table"></i> Surat Keterangan Tidak Mampu </a>
                                        </li>
                                        <li><a href="/sdsku"><i class="fa fa-table"></i> Surat Keterangan Usaha </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-clone"></i>Laporan <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/lpenduduk">Laporan Penduduk</a></li>
                                        <li><a href="/lsurat">Laporan Surat Keterangan</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /sidebar menu -->


                 @endif
                @endauth

                <!-- /menu footer buttons 
               <div class="sidebar-footer hidden-small">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                </div>-->
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                    <ul class=" navbar-right">
                        <li class="nav-item dropdown open" style="padding-left: 15px;">
                            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                <img src="/logo/profil.png" alt="">{{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pull-right"></i >{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            <main class="py-4">
            @if(Session::has('pesan'))
            <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ Session::get('pesan') }}
            </div>
            @endif
            @yield('page')
        </main>

            <!-- /page content -->
        </div>


        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Kasang Lopak Alai - Sistem Administrasi Pelayanan
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/admin/vendors/Flot/jquery.flot.js"></script>
    <script src="/admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/admin/vendors/moment/min/moment.min.js"></script>
    <script src="/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/admin/build/js/custom.min.js"></script>
    @yield('script')
</body>
/adminhtml>

<!--
|--------------------------------------------------------------------------
| @copyrigt BanDotz
|--------------------------------------------------------------------------
| app.view
|--------------------------------------------------------------------------
|
-->