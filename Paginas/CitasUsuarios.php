<!DOCTYPE html>
<html>
<head>
	<title>Mis citas</title>
	<link rel="stylesheet" href="../Estilos/Estilos.css">
    <link rel="stylesheet" href="../Estilos/fontello.css">
    <link rel="stylesheet" href="../Estilos/citasUsuarios.css">
    <link rel="stylesheet" type="text/css" href="../Estilos/FormularioCitas.css">
    <!--Libreria JQUERY -->
	<script
	  src="https://code.jquery.com/jquery-3.4.0.js"
	  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
	  crossorigin="anonymous">
	</script>
	<script type="text/javascript" src="../Js/enviarLogin.js"></script>
</head>

<body>
	<header>
		<?php 
            include("../Librerias/EncabezadoPie.phtml"); 
            include("../Librerias/login.phtml");
            session_start();
            if(!isset($_SESSION['idUsuario'])) {
            	header("Location: http://localhost/HospitalArcangeles");
            }
            subcabecera();
		?>
	</header>

    <main>
    	<table id="tablaCitas">
    		<tr>
    			<th id="folio">Numero de folio</th>
    			<th id="medico">Médico</th>
    			<th id="consultorio">Consultorio</th>
    			<th id="telefono">Telefono</th>
    			<th id="fecha">Fecha</th>
    			<th id="pdf">PDF</th>
    		</tr>
    		
    		<?php include("../Librerias/ConsultaCitas.php");  ?>

    	</table>	
    </main>

	<footer>
		<?php pie(); ?>
        <?php
            //session_start();
            if (isset($_SESSION['idUsuario'])){
              insertSesion();
            }else{
              insertLogin();
            }
        ?> 
	</footer>

</body>
</html>