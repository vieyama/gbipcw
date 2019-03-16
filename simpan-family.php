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
  $nama = antiinjection($_POST['nama']);


    $qy_simpan = mysqli_query($koneksi, "INSERT INTO family (id_family, nama_family) VALUES ('$id','$nama')");
    if ($qy_simpan){
		echo '<script type="text/javascript">swal("Simpan Berhasil","berhasil !", "success").then(() => {window.location="daftar-family";});</script>';
  	}else{
    echo '<script type="text/javascript">swal("Simpan gagal","gagal !", "error").then(() => {window.location="daftar-family";});</script>';
    }


?>
