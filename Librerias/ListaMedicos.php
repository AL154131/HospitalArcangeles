<?php
	$consultaNombreMedicos = "SELECT nombre from medicos";
	$resultado = $mysqli -> query($consultaNombreMedicos);

	while ($fila = $resultado -> fetch_assoc()) {
		echo '<option>' . $fila['nombre'] . '</option>';
	}
?>