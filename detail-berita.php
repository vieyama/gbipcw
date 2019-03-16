<?php
  include('all-koneksi.php');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GBI Purwokerto City Walk</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">GBI PCW</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll" href="beranda#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="beranda#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="beranda#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="beranda#berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="beranda#renungan">Renungan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="beranda#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->



  <!--/ Section Blog-Single Star /-->
  <?php
      $qy = mysqli_fetch_array(mysqli_query($koneksi, "SELECT *, date_format(berita.tanggal, '%d - %M -  %Y') as tgl FROM berita, kategori_info WHERE berita.kategori_info = kategori_info.kode_info and berita.id_berita = '$_GET[id]'"));
  ?>
  <section class="blog-wrapper sect-pt4" style="padding-top:100px" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="post-box">
            <div class="post-thumb">
              <img src="assets/pages/img/photos/<?= $qy['gambar']; ?>" class="img-fluid" alt="">
            </div>
            <div class="post-meta">
              <h1 class="article-title"><?= $qy['judul_berita'] ?></h1>
              <ul>
                <li>
                  <span class="ion-ios-person"></span>
                  <a href="#"><?= $qy['penulis']; ?></a>
                </li>
                <li>
                  <span class="ion-pricetag"></span>
                  <a href="#"><?= $qy['nama_kategori']; ?></a>
                </li>
                <li>
                  <span class="ion-calendar"></span>
                  <a href="#"> <?= $qy['tgl'] ?></a>
                </li>
              </ul>
            </div>
            <div class="article-content">
          <p style="text-align: justify;"> <?= $qy['isi']; ?> </p>

            </div>
          </div>
          <div class="box-comments">
            <div class="title-box-2">
              <h4 class="title-comments title-left">Comments </h4>
            </div>
            <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2';
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
              <div class="fb-comments" data-href="http://localhost/sem/berita-<?= $_GET['id'] ?>.html" data-numposts="5"></div>
          </div>
        
        </div>
        <div class="col-md-4">

          <div class="widget-sidebar">
            <h5 class="sidebar-title">Berita Terbaru</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <?php
                  $qy_post=mysqli_query($koneksi, "SELECT *, date_format(berita.tanggal, '%d - %M -  %Y') as tgl FROM berita, kategori_info WHERE berita.kategori_info = kategori_info.kode_info and berita.kategori_info='1' order by berita.tanggal DESC limit 3");
                  while ($a = mysqli_fetch_array($qy_post)) {
                    $url_link = "berita-".$a['id_berita'].".html";
                 ?>
                <li>
                  <a href="<?php echo $url_link ?>"><?php echo $a['judul_berita']; ?></a>
                </li>
              <?php } ?>
              </ul>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Renungan</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <?php
                  $qy_post=mysqli_query($koneksi, "SELECT *, date_format(berita.tanggal, '%d - %M -  %Y') as tgl FROM berita, kategori_info WHERE berita.kategori_info = kategori_info.kode_info and berita.kategori_info='2' order by berita.tanggal DESC limit 3");
                  while ($a = mysqli_fetch_array($qy_post)) {
                    $url_link = "berita-".$a['id_berita'].".html";
                 ?>
                <li>
                  <a href="<?php echo $url_link ?>"><?php echo $a['judul_berita']; ?></a>
                </li>
              <?php } ?>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
