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
	<script type="text/javascript" src="../Js/enviarLogin.js"></script>
</head>


<body>
	
	<header>
		<?php 
            include("../Librerias/EncabezadoPie.phtml"); 
            include("../Librerias/login.phtml");
            session_start();
            subcabecera();
		?>
		<?php 
			if ($_POST) { include('../Librerias/CrearCita.php'); } 
		?>
	</header>

	<section id = "Formulario">
		<?php 
		if(isset($_SESSION['idUsuario'])) {
			include("../Librerias/FormUsuarios.php");
		}
		else {
			include("../Librerias/FormSinCuenta.php");	
		}	  
		?>
	</section>

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