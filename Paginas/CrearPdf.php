<?php
	require '../Librerias/Fpdf/fpdf.php'; 
	require '../Librerias/Conexion.php';
	session_start();
	//echo "HÑola";

	$consultaCitas = "SELECT * FROM citas WHERE id = " . $_SESSION['idCita'];
	$resultado = $mysqli -> query($consultaCitas);
	$datosPaciente = $resultado -> fetch_assoc();

	$consultaMedico = "SELECT nombre, especialidad, consultorio, telefono FROM medicos WHERE  id = " . $_SESSION['idMedico'];
	$resultado = $mysqli -> query($consultaMedico);
	$datosMedico = $resultado -> fetch_assoc();

	$pdf = new FPDF();
	$pdf -> AddPage();
	$pdf -> SetFont('Arial', '', 12);

	$pdf -> Cell(60, 10, 'Numero de cita: ', 1, 0, 'L');
	$pdf -> Cell(100, 10, $datosPaciente['id'], 1, 1, 'L');

	$pdf -> Cell(60, 10, 'Nombre: ', 1, 0, 'L');
	$pdf -> Cell(100, 10, $datosPaciente['nombrePaciente'], 1, 1, 'L');

	$pdf -> Cell(60, 10, 'Telefono: ', 1, 0, 'L');
	$pdf -> Cell(100, 10, $datosPaciente['telefonoPaciente'], 1, 1, 'L');

	$pdf -> Cell(60, 10, 'Fecha: ', 1, 0, 'L');
	$pdf -> Cell(100, 10, $datosPaciente['fecha'], 1, 1, 'L');

	$pdf -> Cell(60, 10, 'Medico: ', 1, 0, 'L');
	$pdf -> Cell(100, 10, $datosMedico['nombre'], 1, 1, 'L');

	$pdf -> Cell(60, 10, 'Especialidad: ', 1, 0, 'L');
	$pdf -> Cell(100, 10, $datosMedico['especialidad'], 1, 1, 'L');

	$pdf -> Cell(60, 10, 'Numero de consultorio: ', 1, 0, 'L');
	$pdf -> Cell(100, 10, $datosMedico['consultorio'], 1, 1, 'L');

	$pdf -> Cell(60, 10, 'Telefono del consultorio: ', 1, 0, 'L');
	$pdf -> Cell(100, 10, $datosMedico['telefono'], 1, 1, 'L');

	$pdf -> Output();
?>