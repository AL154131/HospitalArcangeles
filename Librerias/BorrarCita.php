<?php
	session_start();
	if (isset($_GET['id'], $_SESSION['id'])){
		require'Conexion.php';
		$id = $_GET['id'];
		$sql = "DELETE FROM `citas` WHERE `id` = $id"; 
		$mysqli->query($sql);
		header('Location: ../Paginas/CitasMedicos.php');
	}else{
		header('Location: ../Paginas/CitasMedicos.php');
	}
?>