<?php
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
	//echo "El id del medico es $idMedico";
	//echo "Fecha = $fecha";

	$consultaInsert = "INSERT INTO citas (nombrePaciente, telefonoPaciente, fecha, idMedico) VALUES
					('$nombrePaciente', '$telefonoPaciente', '$fecha', $idMedico)";
	
	if($mysqli -> query($consultaInsert)) {
		echo "<h1>Felicidades has quedado registrado :)</h1>";
	}
	else {
		echo "<h1>Lo sentimos hubo un error en el registro :(</h1>";
	}
	$mysqli -> close();
	/*
	echo $nombrePaciente . '<br>';
	echo $telefonoPaciente . '<br>';
	echo $fecha . '<br>';
	echo $hora . '<br>';
	echo $nombreMedico . '<br>';
	echo $especialidad . '<br>';		
			*/
?>