<?php
	session_start();
	if (isset($_GET['id'], $_SESSION['id'])){
		require'../Librerias/Conexion.php';
		$id = $_GET['id'];
		$sql = "DELETE FROM `medicos` WHERE `id` = $id"; 
		$mysqli->query($sql);
		header('Location: cms_medicos.php');
	}else{
		header('Location: cms_medicos.php');
	}
?>