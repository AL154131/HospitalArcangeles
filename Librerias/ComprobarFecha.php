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
		/*$consultaIdMedico = "SELECT id from medicos where nombre = '$nombreMedico'";
		$resultado = $mysqli -> query($consultaIdMedico);
		$fila = $resultado -> fetch_assoc();
		$idMedico = $fila['id'];*/

		$consultaDisponibilidad = "SELECT c.fecha FROM medicos m, citas c
									WHERE m.id = c.idMedico 
									AND m.nombre = '$nombreMedico' 
									AND c.fecha = '$fecha'";
		$resultado = $mysqli -> query($consultaDisponibilidad);
		$numeroFilas = $resultado -> num_rows;

		//Se le quita la hora a la fecha.
		$fecha = substr($fecha, 0, -9);
		$f1 = strtotime($fecha); $f2 = strtotime($fechaActual);
		if($numeroFilas == 0 && (strtotime($fecha) > strtotime($fechaActual))) {
			echo "
			La fecha esta disponible.
			<script> document.getElementById('btnCita').disabled = false; </script>
			";
		}
		else {
			echo "
			La fecha no está disponible.
			<script> document.getElementById('btnCita').disabled = true; </script>
			";
		}
	}
	$mysqli -> close();
?>
