<?php 
$name =$_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'from:' . mail . "\r\n";
$header . = "X-Mailer: PHP/" . phpversion() . "\r\n";
$header . = "Mime-Version: 1.0 \r\n";
$header . = "Content-Type: text-plain";

$message = "Este pensaje fue enviado por:" . $name . "\r\n";
$message .= "Su e-mail es: " . $mail . "\r\n";
$message .= "Teléfono de contacto:" . $phone . "\r\n";
$message .= "Mensaje:" . $_POST['message'] . "\r\n";
$message .= "Enviado el:" . date('d/m/Y', time());

$para = 't1pe0f.1nf0@gmail.com' ;
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), header);

header("Location: index.hmtl");
?>