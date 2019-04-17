<?php
	session_start();
	require '../Librerias/Fpdf/fpdf.php'; 
	require '../Librerias/Conexion.php';

	$consultaCitas = "SELECT * FROM citas WHERE id = " . $_SESSION['idCita'];
	$resultado = $mysqli -> query($consultaCitas);
	$datosPaciente = $resultado -> fetch_assoc();


	$consultaMedico = "SELECT nombre, especialidad, consultorio, telefono FROM medicos  
						WHERE id = " . $datosPaciente['idMedico'];
	$resultado = $mysqli -> query($consultaMedico);
	$datosMedico = $resultado -> fetch_assoc();

	class PDF extends FPDF
	{
		function Header()
		{
		    // Logo
		    $this -> Image('../Imagenes/HeaderPdf.png');
		    $this -> Ln(10);
		}
		function Footer() 
		{
		    $this -> Image('../Imagenes/FooterPdf.png');
		}
	}

	$pdf = new PDF('P', 'mm', 'A4');
	$pdf -> AddPage();
	$pdf->SetMargins(50, 25);
	$pdf -> SetFont('Helvetica', '', 12);
 
	$pdf -> Cell(45,5,'Tu cita ha quedado registrada, presenta este formato el dia y la hora indicada',0,1,'L');
	$pdf -> Ln(10);

	$pdf -> SetFont('Helvetica', 'B', 10);
	$pdf -> Cell(45, 10, 'Numero de cita:', 1, 0, 'L');
	$pdf -> SetFont('Helvetica', '', 10);
	$pdf -> Cell(65, 10, $datosPaciente['id'], 1, 1, 'L');

	$pdf -> SetFont('Helvetica', 'B', 10);
	$pdf -> Cell(45, 10, 'Nombre: ', 1, 0, 'L');
	$pdf -> SetFont('Helvetica', '', 10);
	$pdf -> Cell(65, 10, $datosPaciente['nombrePaciente'], 1, 1, 'L');

	$pdf -> SetFont('Helvetica', 'B', 10);
	$pdf -> Cell(45, 10, 'Telefono: ', 1, 0, 'L');
	$pdf -> SetFont('Helvetica', '', 10);
	$pdf -> Cell(65, 10, $datosPaciente['telefonoPaciente'], 1, 1, 'L');

	$pdf -> SetFont('Helvetica', 'B', 10);
	$pdf -> Cell(45, 10, 'Fecha: ', 1, 0, 'L');
	$pdf -> SetFont('Helvetica', '', 10);
	$pdf -> Cell(65, 10, $datosPaciente['fecha'], 1, 1, 'L');

	$pdf -> SetFont('Helvetica', 'B', 10);
	$pdf -> Cell(45, 10, 'Medico: ', 1, 0, 'L');
	$pdf -> SetFont('Helvetica', '', 10);
	$pdf -> Cell(65, 10, $datosMedico['nombre'], 1, 1, 'L');

	$pdf -> SetFont('Helvetica', 'B', 10);
	$pdf -> Cell(45, 10, 'Especialidad: ', 1, 0, 'L');
	$pdf -> SetFont('Helvetica', '', 10);
	$pdf -> Cell(65, 10, $datosMedico['especialidad'], 1, 1, 'L');

	$pdf -> SetFont('Helvetica', 'B', 10);
	$pdf -> Cell(45, 10, 'Numero de consultorio: ', 1, 0, 'L');
	$pdf -> SetFont('Helvetica', '', 10);
	$pdf -> Cell(65, 10, $datosMedico['consultorio'], 1, 1, 'L');

	$pdf -> SetFont('Helvetica', 'B', 10);
	$pdf -> Cell(45, 10, 'Telefono del consultorio: ', 1, 0, 'L');
	$pdf -> SetFont('Helvetica', '', 10);
	$pdf -> Cell(65, 10, $datosMedico['telefono'], 1, 1, 'L');

	session_destroy();
	$mysqli -> close();

	$pdf -> Ln(20);
	$pdf -> SetX(70);
	$pdf -> Output("D", "HospitalArcangelesCita.pdf");

?>