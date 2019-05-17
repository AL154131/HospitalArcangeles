<?php
	session_start();
	if(isset($_SESSION['id'], $_POST)){
		require '../Librerias/Conexion.php';
		$nombre = $_POST['nombre'];
		$especialidad = $_POST['especialidad'];
		$correo = $_POST['email'];
		$passw = $_POST['passw'];
		$consultorio = $_POST['consultorio'];
		$telefono = $_POST['tel'];

		$sql = "INSERT INTO `medicos` (`id`, `correo`, `password`, `nombre`, `especialidad`, `consultorio`, `telefono`) VALUES (NULL, '$correo', '$passw', '$nombre', '$especialidad', '$consultorio', '$telefono')";

		$mysqli->query($sql);

		if ($mysqli->affected_rows == 1) {
				echo json_encode(array('error' => false));
		}else{
				echo json_encode(array('error' => true));
		}
	} else {
		header('Location: cms_medicos.php');
	}
?>