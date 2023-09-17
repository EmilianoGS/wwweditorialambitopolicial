<?php

include("ejdatabase.php");
$conexion=mysqli_connect($host,$user,$pw,$db);
$mails=mysqli_query($conexion,("SELECT email FROM suscriptores"));

 while ($row = $mails->fetch_assoc()) {


$destino=$row['email'];

    require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');

$correo = new PHPMailer();

$correo->IsSMTP();

$correo->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$correo->SMTPAuth=true;

$correo->SMTPSecure='tls';

$correo->Host='c1851270.ferozo.com';

$correo->Port=25;

$correo->Username='jclasalvia@editorialambitopolicial.com';

$correo->Password='Ms02031941';

$correo->SetFrom('no-reply@c1851270.ferozo.com', 'Editorial Ambito Policial');

$correo->AddReplyTo('jclasalvia@editorialambitopolicial.com',"Editorial Ambito Policial");

$correo->AddAddress($destino);

$correo->Subject="Suscripcion";

$correo->MsgHTML("<h1>Revista Ambito Policial. Archivo adjunto para descarga. Le estaremos enviando por este medio las <strong>últimas publicaciones</strong></h1>");

$correo->AddAttachment("Ambito_Policial_Dic2020_DIGITAL.pdf");



 if(!$correo->Send()) {


  echo "Hubo un error: " . $correo->ErrorInfo;
  

} else {

  echo('Se envió correo a: '.$destino);
  
}

  
} 

?>