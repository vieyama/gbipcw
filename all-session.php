<!DOCTYPE html>
<html>
	<head>
		<script src="admin/assets/js/plugins/sweetalert2/es6-promise.auto.min.js"></script>
		<script src="admin/assets/js/plugins/sweetalert2/sweetalert2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="admin/assets/js/plugins/sweetalert2/sweetalert2.min.css">
	</head>
</html>
<?php
  if(empty($_SESSION['username'])){
    echo '<script type="text/javascript">swal("Akses Di Tolak","", "error").then(() => {window.location="beranda";});</script>';
    exit;
  }

 ?>
