<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<?php include('all-koneksi.php'); ?>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic One Page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/pages/css/animate.css" rel="stylesheet">
<link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
<link href="assets/plugins/cubeportfolio/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="assets/onepage2/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/onepage2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-on-scroll" class to the body element to set fixed header layout -->
<body class="page-header-fixed">

	<!-- BEGIN MAIN LAYOUT -->
	<!-- Header BEGIN -->
    <header class="page-header">
        <nav class="navbar navbar-fixed-top" style="background:#fff" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                    <a class="navbar-brand" href="#intro">
                        <img class="logo-default" src="assets/onepage2/img/logo_scroll.png" alt="Logo">
                        <img class="logo-scroll" src="assets/onepage2/img/logo_scroll.png" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav">
                        <li class="page-scroll">
                            <a href="beranda#intro">Home</a>
                        </li>
                        <li class="page-scroll">
                            <a href="beranda#about">About</a>
                        </li>
                        <li class="page-scroll active">
                            <a href="#features">Features</a>
                        </li>
                        <li class="page-scroll">
                            <a href="beranda#team">Team</a>
                        </li>
                        <li class="page-scroll">
                            <a href="beranda#clients">Clients</a>
                        </li>
                        <li class="page-scroll">
                            <a href="beranda#portfolio">Portfolio</a>
                        </li>
                        <li class="page-scroll">
                            <a href="beranda#pricing">Pricing</a>
                        </li>
                        <li class="page-scroll">
                            <a href="beranda#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- End Navbar Collapse -->
            </div>
            <!--/container-->
        </nav>
    </header>
    <!-- Header END -->

    <!-- BEGIN MAIN LAYOUT -->
    <div class="page-content">
        <!-- BEGIN FEATURES SECTION -->
        <section id="features">
            <!-- Features BEGIN -->
            <div class="features-bg">
                <div class="container">
                    <div class="heading">
                        <h2><strong>Metronics</strong> Main Features</h2>
                        <p>To try the most advanced business</p>
                    </div><!-- //end heading -->

                    <!-- Features -->
                    <div class="row margin-bottom-70">
                      <?php
                      $qy_post = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 4");
                      while ($a = mysqli_fetch_array($qy_post)) {
                       ?>
                        <div class="col-md-6 md-margin-bottom-70" style="margin-bottom:40px;">
                            <div class="features">
                                <img src="assets/pages/img/photos/<?= $a['gambar'] ?>" style="width:280px" alt="">
                                <div class="features-in">
                                    <h3><a href="#"><?= $a['judul_berita'] ?></a></h3>
                                    <p><?= substr($a['isi'], 0 ,100); ?>......</p>
                                </div>
                            </div>
                        </div>
                       <?php } ?>

                    </div><!-- //end row -->

                </div>
            </div>
            <!-- Features END -->
        </section>
        <!-- END FEATURES SECTION -->


        <!-- BEGIN CONTACT SECTION -->
        <section id="contact">

            <!-- Footer Coypright -->
            <div class="footer-copyright">
                <div class="container">
                    <h3>Metronic</h3>
                    <ul class="copyright-socials">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <P>Designed with love by <a href="http://www.keenthemes.com/">KeenThemes</a></P>
                </div>
            </div>
            <!-- End Footer Coypright -->
        </section>
        <!-- END CONTACT SECTION -->
    </div>
    <!-- END MAIN LAYOUT -->
    <a href="#intro" class="go2top"><i class="fa fa-arrow-up"></i></a>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/plugins/jquery.easing.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.parallax.js" type="text/javascript"></script>
<script src="assets/plugins/smooth-scroll/smooth-scroll.js" type="text/javascript"></script>
<script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
<!-- BEGIN CUBEPORTFOLIO -->
<script src="assets/plugins/cubeportfolio/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="assets/onepage2/scripts/portfolio.js" type="text/javascript"></script>
<!-- END CUBEPORTFOLIO -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/onepage2/scripts/layout.js" type="text/javascript"></script>
<script src="assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Layout.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
