<?php
$destino=$_POST['email'];
$nombre=$_POST['nombre'];
$fecha=date("Y-m-d\TH-i");

if(filter_var($destino, FILTER_VALIDATE_EMAIL)){

include("ejdatabase.php");
$conexion=mysqli_connect($host,$user,$pw,$db);
$nuevo_usuario=mysqli_query($conexion,("SELECT * FROM suscriptores WHERE email='$destino'"));
if (mysqli_num_rows($nuevo_usuario)>0){
   header("Location: suscripcion.php?suscr=0");
}else{
mysqli_query($conexion,("INSERT INTO suscriptores VALUES(default, '$nombre', '$destino', '$fecha')"));

require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');

$correo = new PHPMailer();

$correo->IsSMTP();
// $correo->SMTPDebug = 2;
$correo->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$correo->SMTPAuth=true;

// $correo->SMTPSecure='tls';

$correo->SMTPSecure='ssl';

$correo->Host='smtp.hostinger.com';

$correo->Port=465;

$correo->Username='administracion@editorialambitopolicial.com';

$correo->Password='Juan_1941';

$correo->SetFrom('administracion@editorialambitopolicial.com', 'Editorial Ambito Policial');

$correo->AddReplyTo('jclasalvia@editorialambitopolicial.com',"Editorial Ambito Policial");

$correo->AddAddress($destino);

$correo->Subject="Suscripcion";

$correo->IsHTML(true);

$correo->MsgHTML("<h3>Revista Ambito Policial. Archivo adjunto para descarga. Le estaremos enviando por este medio las <strong>últimas publicaciones.</strong></h3>");

$correo->AddAttachment("ambito_marzo-abril_23.pdf");



 if(!$correo->Send()) {


  echo "Hubo un error al enviar el correo: " . $correo->ErrorInfo;
  

} else {

  header("Location: suscripcion.php?suscr=1&email=$destino");
  
}

}
}
else{
	header("Location: suscripcion.php?suscr=2");
}           
?>