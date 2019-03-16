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

	$uname = antiinjection($_POST['username']);
	$password = antiinjection($_POST['password']);
	$salt ='apalo';
	$hash = md5($salt.$password);

	$sql=mysqli_query($koneksi, "SELECT * FROM user WHERE username='$uname' AND password='$hash'");
	$r=mysqli_fetch_array($sql);

	$hak = $r['hak_akses'];

	if ($r['username']==$uname and $r['password']==$hash)
	{
		if ($hak=='Admin') {
			session_start();
			$_SESSION['username']=$r['username'];

			echo '<script type="text/javascript">swal("Login Berhasil","Silahkan Masuk !", "success").then(() => {window.location="dashboard-admin";});</script>';

		} else {
			session_start();
			$_SESSION['username']=$r['username'];

			echo '<script type="text/javascript">swal("Login Berhasil","Silahkan Masuk !", "success").then(() => {window.location="beranda";});</script>';

		}


	}else{

		echo '<script type="text/javascript">swal("Login Gagal","Silahkan Cek Lagi !", "error").then(() => {window.location="masuk";});</script>';


	}


?>
