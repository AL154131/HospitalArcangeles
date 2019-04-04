<!DOCTYPE html>
<html>
<head>
	<title>Citas</title>
	<link rel="stylesheet" href="../Estilos/Estilos.css">
    <link rel="stylesheet" href="../Estilos/fontello.css">
    <style type="text/css">
    	#Formulario {
    		padding-top: 50px; /*Medida del alto del header*/
    		border: 2px solid red;
    	}
    </style>
</head>

<body>
	<header>
		<?php
			include("../Librerias/EncabezadoPie.phtml");
			cabecera();
		?>
	</header>
	<section id = "Formulario">
		<center>
		<form method="post" action="Citas.php">
			<input type="text" name="nombrePaciente" placeholder="Nombre del paciente"> <br><br>
			<input type="text" name="telefonoPaciente" placeholder="Telefono"> <br><br>

			Fecha de consulta
			<select id="dia" name="dia"> 
				<script type="text/javascript">
		    	select = document.getElementById("dia");
				for(i = 1; i <= 31; i++) {
				    option = document.createElement("option");
					if(i <= 9) {
						//iString = String(i);
						option.value = "0" + i;
						option.text = "0" + i;
						select.appendChild(option);
						continue;
					}
				    option.value = i;
				    option.text = i;
				    select.appendChild(option);
				}
	    		</script>
			</select> 
			<select id="mes" name="mes">
				<script type="text/javascript">
		    	select = document.getElementById("mes");
				for(i = 1; i <= 12; i++){
				    option = document.createElement("option");
					if(i <= 9) {
						//iString = String(i);
						option.value = "0" + i;
						option.text = "0" + i;
						select.appendChild(option);
						continue;
					}
				    option.value = i;
				    option.text = i;
				    select.appendChild(option);
				}
	    		</script>				
			</select>
			<select id="año" name="año">
				<script type="text/javascript">
		    	select = document.getElementById("año");
				for(i = 2019; i <= 2020; i++){
				    option = document.createElement("option");
				    option.value = i;
				    option.text = i;
				    select.appendChild(option);
				}
	    		</script>				
			</select> <br><br>

			Hora de consulta 
			<select id="hora" name="hora"> 
				<script type="text/javascript">
		    	select = document.getElementById("hora");
				for(i = 8; i <= 20; i++){
				    option = document.createElement("option");
					if(i <= 9) {
						//iString = String(i);
						option.value = "0" + i + ":00";
						option.text = "0" + i + ":00";
						select.appendChild(option);
						continue;
					}				   
				    option.value = i + ":00";
				    option.text = i + ":00";
				    select.appendChild(option);
				}
	    		</script>		
			</select> <br><br>

			Doctor:<select name="nombreMedico"> 
				<?php 
					include('../Librerias/Conexion.php');
					include('../Librerias/ListaMedicos.php'); 
				?>
				<!--<option>Jun Martinez Soto</option>
				<option>Medico2</option>-->
			</select> <br><br>

			Especialidad: <select name="especialidad"> 
				<?php
					include('../Librerias/ListaEspecialidades.php');
				?>
				<!--
				<option>Especialidad1</option>
				<option>Especialidad2</option>-->
			</select> <br><br>

			<input type="submit" name="confirmarCita"> <br>
		


		</form>
		</center>
	</section>
	<?php 
		if ($_POST) {	
			include('../Librerias/CrearCita.php');
		}
	?>
	<footer>
		<?php
			pie(); 
		?>
	</footer>

</body>
</html>