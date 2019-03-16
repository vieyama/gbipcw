<?php
define("ROW_PER_PAGE",6);
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
            <a class="nav-link js-scroll active" href="beranda#berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="beranda#renungan">Renungan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="beranda#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--/ Nav End /-->
  <?php
    $search_keyword = '';
    if(!empty($_POST['search']['keyword'])) {
      $search_keyword = $_POST['search']['keyword'];
    }
    $sql = "SELECT *, date_format(berita.tanggal, '%d - %M -  %Y') as tgl FROM berita, kategori_info WHERE (berita.kategori_info = kategori_info.kode_info) AND (berita.kategori_info = '1') AND (berita.judul_berita LIKE :keyword OR berita.isi LIKE :keyword OR berita.penulis LIKE :keyword) ORDER BY berita.id_berita DESC";

    /* Pagination Code starts */
    $per_page_html = '';
    $page = 1;
    $start=0;
    if(!empty($_POST["page"])) {
      $page = $_POST["page"];
      $start=($page-1) * ROW_PER_PAGE;
    }
    $limit=" limit " . $start . "," . ROW_PER_PAGE;
    $pagination_statement = $pdo_conn->prepare($sql);
    $pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pagination_statement->execute();

    $row_count = $pagination_statement->rowCount();
    if(!empty($row_count)){
      $per_page_html .= "<nav aria-label='Orders navigation'>
      <ul class='pagination justify-content-end'>";
      $page_count=ceil($row_count/ROW_PER_PAGE);
      if($page_count>1) {
        for($i=1;$i<=$page_count;$i++){
          if($i==$page){
            $per_page_html .= '<li class="page-item active">
                                <input type="submit" name="page" value="' . $i . '" class="btn btn-primary active" />';
            $per_page_html .= '</li>';
          } else {
            $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn btn-default" />';
          }
        }
      }
      $per_page_html .= "</ul></nav>";
    }

    $query = $sql.$limit;
    $pdo_statement = $pdo_conn->prepare($query);
    $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
  ?>

  <section class="blog-wrapper sect-pt4" style="padding-top:100px" id="blog">
    <div class="container">
      <div class="row" style="margin-top:20px">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="">
              <b>Berita</b>
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="widget-sidebar sidebar-search">
            <h5 class="sidebar-title">Search</h5>
            <div class="sidebar-content">
              <form name='frmSearch' action='' method='post'>
                <div class="input-group">
                  <input type="text" class="form-control" name='search[keyword]' placeholder="Search for..." aria-label="Search for..." value="<?php echo $search_keyword; ?>" id='keyword'>
                  <span class="input-group-btn">
                    <button class="btn btn-secondary btn-search" type="button" id="btn-search">
                      <span class="ion-android-search"></span>
                    </button>
                  </span>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        if(!empty($result)) {
          foreach($result as $row) {
            $url_link = "berita-".$row['id_berita'].".html";

        ?>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="<?php echo $url_link ?>"><img src="assets/pages/img/photos/<?= $row['gambar'] ?>" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category" ><?= $row['nama_kategori'] ?></h6>
                </div>
              </div>
              <h3 class="card-title"><a href="<?php echo $url_link ?>"><?= $row['judul_berita'] ?></a></h3>
              <p class="card-description">
                <?= substr($row['isi'], 0, 100)  ?> ...
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="img/avatar-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author"><?= $row['penulis'] ?></span>
                </a>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span>&nbsp; <?= $row['tgl'] ?>
              </div>
            </div>
          </div>
        </div>
        <?php }} ?>
        <div class="col-md-12">
            <?php echo $per_page_html; ?>
          </form>
          <hr>
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
  <!-- Load file ajax.js yang ada di folder js -->
  <script src="js/ajax.js"></script>

</body>
</html>
