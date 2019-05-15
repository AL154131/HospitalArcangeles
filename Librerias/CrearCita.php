<?php
	include('Conexion.php');

	if(!isset($_POST['nombreMedico'])) {
		header("Location: ../");
	}
	else if(!isset($_SESSION['idUsuario'])) {
		$idUsuario = 0;
		$_SESSION['idInvitado'] = 0;
		$_SESSION['nombrePaciente'] = $_POST['nombrePaciente'];
	}
	else {
		$idUsuario = $_SESSION['idUsuario'];
	}
	
	$nombreMedico = $_POST['nombreMedico'];
	$fecha = $_POST['año'] . "-" . $_POST['mes'] . "-" . $_POST['dia'];
	$hora = $_POST['hora'];

	$fechaActual = date("y-m-d");
	$fecha = $fecha . " " . "$hora" . ":00";

	$consultaIdMedico = "SELECT id from medicos where nombre = '$nombreMedico'";
	$resultado = $mysqli -> query($consultaIdMedico);
	$fila = $resultado -> fetch_assoc();
	$idMedico = $fila['id'];

	$consultaDisponibilidad = "SELECT id FROM citas WHERE idMedico = $idMedico AND fecha = '$fecha'";
	$resultado = $mysqli -> query($consultaDisponibilidad);
	$numeroFilas = $resultado -> num_rows;
	
	$fecha2 = substr($fecha, 0, -9);
	// Si NO hay una cita con la fecha y el medico indicado
	if(strtotime($fecha2) > strtotime($fechaActual) && $numeroFilas == 0) {
		$consultaInsert = "INSERT INTO citas (idUsuario, idMedico, fecha) VALUES
						($idUsuario, $idMedico, '$fecha')";
		
		// Si el INSERT se hizo correctamente
		if($mysqli -> query($consultaInsert)) {
			if(!isset($_SESSION['idUsuario'])) {
				header("Location: ../Paginas/PdfSinUsuario.php");
			}
			else {
				echo "<script> alert('Su cita a quedado registrada consulta tu comprobante en Mis citas') </script>";
				$mysqli -> close();
			}
		}
		else {
			echo "
			<script> alert('Lo sentimos hubo un error en el registro, intentelo de nuevo'); </script>
			";
			$mysqli -> close();		
		}
	}
	else {
		echo "<script> alert('La fecha no esta disponible'); </script>";
		$mysqli -> close();
	}
	
?>