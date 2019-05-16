<?php
	if(isset($_POST['email'], $_POST['psw'])){
		require '../Librerias/Conexion.php';
		session_start();

		$email = $_POST['email'];
		$passw = $_POST['psw'];

		$rows = $mysqli->query("SELECT `id` FROM `medicos` WHERE `correo` = '$email' AND `password` = '$passw'");

		if($rows->num_rows == 1):
			$datos = $rows->fetch_assoc();
			$_SESSION['id'] = $datos['id'];
			echo json_encode(array('error' => false));
		else:
			echo json_encode(array('error' => true));
		endif;
	}else{
		header('Location: ../Admin/indexadmin.php');
	}
?>