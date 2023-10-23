<?php
session_start();
include "koneksi/ceksession.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arsip Surat Komisi Pemilihan Umum Provinsi Kalimantan Selatan</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/logo_KPU.png">

  </head>
  <body>

    <div class="loader"></div>
    <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">ARSIP SURAT <span class="logo-dec">Komisi Pemilihan Umum Provinsi Kalimantan Selatan</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#main-header">Beranda</a></li>
                <li class=""><a href="#feature">Tentang</a></li>
                <li class=""><a href="#portfolio">VISI & MISI</a></li>
                <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="">Masuk
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="admin/login"><i class="fa fa-sign-out pull-right"></i> Admin</a></li> 
                    <li><a href="bagian/login"><i class="fa fa-sign-out pull-right"></i> User</a></li>
                  </ul>
                </li>
              </ul>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="banner-info text-center wow fadeIn delay-05s">
              <h2 class="bnr-sub-title"></h2>
              <div class="logo">
		            <img src="img/logo_kpu1.png" alt="" />
	            </div>
              <h3 class="bnr-sub-title">SISTEM INFORMASI PENGARSIPAN SURAT</h3>
                <h3 class="bnr-sub-title"><span class="logo-dec">KOMISI PEMILIHAN UMUM</span></h3>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Tentang</h2>
            <p class="sub-title pad-bt15">Website ini berguna untuk pengarsipan Surat Masuk dan Surat Keluar di Komisi Pemilihan Umum Provinsi Kalimantan Selatan</p><p>Surat diarsipkan dalam format PDF lalu disesuaikan nomor urutnya.</p>
            <hr class="bottom-line">
            <p class="sub-title pad-bt15"><strong> Pengarsipan Itu Penting</strong></p>
            <hr class="bottom-line">
          </div>
        <div class="col-md-4">
        </div>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/inbox.png">
              </div>
              <h3 class="pad-bt15">Surat Masuk</h3>
            </div>
          </div>
          <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/outbox.png">
              </div>
              <h3 class="pad-bt15">Surat Keluar</h3>
            </div>
          </div>
        <div class="col-md-4">
        </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">VISI</h2>
            <p class="sub-title pad-bt15">"Menjadi Penyelenggara Pemilihan Umum yang Mandiri, Professional, dan Berintegritas untuk Terwujudnya Pemilu yang LUBER dan JURDI"</p>
            <hr class="bottom-line">
          </div>
          <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">MISI</h2>
            <p class="sub-title pad-bt15"><p>1.Menjadi Penyelenggara Pemilihan Umum yang Mandiri, Professional, dan Berintegritas untuk Terwujudnya Pemilu yang LUBER dan JURDI</p>
            <p>2.Meningkatkan kualitas penyelenggaraan Pemilu yang efektif dan efisien, transparan, akuntabel, serta aksesibel</p>
            <p>3.Meningkatkan integritas, kemandirian, kompetensi dan profesionalisme penyelenggara Pemilu dengan mengukuhkan code of conduct penyelenggara Pemilu<p>
            <p>4.Menyusun regulasi di bidang Pemilu yang memberikan kepastian hukum, progesif, dan partisipati<p>
            <p>5.Meningkatkan kualitas pelayanan Pemilu untuk seluruh pemangku kepentingan</p>
            <P>6.Meningkatkan partisipasi dan kualitas pemilih dalam Pemilu, Pemilih berdaulat Negara kuat</P>
            <P>7.Mengoptimalkan pemanfaatan kemajuan teknologi informasi dalam penyelenggaraan Pemilu.</P>
            <hr class="bottom-line">
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-6 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img src="img/kpu-kalsel.png" class="img-responsive">
              <figcaption>
                  <h2>Reza Wahyudi</h2>
                  <p>"Komisi Pemilihan Umum Republik Indonesia"</p>
                  <p>"Never put off till tomorrow what you can do today"</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-3"></div>
        </div>
        <hr class="bottom-line">
      </div>
    </section>
    <!---->
    <!---->
    <section id="testimonial" class="wow fadeInUp delay-05s">
      <div class="bg-testicolor">
        <div class="container section-padding">
        <div class="row">
          <div class="testimonial-item">
            <ul class="bxslider">
              <li>
                <blockquote>
                  <img src="img/Grafikartes-Flat-Retro-Modern-Maps.ico" class="img-responsive">
                  <p>Talent wins games, but teamwork and intelligence win championships. </p>
                </blockquote>
                <small>Michael Jordan</small>
              </li>
              <li>
                <blockquote>
                  <img src="img/Grafikartes-Flat-Retro-Modern-Maps.ico" class="img-responsive">
                  <p>Alone we can do so little, together we can do so much.</p>
                </blockquote>
                <small>Helen Keller</small>
              </li>
              <li>
                <blockquote>
                  <img src="img/Grafikartes-Flat-Retro-Modern-Maps.ico" class="img-responsive">
                  <p>None of us is as smart as all of us.</p>
                </blockquote>
                <small>Ken Blanchard</small>
              </li>
              <li>
                <blockquote>
                  <img src="img/Grafikartes-Flat-Retro-Modern-Maps.ico" class="img-responsive">
                  <p>Coming together is a beginning. Keeping together is progress. Working together is success.</p>
                </blockquote>
                <small>Henry Ford</small>
              </li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <!---->
    <!---->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p>&copy; Komisi Pemilihan Umum Republik Indonesia. All Rights Reserved.</p>
          <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Baker
            -->
            Designed  by <a href="https://bootstrapmade.com/">Bootstrap Themes</a>
        </div>
        </div>
      </div>
    </footer>
    <!---->
  </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>