<!DOCTYPE html>
<html>
<head>
	<title>Citas</title>
	<link rel="stylesheet" href="../Estilos/Estilos.css">
    <link rel="stylesheet" href="../Estilos/fontello.css">
    <link rel="stylesheet" type="text/css" href="../Estilos/FormularioCitas.css">
    <!--Libreria JQUERY -->
	<script
	  src="https://code.jquery.com/jquery-3.4.0.js"
	  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
	  crossorigin="anonymous">
	</script>
	<?php if ($_POST) { include('../Librerias/CrearCita.php'); } ?>
</head>


<body>
	
	<header>
		<?php include("../Librerias/EncabezadoPie.phtml"); subcabecera(); ?>
	</header>

	<section id = "Formulario">
		<form method="post" action="Citas.php">
			
			<h2>Registra tu cita</h2>

			<p id="datosPaciente">
			<input type="text" name="nombrePaciente" placeholder="Nombre" required> 
			<input type="text" name="telefonoPaciente" placeholder="Número de teléfono" required> 
			</p>

			<p id="areaConsulta">
			<label>Área de consulta:</label>
			<select id="ListaEspecialidades" name="especialidad"> 
			<?php include("../Librerias/ListaEspecialidades.php");  ?>
			</select> 			
			</p>

			<p id="medicosDeArea">
			<label>Medicos del área:</label>
			<select id="listaMedicos" name="nombreMedico" required>
			<script type="text/javascript" src="../Js/listaMedicos.js"></script>
			</select> 
			</p>

			<p id="fecha">
			<label>Fecha de consulta:</label>
			<select id="dia" name="dia" required> 
				<script type="text/javascript">
		    	select = document.getElementById("dia");
		    	option = document.createElement("option");
		    	option.value = "Día";
		    	option.text = "Día";
		    	select.appendChild(option);
				for(i = 1; i <= 31; i++) {
				    option = document.createElement("option");
					if(i <= 9) {
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
			<select id="mes" name="mes" required>
				<script type="text/javascript">
		    	select = document.getElementById("mes");
		    	option = document.createElement("option");
		    	option.value = "Mes";
		    	option.text = "Mes";
		    	select.appendChild(option);		
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
			<select id="año" name="año" required>
				<script type="text/javascript">
		    	select = document.getElementById("año");
		    	option = document.createElement("option");
		    	option.value = "Año";		    	
		    	option.text = "Año";
		    	select.appendChild(option);		    	
				for(i = 2019; i <= 2020; i++){
				    option = document.createElement("option");
				    option.value = i;
				    option.text = i;
				    select.appendChild(option);
				}
	    		</script>				
			</select> 
			</p>

			<p id="horaConsulta">
			<label>Hora de consulta:</label>
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
			</select>
			<script type="text/javascript" src="../Js/comprobarFecha.js"></script> 
			<div id="errorFecha"></div>
			</p>

			<p id="boton">
			<input id="btnCita" type="submit" value="Confirmar cita" disabled="true"> 
			</p>	
		</form>
	</section>

	<footer>
		<?php pie(); ?>
	</footer>

</body>
</html>