<!DOCTYPE html>
<html>
	<head>
		<script src="admin/assets/js/plugins/sweetalert2/es6-promise.auto.min.js"></script>
		<script src="admin/assets/js/plugins/sweetalert2/sweetalert2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="admin/assets/js/plugins/sweetalert2/sweetalert2.min.css">
	</head>
</html>
<?php

include("all-koneksi.php");

function antiinjection($data){
	$filter_sql = stripcslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
		return $filter_sql;
}

  $judul = antiinjection($_POST['judul']);
	$tgl = antiinjection($_POST['tgl']);
	$penulis = antiinjection($_POST['penulis']);
	$isi = antiinjection($_POST['isi']);
	$kategori = antiinjection($_POST['kategori']);

	$target_dir = "assets/pages/img/photos/";
	$target_file = $target_dir . basename($_FILES["foto"]["name"]);
	$fotobaru = $_FILES["foto"]["name"];

	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


	// gambar 1
	$check = getimagesize($_FILES["foto"]["tmp_name"]);
	if($check !== false) {
			$uploadOk = 1;
	} else {
		echo '<script language="javascript">swal("Simpan gagal!", "File bukan gambar", "warning").then(() => { window.location="daftar-berita"; });</script>';
			$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["foto"]["size"] > 2000000) {
		echo '<script language="javascript">swal("Simpan gagal!", "Gambar tidak boleh lebih dari 2MB", "warning").then(() => { window.location="daftar-berita"; });</script>';
			$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
		echo '<script language="javascript">swal("Simpan gagal!", "Gambar hanya boleh berupa JPG, PNG atau JPEG", "warning").then(() => { window.location="daftar-berita"; });</script>';
			$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo '<script language="javascript">swal("Simpan gagal!", "Foto gagal diupload!", "warning").then(() => { window.location="daftar-berita"; });</script>';
	// if everything is ok, try to upload file
	} else {
			if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
			} else {
				echo '<script language="javascript">swal("Simpan gagal!", "Foto gagal diupload!", "warning").then(() => { window.location="daftar-berita"; });</script>';
			}
	}

    $qy_simpan = mysqli_query($koneksi, "INSERT INTO berita (judul_berita, tanggal, isi, penulis, gambar, kategori_info)
    VALUES ('$judul','$tgl','$isi','$penulis','$fotobaru','$kategori')");
		
    if ($qy_simpan) {
      echo '<script type="text/javascript">swal("Simpan Berhasil","Data Berita Tersimpan !", "success").then(() => {window.location="daftar-berita";});</script>';
    }else{
		  echo '<script type="text/javascript">swal("Simpan Gagal","Data Gagal Tersimpan !", "error").then(() => {window.location="daftar-berita";});</script>';
    }

?>
