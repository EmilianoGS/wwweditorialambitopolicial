<?php
include("ejdatabase.php");
$arrayImagen=[];
$conexion=mysqli_connect($host,$user,$pw,$db);
$imagen=mysqli_query($conexion,("SELECT * FROM imagenes"));
while($row=$imagen->fetch_assoc()){
    array_push($arrayImagen, base64_encode($row['imagen']));
    // echo "<img src='data:image/jpg;base64,".base64_encode($row['imagen'])."'/>";
}

echo "<img height='300' src='data:image/jpg;base64,".$arrayImagen[6]."'/>";
?>