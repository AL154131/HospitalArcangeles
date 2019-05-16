<?php
	session_start();
?>
<?php
	include("Conexion.php");
    include("login.phtml");
    $conexion=new mysqli('localhost', 'root', '', 'hospitalarcangeles');

    $query = "INSERT INTO usuarios (nombre,correo,contra,telefono,plan,numTarjeta,fechaVencimiento,cvv) VALUES ('$_POST[nombre]','$_POST[email]', '$_POST[password]','$_POST[tel]','$_POST[Plan]','$_POST[Tarjeta]','$_POST[vencimiento]','$_POST[cvv]')";

    if ($conexion->query($query) === TRUE) { 
        header('Location: ../Paginas/Citas.php');
    }

    else {
        echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
    }
mysqli_close($conexion);
?>

