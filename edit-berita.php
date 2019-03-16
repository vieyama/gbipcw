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
                             <a class="active" href="daftar-berita"><i class="si si-compass"></i>Berita</a>
                         </li>
                         <li>
                             <a class="" href="daftar-family"><i class="si si-compass"></i>Family</a>
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
                         <a class="active" href="daftar-berita"><i class="si si-compass"></i>Berita</a>
                     </li>
                     <li>
                         <a class="" href="daftar-family"><i class="si si-compass"></i>Family</a>
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
                                <h3 class="block-title">Edit Berita</h3>

                              </div>

                              <div class="block-content ml-20">

                                <?php
                                  $qy_acak = mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita= '$_POST[id]'");
                                  $hasil = mysqli_fetch_array($qy_acak);
                                  ?>

                                  <form action="update-berita.php" method="post" enctype="multipart/form-data">

                                    <div class="block block-themed block-transparent mb-0">

                                        <div class="block-content">

                                            <div class="form-group row">
                                              <div class="col-md-12">
                                                <div class="form-material">
                                                  <input type="hidden" class="form-control" id="material-text" name="id" placeholder="Masukan Judul Berita" required value="<?= $hasil['id_berita']?>">
                                                  <input type="text" class="form-control" id="material-text" name="judul" placeholder="Masukan Judul Berita" required value="<?= $hasil['judul_berita']?>">
                                                  <label for="material-text">Judul Berita</label>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <div class="col-md-12">
                                                <div class="form-material">
                                                  <input type="date" class="form-control" id="material-text" name="tgl" placeholder="Masukan Tanggal Berita" required value="<?= $hasil['tanggal']?>">
                                                  <label for="material-text">Tanggal Berita</label>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <div class="col-12">
                                              <!-- CKEditor Container -->
                                                <textarea id="" class="form-control" name="isi" placeholder="Masukan isi berita" required rows="10" ><?= $hasil['isi']?></textarea>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <div class="col-md-12">
                                                <div class="form-material">
                                                  <input type="text" class="form-control" id="material-text" name="penulis" placeholder="Masukan Penulis Berita" required value="<?= $hasil['penulis']?>">
                                                  <label for="material-text">Penulis Berita</label>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="form-group row">
                                              <div class="col-md-12">
                                                <img src="assets/pages/img/photos/<?= $hasil['gambar']?>" alt="" class="img-fluid">
                                                <div class="form-material">
                                                  <input type="file" accept="image/*" name="foto" class="form-control" value="<?= $hasil['gambar']?>">
                                                  <label for="material-text">Gambar Berita</label>
                                                </div>
                                              </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-alt-secondary" onclick="window.history.back()">Cancel</button>
                                        <button type="submit" class="btn btn-alt-success">
                                            <i class="fa fa-check"></i> Simpan
                                        </button>
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
