<?php
	session_start();
	if(!isset($_SESSION['id'])){
		header('Location: ../index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="../Estilos/Estilos.css">
    <link rel="stylesheet" href="../Estilos/fontello.css">
    <link rel="stylesheet" href="../Estilos/citasMedicos.css">
</head>
<body>
    <header> 
        <?php 
            include("../Librerias/EncabezadoPie.phtml"); 
            subcabecera();
        ?>
    </header>
    <main>
    	<table id="tablaCitas">
    		<tr>
    			<th>Paciente</th>
    			<th>Teléfono</th>
    			<th>Fecha</th>
    			<th>Cancelar citas</th>
    		</tr>
		    	<?php
		    		require '../Librerias/Conexion.php';
		    		$id = $_SESSION['id'];
		    		$rows = $mysqli->query("SELECT `id`, `nombrePaciente`, `telefonoPaciente`, `fecha` FROM `citas` WHERE `idMedico` = '$id' AND `fecha` > '".date('Y-m-d')."' ORDER BY `fecha` ASC");
		    		while ($datos = $rows->fetch_assoc()){
		    			echo "<tr>";
		    			echo "<td>".$datos['nombrePaciente']."</td>";
		    			echo "<td>".$datos['telefonoPaciente']."</td>";
		    			echo "<td>".$datos['fecha']."</td>";
		    			echo "<td><a href='../Librerias/BorrarCita.php?id=".$datos['id']."' class='btnCancelarCita'>Cancelar cita</a></td>";
		    			echo "</tr>";
		    		}
		    	?>
    	</table>
    </main>
    <footer>
    	<?php
            pie();
        ?>
    </footer>
</body>
</html>