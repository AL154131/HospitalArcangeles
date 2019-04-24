<?php
	include('Conexion.php');
	$nombreMedico = $_POST['medico'];
	$fecha = $_POST['fecha'];

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

		if($numeroFilas == 0) {
			echo "
			<p id='fechaBien'>La fecha y hora SI estan disponibles!!!</p>
			";
		}
		else {
			echo "
			<p id='fechaMal'>La fecha y hora NO estan disponibles!!!</p>
			";
		}
	}
	$mysqli -> close();
?>
