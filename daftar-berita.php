<?php
include "header-admin.php";
include "format-tanggal.php";

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
                            <a class="link-effect font-w700" href="dashboard">
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
                          <a class="" href="dashboard-admin"><i class="si si-compass"></i>Dashboard</a>
                      </li>
                      <li>
                          <a class="active" href="daftar-berita"><i class="si si-compass"></i>Daftar Berita</a>
                      </li>
                      <li>
                          <a class="" href="daftar-family"><i class="si si-compass"></i>Daftar Family</a>
                      </li>
                      <li>
                          <a class="" href="daftar-user"><i class="si si-compass"></i>Daftar User</a>
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
                    <a class="link-effect font-w700 mr-5" href="dashboard">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Left Section -->

            <!-- Middle Section -->
            <div class="content-header-section d-none d-lg-block">
                <!-- Header Navigation -->


                <ul class="nav-main-header">
                    <li>
                        <a class="" href="dashboard-admin"><i class="si si-compass"></i>Dashboard</a>
                    </li>
                    <li>
                        <a class="active" href="daftar-berita"><i class="si si-compass"></i>Daftar Berita</a>
                    </li>
                    <li>
                        <a class="" href="daftar-family"><i class="si si-compass"></i>Daftar Family</a>
                    </li>
                    <li>
                        <a class="" href="daftar-user"><i class="si si-compass"></i>Daftar User</a>
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
                                              <?= $user['nama_user']; ?><i class="fa fa-angle-down ml-5"></i>
                                          </button>
                                          <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                                              <a class="dropdown-item" href="be_pages_generic_profile.html">
                                                  <i class="si si-user mr-5"></i> Profile
                                              </a>


                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item" href="keluar">
                                                  <i class="si si-logout mr-5"></i> Sign Out
                                              </a>
                                          </div>
                                      </div>
                                      <!-- END User Dropdown -->


                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
                <!-- END Toggle Sidebar -->
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

                  <!-- Dynamic Table Full -->
                 <div class="block">
                     <div class="block-header block-header-default">
                         <h3 class="block-title">Daftar Berita <small></small></h3>
                         <button type="button" class="btn btn-md btn-outline-primary" data-toggle="modal" data-target="#modal-fadein">Tambah Berita</button>
                     </div>
                     <div class="block-content block-content-full">
                         <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                         <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                             <thead>
                                 <tr>
                                     <th class="text-center"></th>
                                     <th>Judul Berita</th>
                                     <th>Tanggal Berita</th>
                                     <th>Isi Berita</th>
                                     <th>Penulis Berita</th>
                                     <th>Kategori</th>
                                     <th width="15px"></th>
                                     <th width="15px"></th>
                                     <th width="15px"></th>
                                 </tr>
                             </thead>
                             <tbody>
                                <?php
                                $no = 1;
                                $qy_family = mysqli_query($koneksi, "SELECT * FROM berita, kategori_info WHERE berita.kategori_info
                                  = kategori_info.kode_info ORDER BY berita.id_berita DESC");
                                while ($a = mysqli_fetch_array($qy_family)) {
                                 ?>
                                 <tr>
                                     <td class="text-center"><?= $no; ?></td>
                                     <td class="font-w600"><?= $a['judul_berita']; ?></td>
                                     <td class="d-none d-sm-table-cell"><?= indonesian_date($a['tanggal']); ?></td>
                                     <td class="d-none d-sm-table-cell"><?= substr($a['isi'], 0, 50); ?></td>
                                     <td class="d-none d-sm-table-cell"><?= $a['penulis']; ?></td>
                                     <td class="d-none d-sm-table-cell"><?= $a['nama_kategori']; ?></td>
                                     <td class="d-none d-sm-table-cell">
                                         <form class="" action="lihat-berita" method="post">
                                           <input type="hidden" name="id" value="<?= $a['id_berita']; ?>">
                                           <button type="submit" class="btn btn-md btn-secondary" data-toggle="tooltip" title="View" name="button">
                                             <i class="si si-eye"></i>
                                           </button>
                                         </form>
                                     </td>
                                     <td class="d-none d-sm-table-cell">
                                         <form class="" action="edit-berita" method="post">
                                           <input type="hidden" name="id" value="<?= $a['id_berita']; ?>">
                                           <button type="submit" class="btn btn-md btn-secondary" data-toggle="tooltip" title="Edit" name="button">
                                             <i class="si si-note"></i>
                                           </button>
                                         </form>
                                     </td>
                                     <td class="d-none d-sm-table-cell">
                                       <form class="" action="hapus-berita.php" method="post">
                                         <input type="hidden" name="id" value="<?= $a['id_berita']; ?>">
                                         <button type="submit" class="btn btn-md btn-secondary" data-toggle="tooltip" title="Hapus" name="button">
                                           <i class="si si-trash"></i>
                                         </button>
                                       </form>
                                     </td>
                                 </tr>
                               <?php $no++; } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <!-- END Dynamic Table Full -->

                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
<?php include "footer-admin.php"; ?>
<!-- Fade In Modal -->
        <div class="modal fade" id="modal-fadein" tabindex="-1" role="dialog" aria-labelledby="modal-fadein" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <form action="simpan-berita.php" method="post" enctype="multipart/form-data">

                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Terms &amp; Conditions</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">

                            <div class="form-group row">
                              <div class="col-md-12">
                                <div class="form-material">
                                  <input type="text" class="form-control" id="material-text" name="judul" placeholder="Masukan Judul Berita" required>
                                  <label for="material-text">Judul Berita</label>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-md-12">
                                <div class="form-material">
                                  <select class="form-control" name="kategori">
                                    <?php $k = mysqli_query($koneksi, "SELECT * FROM kategori_info");
                                      while ($kategori = mysqli_fetch_array($k)) {


                                     ?>
                                    <option value="<?= $kategori['kode_info']; ?>"><?= $kategori['nama_kategori']; ?></option>
                                  <?php } ?>
                                  </select>
                                  <label for="material-text">Kategori</label>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-md-12">
                                <div class="form-material">
                                  <input type="date" class="form-control" id="material-text" name="tgl" placeholder="Masukan Tanggal Berita" required>
                                  <label for="material-text">Tanggal Berita</label>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-12">
                              <!-- CKEditor Container -->
                                <textarea id="" class="form-control" name="isi" placeholder="Masukan isi berita" required></textarea>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-md-12">
                                <div class="form-material">
                                  <input type="text" class="form-control" id="material-text" name="penulis" placeholder="Masukan Penulis Berita" required>
                                  <label for="material-text">Penulis Berita</label>
                                </div>
                              </div>
                            </div>

                            <div class="form-group row">
                              <div class="col-md-12">
                                <div class="form-material">
                                  <input type="file" accept="image/*" name="foto" class="form-control" required/>
                                  <label for="material-text">Gambar Berita</label>
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-alt-success">
                            <i class="fa fa-check"></i> Simpan
                        </button>
                    </div>

                  </form>
                </div>
            </div>
        </div>
        <!-- END Fade In Modal -->
