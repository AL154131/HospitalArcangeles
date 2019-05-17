<?php
	session_start();
	if(isset($_SESSION['id'], $_GET)){
		require '../Librerias/Conexion.php';
		$mensaje = $_GET['mensaje'];

		$fecha = date('Y-m-d');

		$sql = "INSERT INTO boletin VALUES(NULL, '".$fecha."', '".$mensaje."')";

		$mysqli->query($sql);

		header('Location: cms.php');

	} else {
		header('Location: cms_medicos.php');
	}
?>