<?php
	include('Conexion.php');
	$consultaNombreMedicos = "SELECT nombre from medicos WHERE especialidad = '$_POST[especialidad]'";
	$resultado = $mysqli -> query($consultaNombreMedicos);

	$codigoHtml = "";

	while ($fila = $resultado -> fetch_assoc()) {
		$codigoHtml = $codigoHtml . "<option>" . $fila['nombre'] . "</option>";
	}
	$mysqli -> close();
	echo $codigoHtml;
?>