<?php 
	if (!isset($_POST['especialidad'])) {
		header("Location: ../");
	}
	session_start();
	include("Conexion.php");
	$descuento = 0;
	if (isset($_SESSION['idUsuario'])) {
		$idUsuario = $_SESSION['idUsuario'];
		$consultaPlan = "SELECT plan FROM usuarios WHERE id= $idUsuario";
		$resultado = $mysqli -> query($consultaPlan);
		$fila = $resultado -> fetch_assoc();
		$idPlan = $fila['plan'];

		$consultaDescuento = "SELECT porcentajeDesc FROM planes WHERE id = $idPlan";
		$resultado = $mysqli -> query($consultaDescuento);
		$fila = $resultado -> fetch_assoc();
		$descuento = $fila['porcentajeDesc'];
	}
	else {
		session_destroy();
	}

	$especialidad = $_POST['especialidad'];

	$consultaCosto = "SELECT costoCita FROM especialidades WHERE nombre = '$especialidad'";
	$resultado = $mysqli -> query($consultaCosto);
	$fila = $resultado -> fetch_assoc();
	$costoCita = $fila['costoCita'] - ($fila['costoCita'] * $descuento);
	$mysqli -> close();
	echo "
	<p><label>Costo de cita: </label></p>
	<input type='text' readonly='true' value=' $ $costoCita.00'>
	";
?>