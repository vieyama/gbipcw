<!DOCTYPE html>
<html>
	<head>
		<script src="admin/assets/js/plugins/sweetalert2/es6-promise.auto.min.js"></script>
		<script src="admin/assets/js/plugins/sweetalert2/sweetalert2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="admin/assets/js/plugins/sweetalert2/sweetalert2.min.css">
	</head>
</html>
<?php
session_start();
include("all-koneksi.php");

unset($_SESSION['username']);
session_unset();
session_destroy();
echo '<script type="text/javascript">swal("Logout berhasil","anda telah logout !", "success").then(() => {window.location="beranda";});</script>';




?>
