<?php
	include('../Librerias/Conexion.php'); 
	$consultaEspecialidades = "SELECT DISTINCT especialidad from medicos 
								ORDER BY especialidad ASC";
	$resultado = $mysqli -> query($consultaEspecialidades);

	$cadena = "";

	while ($fila = $resultado -> fetch_assoc()) {
		echo '<option value="' . $fila['especialidad'] . 
					'">' . $fila['especialidad'] . '</option>';
	}
	$mysqli -> close();
?> 