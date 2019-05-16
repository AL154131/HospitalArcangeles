<?php
	if(isset($_POST['email'], $_POST['psw'])){
		require 'Conexion.php';
		session_start();

		$email = $_POST['email'];
		$passw = $_POST['psw'];

		$rows = $mysqli->query("SELECT `id` FROM `usuarios` WHERE `correo` = '$email' AND `contra` = '$passw'");

		if($rows->num_rows == 1):
			$datos = $rows->fetch_assoc();
			$_SESSION['idUsuario'] = $datos['id'];
			echo json_encode(array('error' => false));
		else:
			echo json_encode(array('error' => true));
		endif;
	}else{
		header('Location: http://localhost/HospitalArcangeles/');
	}
?>