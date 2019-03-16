<?php
include('all-koneksi.php');

// Cek apakah terdapat data page pada URL
$page = (isset($_POST['page']))? $_POST['page'] : 1;

$limit = 3; // Jumlah data per halamannya

// Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
$limit_start = ($page - 1) * $limit;

// Cek apakah variabel data search tersedia
// Artinya cek apakah user telah mengklik tombol search atau belum
if(isset($_POST['search']) && $_POST['search'] == true){ // Jika ada data search yg dikirim (user telah mengklik tombol search) dan search sama dengan true
  // variabel $keyword ini berasal dari file search.php,
  // dimana isinya adalah apa yang diinput oleh user pada textbox pencarian
  $param = '%'.mysqli_real_escape_string($koneksi, $keyword).'%';

  // Buat query untuk menampilkan data siswa berdasarkan NIS / Nama / Jenis Kelamin / Telp / Alamat
  // dan sesuai limit yang ditentukan
  $sql = mysqli_query($koneksi, "SELECT *, date_format(tanggal, '%d - %M -  %Y') as tgl FROM berita WHERE judul_berita LIKE '".$param."' OR tanggal LIKE '".$param."' OR isi LIKE '".$param."' OR penulis LIKE '".$param."' AND kategori_info = '1' LIMIT ".$limit_start.",".$limit);

  // Buat query untuk menghitung semua jumlah data
  // dengan keyword yang telah di input
  $sql2 = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM berita WHERE judul_berita LIKE '".$param."' OR tanggal LIKE '".$param."' OR isi LIKE '".$param."' OR penulis LIKE '".$param."' AND kategori_info = '1'");
  $get_jumlah = mysqli_fetch_array($sql2);
}else{ // Jika user belum mengklik tombol search (PROSES TANPA AJAX)
  // Buat query untuk menampilkan semua data siswa
  $sql = mysqli_query($koneksi, "SELECT *, date_format(tanggal, '%d - %M -  %Y') as tgl FROM berita WHERE kategori_info = '1' LIMIT ".$limit_start.",".$limit);

  // Buat query untuk menghitung semua jumlah data
  $sql2 = mysqli_query($koneksi, "SELECT *, COUNT(*) AS jumlah FROM berita WHERE kategori_info = '1'");
  $get_jumlah = mysqli_fetch_array($sql2);
}

while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
$url_link = "berita-".$data['id_berita'].".html";
 ?>
<div class="col-md-4">
  <div class="card card-blog">
    <div class="card-img">
        <a href="<?php echo $url_link ?>"><img src="assets/pages/img/photos/<?= $data['gambar'] ?>" alt="" class="img-fluid"></a>
    </div>
    <div class="card-body">
      <div class="card-category-box">
        <div class="card-category">
          <h6 class="category"><?= $data['kategori_info'] ?></h6>
        </div>
      </div>
      <h3 class="card-title"><a href="<?php echo $url_link ?>"><?= $data['id_berita'] ?><?= $data['judul_berita'] ?></a></h3>
      <p class="card-description">
        <?= substr($data['isi'], 0, 100)  ?> ...
      </p>
    </div>
    <div class="card-footer">
      <div class="post-author">
        <a href="#">
          <img src="img/avatar-2.jpg" alt="" class="avatar rounded-circle">
          <span class="author"><?= $data['penulis'] ?></span>
        </a>
      </div>
      <div class="post-date">
        <span class="ion-ios-clock-outline"></span> <?= $data['tanggal'] ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
<ul class="pagination">
	<!-- LINK FIRST AND PREV -->
	<?php
	if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
	?>
		<li class="disabled"><a href="#">First</a></li>
		<li class="disabled"><a href="#">&laquo;</a></li>
	<?php
	}else{ // Jika page bukan page ke 1
		$link_prev = ($page > 1)? $page - 1 : 1;
	?>
		<li><a href="javascript:void(0);" onclick="searchWithPagination(1, false)">First</a></li>
		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_prev; ?>, false)">&laquo;</a></li>
	<?php
	}
	?>

	<!-- LINK NUMBER -->
	<?php
	$jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
	$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
	$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
	$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number

	for($i = $start_number; $i <= $end_number; $i++){
		$link_active = ($page == $i)? ' class="active"' : '';
	?>
		<li<?php echo $link_active; ?>><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $i; ?>, false)"><?php echo $i; ?></a></li>
	<?php
	}
	?>

	<!-- LINK NEXT AND LAST -->
	<?php
	// Jika page sama dengan jumlah page, maka disable link NEXT nya
	// Artinya page tersebut adalah page terakhir
	if($page == $jumlah_page){ // Jika page terakhir
	?>
		<li class="disabled"><a href="#">&raquo;</a></li>
		<li class="disabled"><a href="#">Last</a></li>
	<?php
	}else{ // Jika Bukan page terakhir
		$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
	?>
		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_next; ?>, false)">&raquo;</a></li>
		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $jumlah_page; ?>, false)">Last</a></li>
	<?php
	}
	?>
</ul>
