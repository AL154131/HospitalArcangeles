<?php 
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'HospitalArcangeles');
	if ($mysqli->connect_error) {
	    die('Connect Error (' . $mysqli->connect_errno . ') '
	       . $mysqli->connect_error);
	}
	else {
		//echo "Usted esta conectado";
	}
?>