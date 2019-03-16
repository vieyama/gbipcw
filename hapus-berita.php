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

	$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM berita WHERE id_berita = '$id'"));
	if (is_file("assets/pages/img/photos/".$data['gambar']))
		unlink("assets/pages/img/photos/".$data['gambar']);



  $qy= mysqli_query($koneksi, "DELETE FROM berita WHERE id_berita='$id'");

	if ($qy)
	{

			echo '<script type="text/javascript">swal("Hapus Berhasil","Data berita Terhapus !", "success").then(() => {window.location="daftar-berita";});</script>';




	}else{

		echo '<script type="text/javascript">swal("Hapus Gagal","Silahkan Cek Lagi !", "error").then(() => {window.location="daftar-berita";});</script>';


	}


?>
