<?php
include("ejdatabase.php");
$conexion=mysqli_connect($host,$user,$pw,$db);
$nombre=$_POST['nombre'];
$imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));       
$query= "INSERT INTO imagenes(nombre,imagen) VALUES ('$nombre','$imagen')";
$resultado=$conexion->query($query);
if ($resultado){
    echo "Se subió correctamente la imagen";
}
else{
    echo "No se pudo subir correctamente la imagen";
}

?>