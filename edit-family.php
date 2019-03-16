<?php

include('header-admin.php');
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
                             <a class="link-effect font-w700" href="dashboard-admin">
                                 <i class="si si-fire text-primary"></i>
                                 <span class="font-size-xl text-dual-primary-dark">GBI</span><span class="font-size-xl text-primary">PCW</span>
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
                             <a class="" href="dashboard-admin"><i class="si si-compass"></i>Dashboard</a>
                         </li>
                         <li>
                             <a class="" href="daftar-berita"><i class="si si-compass"></i>Berita</a>
                         </li>
                         <li>
                             <a class="active" href="daftar-family"><i class="si si-compass"></i>Family</a>
                         </li>
                         <li>
                             <a class="" href="daftar-user"><i class="si si-compass"></i>User</a>
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
                 <div class="content-header-item">
                     <a class="link-effect font-w700 mr-5" href="dashboard-admin">
                         <i class="si si-fire text-primary"></i>
                         <span class="font-size-xl text-dual-primary-dark">GBI</span><span class="font-size-xl text-primary">PCW</span>
                     </a>
                 </div>
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



                 <ul class="nav-main-header">
                     <li>
                         <a class="" href="dashboard-admin"><i class="si si-compass"></i>Dashboard</a>
                     </li>
                     <li>
                         <a class="" href="daftar-berita"><i class="si si-compass"></i>Berita</a>
                     </li>
                     <li>
                         <a class="active" href="daftar-family"><i class="si si-compass"></i>Family</a>
                     </li>
                     <li>
                         <a class="" href="daftar-user"><i class="si si-compass"></i>User</a>
                     </li>

                 </ul>


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

                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle" >
                          <i class="fa fa-navicon"></i>
                        </button>



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
                    <div class="row gutters-tiny invisible" data-toggle="appear">
                          <div class="col-md-12">
                            <div class="block">
                              <div class="block-header block-header-default">
                                <h3 class="block-title">Edit Family</h3>

                              </div>

                              <div class="block-content ml-20">

                                <?php
                                  $qy_acak = mysqli_query($koneksi, "SELECT * FROM family WHERE id_family= '$_POST[id]'");
                                  $hasil = mysqli_fetch_array($qy_acak);
                                  ?>

                                <form class="" action="update-family.php" method="post">


                                  <div class="form-group row">
                                    <div class="col-md-4">
                                      <div class="form-material floating">
                                        <input type="hidden" class="form-control" name="id-lama" value="<?= $hasil['id_family']; ?>" readonly>
                                        <input type="text" class="form-control" id="material-help2" name="id" value="<?= $hasil['id_family']; ?>">
                                        <label for="material-help2">ID Family</label>
                                        <div class="form-text text-muted text-right">
                                          Silhakan masukan id family

                                        </div>

                                      </div>

                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-material floating">
                                        <input type="text" class="form-control" id="material-help2" name="nama" value="<?= $hasil['nama_family']; ?>">
                                        <label for="material-help2">Nama Family</label>
                                        <div class="form-text text-muted text-right">
                                          Silhakan masukan nama family

                                        </div>

                                      </div>

                                    </div>

                                    <div class="col-md-4">
                                      <div class="form-material floating ml-30">
                                        <button type="submit" class="btn btn-md btn-outline-primary" name="button">Tambah Family</button>

                                      </div>

                                    </div>

                                  </div>
                                </form>

                              </div>
                            </div>

                          </div>
                    </div>




                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

<?php

include('footer-admin.php');
 ?>
