<?php
include('header-admin.php');
$sqli = mysqli_query($koneksi, "SELECT *, count(berita.id_berita) as jml_berita from berita");
$a = mysqli_fetch_array($sqli);
$jml_berita = $a['jml_berita'];

$sqli = mysqli_query($koneksi, "SELECT *, count(family.id_family) as jml_family from family");
$a = mysqli_fetch_array($sqli);
$jml_family = $a['jml_family'];

$sqli = mysqli_query($koneksi, "SELECT *, count(user.id_user) as jml_user from user");
$a = mysqli_fetch_array($sqli);
$jml_user = $a['jml_user'];
 ?>

 <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">
     <!-- Sidebar -->
     <nav id="sidebar">
         <!-- Sidebar Scroll Container -->
         <div id="sidebar-scroll">
             <!-- Sidebar Content -->
             <div class="sidebar-content">
                 <!-- Side Header -->
                 <div class="content-header content-header-fullrow bg-black-op-10">
                     <div class="content-header-section text-center align-parent">
                         <!-- Close Sidebar, Visible only on mobile screens -->
                         <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                         <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                             <i class="fa fa-times text-danger"></i>
                         </button>
                         <!-- END Close Sidebar -->

                         <!-- Logo -->
                         <div class="content-header-item">
                             <a class="link-effect font-w700" href="index.html">
                                 <i class="si si-fire text-primary"></i>
                                 <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                             </a>
                         </div>
                         <!-- END Logo -->
                     </div>
                 </div>
                 <!-- END Side Header -->

                 <!-- Side Main Navigation -->
                 <div class="content-side content-side-full">
                     <!--
                     Mobile navigation, desktop navigation can be found in #page-header

                     If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                     -->
                     <ul class="nav-main">
                         <li>
                             <a class="active" href="bd_dashboard.html"><i class="si si-compass"></i>Dashboard</a>
                         </li>
                         <li class="nav-main-heading">Layout</li>
                         <li>
                             <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                             <ul>
                                 <li>
                                     <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                 </li>
                                 <li>
                                     <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                                 </li>
                                 <li>
                                     <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                                 </li>
                                 <li>
                                     <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                                 </li>
                                 <li>
                                     <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                                 </li>
                                 <li>
                                     <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                                 </li>
                                 <li>
                                     <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                                 </li>
                                 <li>
                                     <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                                 </li>
                                 <li>
                                     <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                                 </li>
                                 <li>
                                     <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                                 </li>
                                 <li>
                                     <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>
                                     <ul>
                                         <li>
                                             <a href="javascript:void(0)">Another Link</a>
                                         </li>
                                         <li>
                                             <a href="javascript:void(0)">Another Link</a>
                                         </li>
                                         <li>
                                             <a href="javascript:void(0)">Another Link</a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-main-heading">Other Pages</li>
                         <li>
                             <a href="bd_search.html"><i class="si si-magnifier"></i>Search</a>
                         </li>
                         <li>
                             <a href="be_pages_dashboard.html"><i class="si si-action-undo"></i>Go Back</a>
                         </li>
                     </ul>
                 </div>
                 <!-- END Side Main Navigation -->
             </div>
             <!-- Sidebar Content -->
         </div>
         <!-- END Sidebar Scroll Container -->
     </nav>
     <!-- END Sidebar -->

     <!-- Header -->
     <header id="page-header">
         <!-- Header Content -->
         <div class="content-header">
             <!-- Left Section -->
             <div class="content-header-section">
                 <!-- Logo -->
                 <!-- <div class="content-header-item">
                     <a class="link-effect font-w700 mr-5" href="dashboard-admin">
                         <i class="si si-fire text-primary"></i>
                         <span class="font-size-xl text-dual-primary-dark">GBI</span><span class="font-size-xl text-primary">PCW</span>
                     </a>
                 </div> -->
                 <!-- END Logo -->
             </div>
             <!-- END Left Section -->

             <!-- Middle Section -->
             <div class="content-header-section d-none d-lg-block">
                 <!-- Header Navigation -->
                 <!--
                 Desktop Navigation, mobile navigation can be found in #sidebar

                 If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                 If your sidebar menu includes headings, they won't be visible in your header navigation by default
                 If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                 -->

                 <!-- Logo -->
                 <div class="content-header-item">
                     <a class="link-effect font-w700 mr-5" href="dashboard-admin">
                         <i class="si si-fire text-primary"></i>
                         <span class="font-size-xl text-dual-primary-dark">GBI</span><span class="font-size-xl text-primary">PCW</span>
                     </a>
                 </div>
                 <!-- END Logo -->

                 <!-- <ul class="nav-main-header">
                     <li>
                         <a class="active" href="bd_dashboard.html"><i class="si si-compass"></i>Dashboard</a>
                     </li>
                     <li>
                         <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                         <ul>
                             <li>
                                 <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                             </li>
                             <li>
                                 <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                             </li>
                             <li>
                                 <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                             </li>
                             <li>
                                 <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                             </li>
                             <li>
                                 <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                             </li>
                             <li>
                                 <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                             </li>
                             <li>
                                 <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                             </li>
                             <li>
                                 <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                             </li>
                             <li>
                                 <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                             </li>
                             <li>
                                 <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                             </li>
                             <li>
                                 <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>
                                 <ul>
                                     <li>
                                         <a href="javascript:void(0)">Another Link</a>
                                     </li>
                                     <li>
                                         <a href="javascript:void(0)">Another Link</a>
                                     </li>
                                     <li>
                                         <a href="javascript:void(0)">Another Link</a>
                                     </li>
                                 </ul>
                             </li>
                         </ul>
                     </li>
                     <li>
                         <a href="bd_search.html"><i class="si si-magnifier"></i>Search</a>
                     </li>
                     <li>
                         <a href="be_pages_dashboard.html"><i class="si si-action-undo"></i>Go Back</a>
                     </li>
                 </ul> -->


                 <!-- END Header Navigation -->
             </div>
             <!-- END Middle Section -->

             <!-- Right Section -->
             <div class="content-header-section">


               <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $user['nama_user'] ?><i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                <a class="dropdown-item" href="be_pages_generic_profile.html">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->

                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="keluar">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->




             </div>
             <!-- END Right Section -->
         </div>
         <!-- END Header Content -->



         <!-- Header Loader -->
         <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
         <div id="page-header-loader" class="overlay-header bg-primary">
             <div class="content-header content-header-fullrow text-center">
                 <div class="content-header-item">
                     <i class="fa fa-sun-o fa-spin text-white"></i>
                 </div>
             </div>
         </div>
         <!-- END Header Loader -->
     </header>
     <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content content-full">
                    <div class="row gutters-tiny invisible mb-30" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-xl-4">
                            <a class="block block-link-rotate block-transparent text-right bg-primary-lighter" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-bag fa-3x text-primary"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-darker" data-toggle="countTo" data-speed="1000" data-to="<?= $jml_berita ?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Berita</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-4">
                            <a class="block block-link-rotate block-transparent text-right bg-primary-lighter" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-wallet fa-3x text-primary"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-darker"><span data-toggle="countTo" data-speed="1000" data-to="<?= $jml_family ?>">0</span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Family</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-4">
                            <a class="block block-link-rotate block-transparent text-right bg-primary-lighter" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-envelope-open fa-3x text-primary"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-primary-darker" data-toggle="countTo" data-speed="1000" data-to="<?= $jml_user ?>">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-primary-dark">Jemaat</div>
                                </div>
                            </a>
                        </div>

                        <!-- END Row #1 -->
                    </div>


                    <div class="row gutters-tiny invisible" data-toggle="appear">
                        <!-- Row #5 -->
                        <div class="col-6 col-md-4 col-xl-4">
                            <a class="block block-link-shadow text-center" href="daftar-berita">
                                <div class="block-content ribbon ribbon-bookmark ribbon-success ribbon-left">
                                    <p class="mt-5">
                                        <i class="si si-envelope-letter fa-3x"></i>
                                    </p>
                                    <p class="font-w600">Daftar Berita</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-4">
                            <a class="block block-link-shadow text-center" href="daftar-family">
                                <div class="block-content">
                                    <p class="mt-5">
                                        <i class="si si-user fa-3x"></i>
                                    </p>
                                    <p class="font-w600">Daftar Family</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-4">
                            <a class="block block-link-shadow text-center" href="daftar-user">
                                <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-left">
                                    <div class="ribbon-box">3</div>
                                    <p class="mt-5">
                                        <i class="si si-bubbles fa-3x"></i>
                                    </p>
                                    <p class="font-w600">Daftar User</p>
                                </div>
                            </a>
                        </div>

                        <!-- END Row #5 -->
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

<?php

include('footer-admin.php');
 ?>
