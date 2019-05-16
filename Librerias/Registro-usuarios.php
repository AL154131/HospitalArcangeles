<?php
	session_start();
?>
<?php
	include 'Conexion.php';
	
	$form_pass = $_POST['password'];
	$username = $_POST['username'];	

	$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

	if($conexion->connect_error){
		die("La conexion fallo: ".$conexion->connect_error);
	}

	$buscarUsuario = "SELECT * FROM $tbl_name WHERE nombre = '$_POST[username]' ";
	$buscarEmail = "SELECT * FROM $tbl_name Where email = '$_POST[email]'";
	$result = $conexion->query($buscarUsuario);
	$resulte = $conexion->query($buscarEmail);

	$count = mysqli_num_rows($result);
	$counte = mysqli_num_rows($resulte);

	if ($counte == 1 ) {
		if($counte == 1 ){
			echo "<br />". "Email ya asignado, ingresa otro." . "<br />";

			echo "<a href='index.html'>Por favor ingrese otro Email</a>";
		}


	} elseif($count == 1){
		if ($count == 1) {
			echo "<br />". "Nombre de Usuario ya asignado, ingresa otro." . "<br />";

			echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
		}
	} else{
		$query = "INSERT INTO usuarios (usuario,email,password,nombre,apellido,sexo,fechanac) VALUES ('$_POST[username]', '$_POST[email]', '$form_pass','$_POST[nombre]','$_POST[apellido]','$_POST[sex]','$_POST[fechanac]')";

		if ($conexion->query($query) === TRUE) {
			echo "<br />" . "<h1>" . "Gracias por registrarse!" . "</h1>";
			echo "<h3 >" . "Bienvenido: " . $_POST['username'] . "</h3>" . "\n\n";
			echo "<h3>" . "Iniciar Sesion: " . "<a href='index.php'>Login</a>" . "</h3>"; 
		}

		else {
			echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
		}
	}
mysqli_close($conexion);
?>

