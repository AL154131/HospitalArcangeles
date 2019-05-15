<?php
	if(!isset($_POST['especialidad'])) {
		header('Location: ../');
	}
	include('Conexion.php');

	$especialidad = $_POST['especialidad'];

	$consultaNombreMedicos = "SELECT m.nombre FROM medicos m , especialidades e 
								WHERE m.especialidad = e.id AND e.nombre = '$especialidad'";
	$resultado = $mysqli -> query($consultaNombreMedicos);

	$codigoHtml = "";


	while ($fila = $resultado -> fetch_assoc()) {
		$codigoHtml = $codigoHtml . "<option>" . $fila['nombre'] . "</option>";
	}
	$mysqli -> close();
	echo $codigoHtml;
?>