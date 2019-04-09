<?php
	session_start();
	$nombrePaciente = $_POST['nombrePaciente'];
	$telefonoPaciente = $_POST['telefonoPaciente'];
	$fecha = $_POST['año'] . "-" . $_POST['mes'] . "-" . $_POST['dia'];
	$hora = $_POST['hora'];
	$nombreMedico = $_POST['nombreMedico'];
	$especialidad = $_POST['especialidad'];

	$fecha = $fecha . " " . "$hora:00" ;

	$consultaIdMedico = "SELECT id from medicos where nombre = '$nombreMedico'";
	$resultado = $mysqli -> query($consultaIdMedico);
	$fila = $resultado -> fetch_assoc();
	$idMedico = $fila['id'];

	$consultaInsert = "INSERT INTO citas (nombrePaciente, telefonoPaciente, fecha, idMedico) VALUES
					('$nombrePaciente', '$telefonoPaciente', '$fecha', $idMedico)";
	
	if($mysqli -> query($consultaInsert)) {
	//echo "<h1>Felicidades has quedado registrado :)</h1>";
	$consultaSelectUltimo = "SELECT id FROM citas ORDER BY id DESC LIMIT 1";
	$resultado = $mysqli -> query($consultaSelectUltimo);
	$fila = $resultado -> fetch_assoc();
	$idCita = $fila['id']; 
	$_SESSION['idMedico'] = $idMedico;
	$_SESSION['idCita'] = $idCita;
	header("Location: CrearPdf.php");
	}
	else {
		echo "<h1>Lo sentimos hubo un error en el registro :(</h1>";
	}
	$mysqli -> close();
?>