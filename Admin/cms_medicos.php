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
	<script type="text/javascript" src="registrar_medico.js"></script>
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
		  	<h1>Medicos</h1>
		</div>
		<div class="w3-panel w3-white w3-border w3-round-xlarge" style="width: 30%; margin-left: 2%; margin-top: 1%; padding: 1%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); float: left;">
			<div class="w3-container w3-center">
			<h3>Registrar medico</h3>
			<form action="" id="form-regMed">
				<p><input class="w3-input w3-border w3-round-large" type="text" placeholder="Nombre" name="nombre" required></p>
			    <p><input class="w3-input w3-border w3-round-large" type="email" placeholder="Correo" name="email" required></p>
			    <p><input class="w3-input w3-border w3-round-large" type="password" placeholder="Password" name="passw" required></p>
			    <select name="especialidad" class="w3-input w3-border w3-round-large">
                    <option value="1">General</option>
                    <option value="2">Oftalmologo</option>
                    <option value="3">Ortopedista</option>
                    <option value="4">Cardiologo</option>
                    <option value="5">Urologo</option>
                </select>
			    <p><input class="w3-input w3-border w3-round-large" type="text" placeholder="Consultorio" name="consultorio" required></p>
			    <p><input class="w3-input w3-border w3-round-large" type="text" placeholder="Telefono" name="tel" required></p>
			    <button class="w3-btn w3-round-large" style="background-color: grey; color: white;" type="submit" class="btn-submit">Registrar</button>
			</form>
			</div>
		</div>
    	<table class="w3-table w3-bordered" style="background-color: white; width: 63%; margin-right: 2%; margin-left: auto; margin-top: 1%; border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); float: right;">
    		<tr>
    			<th>Nombre</th>
    			<th>Especialidad</th>
    			<th>Consultorio</th>
    			<th>Eliminar</th>
    		</tr>
		    	<?php
		    		require '../Librerias/Conexion.php';;
		    		$sql = "SELECT m.id, m.nombre, m.consultorio, e.nombre as nomnbreEspecialidad FROM medicos m, especialidades e WHERE m.especialidad = e.id";
		    		$rows = $mysqli->query($sql);
		    		while ($datos = $rows->fetch_assoc()){
		    			echo "<tr>";
		    			echo "<td>".$datos['nombre']."</td>";
		    			echo "<td>".$datos['nomnbreEspecialidad']."</td>";
		    			echo "<td>".$datos['consultorio']."</td>";
		    			echo "<td><a href='borrarMedico.php?id=".$datos['id']."' class='w3-btn w3-round-large' style='background-color: grey; color: white;'>Eliminar</a></td>";
		    			echo "</tr>";
		    		}
		    	?>
    	</table>		
	</div>
</body>
</html>