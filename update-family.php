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
  $id_lama = antiinjection($_POST['id-lama']);
  $nama = antiinjection($_POST['nama']);



    $qy_update = mysqli_query($koneksi, "UPDATE family SET
          id_family = '$id',
          nama_family = '$nama'
          WHERE id_family = '$id_lama'");
    if ($qy_update){
		echo '<script type="text/javascript">swal("Update Berhasil","berhasil !", "success").then(() => {window.location="daftar-family";});</script>';
  	}else{
    echo '<script type="text/javascript">swal("Update gagal","gagal !", "error").then(() => {window.location="daftar-family";});</script>';
    }


?>
