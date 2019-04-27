<?php
	require 'Conexion.php';
	session_start();

	//$rows = $mysqli->query("SELECT id FROM medicos WHERE correo = '".$_POST['email']."' AND contraseña = '".$_POST['psw']."'");

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
?>