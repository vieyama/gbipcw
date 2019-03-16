<?php
session_start();
include('all-session.php');
include('all-koneksi.php');
$user = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$_SESSION[username]'"));

 ?>
 <!doctype html>
 <!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
 <!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

         <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

         <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
         <meta name="author" content="pixelcave">
         <meta name="robots" content="noindex, nofollow">

         <!-- Open Graph Meta -->
         <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
         <meta property="og:site_name" content="Codebase">
         <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
         <meta property="og:type" content="website">
         <meta property="og:url" content="">
         <meta property="og:image" content="">

         <!-- Icons -->
         <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
         <link rel="shortcut icon" href="admin/assets/img/favicons/favicon.png">
         <link rel="icon" type="image/png" sizes="192x192" href="admin/assets/img/favicons/favicon-192x192.png">
         <link rel="apple-touch-icon" sizes="180x180" href="admin/assets/img/favicons/apple-touch-icon-180x180.png">
         <!-- END Icons -->

         <!-- Stylesheets -->
         <!-- Codebase framework -->
         <link rel="stylesheet" id="css-main" href="admin/assets/css/codebase.min.css">
         <link rel="stylesheet" href="admin/assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

         <link rel="stylesheet" href="admin/assets/js/plugins/simplemde/css/simplemde.min.css">



         <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
         <!-- <link rel="stylesheet" id="css-theme" href="admin/assets/css/themes/flat.min.css"> -->
         <!-- END Stylesheets -->
     </head>
     <body>
