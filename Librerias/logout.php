<?php
	session_start();
	unset($_SESSION['idUsuario']);
	header('Location: http://localhost/HospitalArcangeles/');
?>