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
		  	<h1>Tu información</h1>
		</div>
		<div style="float: left; width: 40%;">
			<div class="w3-panel w3-white w3-border w3-round-xlarge" style="width: 100%; margin-left: 2%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
				<?php
					require '../Librerias/Conexion.php';
			     	$id = $_SESSION['id'];
			      	$rows = $mysqli->query("SELECT `nombre`, `especialidad`, `consultorio`, `telefono`, `correo` FROM `medicos` WHERE `id` = '$id'");
			      	$datos = $rows->fetch_assoc();
			      	$nombre = $datos['nombre'];
			      	$especialidad = $datos['especialidad'];
			      	$consultorio = $datos['consultorio'];
			      	$telefono = $datos['telefono'];
			      	$correo = $datos['correo'];
			      	echo "<h3>Bienvenido: $nombre </h3>";
			      	echo "<p><strong>Especialidad: </strong>$especialidad </p>";
			      	echo "<p><strong>Consultorio: </strong>$consultorio </p>";
			      	echo "<p><strong>Correo: </strong>$correo </p>";
			      	echo "<p><strong>Teléfono: </strong>$telefono </p>";
				?>
			</div>
			<div class="w3-panel w3-white w3-border w3-round-xlarge" style="width: 100%; margin-left: 2%; margin-top: 1%; padding: 1%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
				<div class="w3-container w3-center">
				<h3>Cambiar password</h3>
				<form action="" id="form-passchange">
					<p><input class="w3-input w3-border w3-round-large" type="password" placeholder="Password Actual" name="oldpsw" required></p>
		            <p><input class="w3-input w3-border w3-round-large" type="password" placeholder="Password Nueva" name="newpsw" required></p>
		            <button class="w3-btn w3-round-large" style="background-color: grey; color: white;" type="submit" class="btn-submit">Cambiar</button>
				</form>
				</div>
			</div>
		</div>
		<div style="float: right; width: 60%;">
			<div class="w3-panel w3-white w3-border w3-round-xlarge" style="width: 90%; margin-left: 5%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-bottom: 0;">
				<h2>Boletín</h2>
				<?php
			      	$rows = $mysqli->query("SELECT `fecha`, `mensaje`FROM `boletin` ORDER BY `fecha` DESC LIMIT 6");
		    		while ($datos = $rows->fetch_assoc()){
		    			echo "<hr>";
		    			echo "<p><strong>".$datos['fecha'].": </strong>".$datos['mensaje']."</p>";
		    		}
				?>
			</div>
		</div>
		<div style="float: right; width: 60%;">
			<div class="w3-panel w3-white w3-border w3-round-xlarge" style="width: 90%; margin-left: 5%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<p><strong>Publicar: </strong></p>
					<form action="publicarBoletin.php" method="GET">
  						<input name="mensaje" placeholder="Escribe tu mensaje..." style="width: 100%; height: 80px; padding: 12px 20px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8; font-size: 16px; resize: none;">
  						<div class="w3-container w3-center">
  						<button class="w3-btn w3-round-large" style="background-color: grey; color: white; margin-top: 1%; margin-bottom: 2%;" type="submit" class="btn-submit">Publicar</button>
  						</div>
					</form>
			</div>
		</div>
	</div>
</body>
</html>