

<?php 
echo "hola";

 require_once('class.phpmailer.php');
$mail = new PHPMailer();
//indico a la clase que use SMTP
$mail­>IsSMTP();
//permite modo debug para ver mensajes de las cosas que van ocurriendo
$mail­>SMTPDebug = 2;
//Debo de hacer autenticación SMTP
$mail­>SMTPAuth = true;
$mail­>SMTPSecure = "ssl";
//indico el servidor de Gmail para SMTP
$mail­>Host = "smtp.gmail.com";
//indico el puerto que usa Gmail
$mail­>Port = 465;
//indico un usuario / clave de un usuario de gmail
$mail­>Username = "ezequielbrrt@gmail.com";
$mail­>Password = "adrian15";
$mail­>SetFrom('ezequielbrrt@gmail.com', 'Ezequiel Barreto');
$mail­>AddReplyTo("ezequielbrrt@gmail.com","Ezequiel Barreto");
$mail­>Subject = "Envío de email usando SMTP de Gmail";
$mail­>MsgHTML("Hola que tal, esto es el cuerpo del mensaje!");
//indico destinatario
$address = "5215530505025@itelcel.com";
$mail­>AddAddress($address, "Ezequiel");
if(!$mail­>Send()) {
echo "Error al enviar: " . $mail­>ErrorInfo;
} else {
echo "Mensaje enviado!";
}

 ?>