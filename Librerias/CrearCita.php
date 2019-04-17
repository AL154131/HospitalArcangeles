<?php
	session_start(); 
	include('Conexion.php');
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

	$consultaDisponibilidad = "SELECT id FROM citas WHERE idMedico = $idMedico AND fecha = '$fecha'";
	$resultado = $mysqli -> query($consultaDisponibilidad);
	$numeroFilas = $resultado -> num_rows;
	
	// Si NO hay una cita con la fecha y el medico indicado
	if($numeroFilas == 0) {
		$consultaInsert = "INSERT INTO citas (nombrePaciente, telefonoPaciente, fecha, idMedico) VALUES
						('$nombrePaciente', '$telefonoPaciente', '$fecha', $idMedico)";
		
		// Si el INSERT se hizo correctamente
		if($mysqli -> query($consultaInsert)) {
		$consultaSelectUltimo = "SELECT id FROM citas ORDER BY id DESC LIMIT 1";
		$resultado = $mysqli -> query($consultaSelectUltimo);
		$fila = $resultado -> fetch_assoc();
		$idCita = $fila['id']; 
		$_SESSION['idCita'] = $idCita;
		header("Location: CrearPdf.php");
		}
		else {
			echo "
			<script>  
					alert('Lo sentimos hubo un error en el registro, intentelo de nuevo'); 
					location.href = '../Paginas/Citas.php';  
			</script>";
			$mysqli -> close();		
		}
	}
	else {
		echo "
		<script> 
			alert('La fecha y horario seleccionados ya estan ocupados');
			location.href = '../Paginas/Citas.php';
		</script>";
		$mysqli -> close();
	}
?>