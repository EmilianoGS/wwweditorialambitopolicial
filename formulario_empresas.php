<?php


$destino=$_POST['email'];
$nombre=$_POST['nombre'];
$razonSocial=$_POST['razonSocial'];
$domicilio=$_POST['domicilio'];
if(isset($_POST['piso'])){
    $piso=$_POST['piso'];
}
$provincia=$_POST['provincia'];
$localidad=$_POST['localidad'];
$codigopostal=$_POST['codigopostal'];
$telefono=$_POST['telefono'];
$fecha=date("Y-m-d\TH-i");


include("ejdatabase.php");
$conexion=mysqli_connect($host,$user,$pw,$db);
$nuevo_usuario=mysqli_query($conexion,("SELECT * FROM suscriptores_empresas WHERE email='$destino'"));
if (mysqli_num_rows($nuevo_usuario)>0){
   header("Location: formulario_empresasHTML.php?suscr=0#yasuscripto");
}
else{
mysqli_query($conexion,("INSERT INTO suscriptores_empresas VALUES(default, '$nombre','$razonSocial','$domicilio','$piso', '$provincia', '$localidad', '$codigopostal','$telefono','$destino', '$fecha')"));

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

$correo->Host='mail.editorialambitopolicial.com';

$correo->Port=25;

$correo->Username='administracion@editorialambitopolicial.com';

$correo->Password='Juan1941';

$correo->SetFrom('no-reply@editorialambitopolicial.com', 'Editorial Ambito Policial');

$correo->AddReplyTo('jclasalvia@editorialambitopolicial.com',"Editorial Ambito Policial");

$correo->AddAddress($destino);

$correo->IsHTML(true);

$correo->Subject="Suscripcion Revista Ambito Policial";

$msg="<h1>Revista Ambito Policial</h1><br/><h3>Ud. se ha suscripto a la revista Ambito Policial version impresa con los siguientes datos:</h3>
<p>
  <strong>Nombre: </strong>".$nombre."<br/>
  <strong>Razon Social: </strong>".$razonSocial.
  "<br/><strong>Domicilio: </strong>".$domicilio.
  "<br/><strong>Piso/Dpto/Oficina: </strong>".$piso.
  "<br/><strong>Provincia: </strong>".$provincia.
  "<br/><strong>Localidad: </strong>".$localidad.
  "<br/><strong>Codigo Postal: </strong>".$codigopostal.
  "<br/><strong>Telefono: </strong>".$telefono.
"</p>
<br/>
<h3>Datos de la cuenta</h3>
<p>CBU: 0110599530000052503329<br/>
CUENTA CAJA DE AHORROS/BANCO NACION Nro. 00020005250332<br/>
CUIT: 20-04362835-7<br/>
RAZON SOCIAL: JUAN CARLOS LASALVIA
</p>

<h3>Luego de realizada la transferencia, por favor, informar al correo <strong>administracion@editorialambitopolicial.com</strong></h3>";

$correo->MsgHTML($msg);





 if(!$correo->Send()) {
  echo "Hubo un error al enviar el correo: " . $correo->ErrorInfo;
} else {

header("Location: index.php?sus=1");
echo "<script>
alert('Se ha suscripto exitosamente')
</script>";
  
}
}





?>