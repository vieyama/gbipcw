<?php
	$database_username = 'root';
	$database_password = '';

	$koneksi=mysqli_connect("localhost","root","","db_gbipwc");
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=db_gbipwc', $database_username, $database_password );

?>
