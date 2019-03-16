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
  $id = antiinjection($_POST['id']);
	$judul = antiinjection($_POST['judul']);
	$isi = antiinjection($_POST['isi']);
	$penulis = antiinjection($_POST['penulis']);
	$tgl = antiinjection($_POST['tgl']);

	if($_FILES['foto']['name'] |= '')
		{
			$target_dir = "assets/pages/img/photos/";
			$target_file = $target_dir . basename($_FILES["foto"]["name"]);
			$fotobaru = $_FILES["foto"]["name"];

			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// gambar 1
			$check = getimagesize($_FILES["foto"]["tmp_name"]);
			if($check != false) {
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

			// untuk me replace gambar
			$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = '$id'"));
			if (is_file("assets/pages/img/photos/".$data['gambar']))
				unlink("assets/pages/img/photos/".$data['gambar']);

			$qy = mysqli_query($koneksi, "UPDATE berita SET judul_berita = '$judul', isi = '$isi', penulis = '$penulis', tanggal = '$tgl', gambar = '$fotobaru' WHERE id_berita = '$id'");
			if ($qy){
			echo '<script type="text/javascript">swal("Update Berhasil","berhasil !", "success").then(() => {window.location="daftar-berita";});</script>';
			}else{
			echo '<script type="text/javascript">swal("Update gagal","gagal !", "error").then(() => {window.history.back();});</script>';
			}
		}else {
			$qy = mysqli_query($koneksi, "UPDATE berita SET judul_berita = '$judul', isi = '$isi', penulis = '$penulis', tanggal = '$tgl'  WHERE id_berita = '$id'");

			if ($qy){
			echo '<script type="text/javascript">swal("Update Berhasil","berhasil !", "success").then(() => {window.location="daftar-berita";});</script>';
			}else{
			echo '<script type="text/javascript">swal("Update gagal","gagal !", "error").then(() => {window.history.back();});</script>';
			}
		}





?>
