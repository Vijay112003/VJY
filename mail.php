<?php
use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\Exception;
use phpmailer\phpmailer\SMTP;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if(isset($_POST["send"])){
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username ='vijaywithccet@gmail.com';
$mail->Password ='VIJ@ay!!11';
$mail->SMTPSecure='tls';
$mail->Port=587;
$mail->setFrom($_POST['uemail']);
$mail->addAddress('vijaywithccet@gmail.com');
$mail->isHTML(true);
$mail->Subject=$_POST['sub']."-".$_POST['uname'];
$mail->Body=$_POST['comment'];
$mail->send();
echo"
<script>
alert('Thank you');
document.location.href='index.php';
</script>
";
}
echo"suc";
?>