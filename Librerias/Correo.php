<?php
$destino = "xtakadogsx@gmail.com";
$nombre = $_POST["Nombre"];
$Telefono = $_POST["Telefono"];
$Correo = $_POST["Email"];
$Mensaje = $_POST["Mensaje"];

$Contenido = "Nombre: " .$nombre. "\nCorreo: " . $Correo. "\nTelefono: " .$Telefono. "\nMensaje: " .$Mensaje;
mail($destino,"Buzon de sugerencias",$Contenido);
header("Location:..\Paginas\Contacto.php");

?>