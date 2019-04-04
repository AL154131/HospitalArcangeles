<?php
	$consultaEspecialidades = "SELECT DISTINCT especialidad from medicos";
	$resultado = $mysqli -> query($consultaEspecialidades);

	while ($fila = $resultado -> fetch_assoc()) {
		echo '<option>' . $fila['especialidad'] . '</option>';
	} 
?>