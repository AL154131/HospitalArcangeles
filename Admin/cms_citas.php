<?php
	session_start();
	if (!isset($_SESSION['id'])) {
		header('Location: indexadmin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CMS</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script
      src="https://code.jquery.com/jquery-3.4.0.js"
      integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
      crossorigin="anonymous">
    </script>
	<script type="text/javascript" src="cambiarPass.js"></script>
</head>
<body style="background-color: lightgrey">
	<div class="w3-sidebar w3-dark-grey w3-bar-block" style="width:15%;">
	  <h3 class="w3-bar-item">Menú</h3>
	  <a href="cms.php" class="w3-bar-item w3-button w3-hover-blue w3-padding-16 w3-border-top">Inicio</a>
	  <a href="cms_citas.php" class="w3-bar-item w3-button w3-hover-blue w3-padding-16">Citas</a>
	  <a href="cms_medicos.php" class="w3-bar-item w3-button w3-hover-blue w3-padding-16">Medicos</a>
	  <a href="logout.php" class="w3-bar-item w3-button w3-hover-blue w3-padding-16">Salir</a>
	</div>
	<div style="margin-left:15%">
		<div class="w3-container w3-blue">
		  	<h1>Tus citas</h1>
		</div>
    	<table class="w3-table w3-bordered" style="background-color: white; width: 90%; margin-right: auto; margin-left: auto; margin-top: 2%; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    		<tr>
    			<th>Paciente</th>
    			<th>Teléfono</th>
    			<th>Fecha</th>
    			<th>Cancelar citas</th>
    		</tr>
		    	<?php
		    		require '../Librerias/Conexion.php';
		    		$id = $_SESSION['id'];
		    		$fecha = date('Y-m-d');
		    		$sql = "SELECT c.id, u.nombre, u.telefono, c.fecha FROM citas c, usuarios u WHERE c.idUsuario = u.id AND c.idMedico = 4 AND c.fecha > '".$fecha."' ORDER BY c.fecha ASC";
		    		$rows = $mysqli->query($sql);
		    		while ($datos = $rows->fetch_assoc()){
		    			echo "<tr>";
		    			echo "<td>".$datos['nombre']."</td>";
		    			echo "<td>".$datos['telefono']."</td>";
		    			echo "<td>".$datos['fecha']."</td>";
		    			echo "<td><a href='BorrarCita.php?id=".$datos['id']."' class='w3-btn w3-round-large' style='background-color: grey; color: white;'>Cancelar cita</a></td>";
		    			echo "</tr>";
		    		}
		    	?>
    	</table>
	</div>
</body>
</html>