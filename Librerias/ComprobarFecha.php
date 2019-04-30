<?php
	include('Conexion.php');
	$nombreMedico = $_POST['medico'];
	$fecha = $_POST['fecha'];

	$fechaActual = date('y-m-d');

	// Comprobar que la fecha este compuesta de solo números //
	if (preg_match("/Día/", $fecha) or preg_match("/Mes/", $fecha) or preg_match("/Año/", $fecha)) {
    	echo "Seleccione una fecha válida";
    }
    else {
		$consultaIdMedico = "SELECT id from medicos where nombre = '$nombreMedico'";
		$resultado = $mysqli -> query($consultaIdMedico);
		$fila = $resultado -> fetch_assoc();
		$idMedico = $fila['id'];

		$consultaDisponibilidad = "SELECT id FROM citas WHERE idMedico = $idMedico AND fecha = '$fecha'";
		$resultado = $mysqli -> query($consultaDisponibilidad);
		$numeroFilas = $resultado -> num_rows;

		if($numeroFilas == 0 && strtotime($fecha) >= strtotime($fechaActual)) {
			echo "
			<p id='fechaBien'>La fecha esta disponible.</p>
			<script> document.getElementById('btnCita').disabled = false; </script>
			";
		}
		else {
			echo "
			<p id='fechaMal'>La fecha no está disponible.</p>
			<script> document.getElementById('btnCita').disabled = true; </script>
			";
		}
	}
	$mysqli -> close();
?>
