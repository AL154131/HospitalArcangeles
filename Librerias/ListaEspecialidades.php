<?php
	include('../Librerias/Conexion.php'); 

 	$id = $_SESSION['id'];

	$consultaPlan = "SELECT plan FROM usuarios WHERE id = $id";
	$resultado = $mysqli -> query($consultaPlan);
	$fila = $resultado -> fetch_assoc();
	$idPlan = $fila['plan'];

	$consultaEspecialidades = "SELECT e.nombre FROM beneficios b, especialidades e
								WHERE b.idEspecialidad = e.id AND b.idPlan = $idPlan";
	$resultado = $mysqli -> query($consultaEspecialidades);
	while ($fila = $resultado -> fetch_assoc()) {
		echo '<option value="' . $fila['nombre'] . 
					'">' . $fila['nombre'] . '</option>';
	}
	$mysqli -> close();
?> 