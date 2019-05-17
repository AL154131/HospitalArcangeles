<?php
	// HAY QUE ELIMINAR QUE LA PASSWORD SEA UNIQUE EN LA BD O ESTO DA ERROR SI SE PONEN LA MISMA PASS DE OTRO MEDICO
	session_start();
	if(isset($_SESSION['id'], $_POST['oldpsw'], $_POST['newpsw'])){
		require '../Librerias/Conexion.php';

		$id = $_SESSION['id'];
		$oldpsw = $_POST['oldpsw'];
		$newpsw = $_POST['newpsw'];

		$mysqli->query("UPDATE `medicos` SET `password` = '$newpsw' WHERE `id` = $id AND `password` = '$oldpsw'");

		if ($mysqli->affected_rows == 1) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}else{
		header('Location: ../Admin/indexadmin.php');
	}	
?>