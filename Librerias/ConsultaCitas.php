<?php
	include("Conexion.php");
	
	$idUsuario = $_SESSION['id'];
	echo "EL usuario esta"; 

	$consultaCitas = "SELECT c.id, m.nombre, m.consultorio, m.telefono, c.fecha 
						FROM medicos m, citas c
						WHERE c.idUsuario = $idUsuario AND m.id = c.idMedico";
	$resultado = $mysqli -> query($consultaCitas);
	
	while($filas = $resultado -> fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $filas['id'] . "</td>";
		echo "<td>" . $filas['nombre'] . "</td>";	
		echo "<td>" . $filas['consultorio'] . "</td>";
		echo "<td>" . $filas['telefono'] . "</td>";
		echo "<td>" . $filas['fecha'] . "</td>";

		echo "<td>
				<form method='post' action='CrearPdf2.php'>
				<input type='hidden' value='$filas[id]' name='idCita'></input>
				<input class='btn' type='submit' value='Generar PDF'></input>
				</form></td>";
		echo "</tr>";
	}
?>