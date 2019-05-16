<?php 
	if (!isset($_POST['especialidad'])) {
		header("Location: ../");
	}

	include('../Librerias/Conexion.php');
	$especialidad = $_POST['especialidad'];

	$consultaCosto = "SELECT costoCita FROM especialidades WHERE nombre = '$especialidad'";
	$resultado = $mysqli -> query($consultaCosto);
	$fila = $resultado -> fetch_assoc();
	$costoCita = $fila['costoCita'];
	echo "
	<p><label>Costo de cita: </label></p>
	<input type='text' readonly='true' value=' $ $costoCita'>
	";
?>