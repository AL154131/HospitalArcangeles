<?php
	session_start();
	if(isset($_SESSION['id'])){
		header('Location: cms.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Admins</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script
      src="https://code.jquery.com/jquery-3.4.0.js"
      integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
      crossorigin="anonymous">
    </script>
	<script type="text/javascript" src="enviarLogin.js"></script>
</head>
<body style="background-color: dodgerblue">
	<div class="w3-container w3-center">
	<div class="w3-round-xlarge" style="width: 30%; margin: 17% auto 0 auto; padding: 1%; background-color: rgba(255,255,255,.4); color: white">
		<form action="" id="form-login">
            <h1 style="font-weight: bold;">Acceder</h1>
            <p><input class="w3-input w3-border w3-round-large" type="text" placeholder="Email" name="email" required></p>
            <p><input class="w3-input w3-border w3-round-large" type="password" placeholder="Password" name="psw" required></p>
            <button class="w3-btn w3-round-large" style="background-color: grey; width: 50%;" type="submit" class="btn-submit">Login</button>
        </form>
	</div>
	</div>
</body>
</html>