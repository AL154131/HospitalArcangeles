		<form method="post" action="Citas.php">
			
			<h2>Registra tu cita o <a href="Registro.php">Registrate Tu!</a></h2>
			<p id="datosPaciente">
			<input type="text" name="nombrePaciente" placeholder="Nombre" required>  
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
			<span id="errorFecha"></span>
			</p>

			<div id="costoCita"></div>

			<script type="text/javascript" src="../Js/comprobarFecha.js"></script> 
			<script type="text/javascript" src="../Js/costoCita.js"></script>

			<p id="boton">
			<input id="btnCita" type="submit" value="Confirmar cita" disabled="true"> 
			</p>	
			
		</form>