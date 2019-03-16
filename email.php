<!DOCTYPE html>
<html>
	<head>
		<script src="admin/assets/js/plugins/sweetalert2/es6-promise.auto.min.js"></script>
		<script src="admin/assets/js/plugins/sweetalert2/sweetalert2.min.js"></script>
		<link rel="stylesheet" type="text/css" href="admin/assets/js/plugins/sweetalert2/sweetalert2.min.css">
	</head>
</html>
<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    //Server settings
    // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'client.information33@gmail.com';                 // SMTP username
    $mail->Password = 'information.client33';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $nama);
    $mail->addAddress('yoviefp@gmail.com', 'Information');     // Add a recipient
    $mail->addReplyTo($email, 'Information');
    $mail->Subject = $subject;
    $mail->isHTML(true);
     $mail->Body = "
      Hi,<br><br>
      Berikut pesan yang dikirim oleh ". $nama ." ( ".$email." ) yang berisi : <br>
      " .$message. "

      <br><br><br><br><br> Administrator,<br>

";

if ($mail->send())
{
  echo '<script type="text/javascript">swal("Pesan Terkirim","", "success").then(() => {window.location.replace("beranda#contact");});</script>';
  }else{
    echo '<script type="text/javascript">swal("Pesan Gagal Terkirim","", "error").then(() => {window.location="beranda#contact";});</script>';
}

?>
