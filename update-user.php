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
  $email = antiinjection($_POST['email']);
  $id_lama = antiinjection($_POST['id-lama']);
	$nama = antiinjection($_POST['nama']);
	$alamat = antiinjection($_POST['alamat']);
  $hak = antiinjection($_POST['hak']);



    $qy_update = mysqli_query($koneksi, "UPDATE user SET
          nama_user = '$nama',
          username = '$email',
					alamat = '$alamat',
					hak_akses = '$hak'
          WHERE id_user = '$id_lama'");
    if ($qy_update){
		echo '<script type="text/javascript">swal("Update Berhasil","berhasil !", "success").then(() => {window.location="daftar-user";});</script>';
  	}else{
    echo '<script type="text/javascript">swal("Update gagal","gagal !", "error").then(() => {window.location="daftar-user";});</script>';
    }


?>
