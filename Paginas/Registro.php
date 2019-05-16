<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nosotros</title>
	<link rel="stylesheet" href="../Estilos/Estilos.css">
    <link rel="stylesheet" href="../Estilos/fontello.css">
    <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
    <script
      src="https://code.jquery.com/jquery-3.4.0.js"
      integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
      crossorigin="anonymous">
    </script>
    <script src="../Js/Nosotros.js"></script>
    <script type="text/javascript" src="../Js/enviarLogin.js"></script>
</head>
   <body>
      <header>
        <?php 
            include("../Librerias/EncabezadoPie.phtml"); 
            include("../Librerias/login.phtml");
            session_start();
            subcabecera();
        ?>
       </header>
       <main>
            <section id="banner">
                <img src="../Imagenes/Banner/Citas.jpg" alt="">
                <div class="contenedor">
                    <h3>Registrate</h3>
                </div>
            </section>
        </main>
       
       <section>
       <div class="login">
		<div class = "Registro">
			<form action="../Librerias/registro-usuarios.php" method="POST">
				<div class="Usuarios">
				<label for="Nombre">Nombre Completo</label>
				<div><input type="text" class="" maxlength="20" placeholder="Ingresa tu Nombre completo" name="nombre" required></div>
				</div>
				<div class="Usuarios">
				<label for="email">Email</label>
				</div>
				<div class="Usuarios">
				<div><input type="text" class="" maxlength="50" placeholder="Ingresa tu Email" name="email" required></div>
				</div>
				<div class="Usuarios">
				<label for="pwd">Contraseña</label>
                    <div><input type="password" class="" maxlength="50" placeholder="Ingresa tu Contraseña" name="password" required></div>
                </div>
				<div class="Usuarios">
				<label for="tel">Telefono</label>
				<div><input type="tel" class="" maxlength="10" placeholder="Ingresa tu Telefono" name="tel" required></div>
				</div>
				<div class="Usuarios">
				    <label for="Planes">Elige un Plan</label>
                    <select name="Plan" id="Plan">
                       <option value="1">Escencial</option>
                       <option value="2">Basico</option>
                       <option value="3">Premium</option>
                    </select>
				</div>
                <div class="planes">
		        <div class="plan">
		            <div class="escencial">
		                <h3>ESCENCIAL</h3>
		            </div>
		            <div class="escencialben">
		                <ul>
		                    <li>
		                        10% de Descuento en tus citas
		                    </li>
		                    <li>
		                        Acceso a citas con especialistas
		                    </li>
		                </ul>
		            </div>
		            <div class="escencialcosto">
		                $500.00 MXM Anuales
		            </div>
		        </div>
		        <div class="plan">
		            <div class="plan">
		                <div class="basico">
		                <h3>BASICO</h3>
		            </div>
		            <div class="basicoben">
		                <ul>
		                    <li>
		                        15% de Descuento en tus citas
		                    </li>
		                    <li>
		                        Acceso a citas con especialistas
                            </li>
		                    <li>
		                        Mayor catalogo de especialistas
                            </li>
		                </ul>
		            </div>
		            <div class="basicosto">
		                $750.00 MXM Anuales
		            </div>
		            </div>
		        </div>
		        <div class="plan">
		            <div class="plan">
		            <div class="premium">
		                <h3>PREMIUM</h3>
		            </div>
		            <div class="premiumben">
		                <ul>
		                    <li>
		                        30% de Descuento en tus citas
		                    </li>
		                    <li>
		                        Acceso a citas con especialistas
		                    </li>
		                    <li>
		                        Catalogo de especialistas completo
		                    </li>
		                    <li>
		                        Preferencia en Quirofano
		                    </li>
		                </ul>
		            </div>
		            <div class="premiumcosto">
		                $1000.00 MXM Anuales
		            </div>
		            </div>
		        </div>
		    </div>
		    <div class="Usuarios">
				<label for="tarjeta">Tarjeta de Credito</label>
                <div><input type="text" class="" maxlength="16" placeholder="Ingresa tu Tarjeta de Credito/Debito" name="Tarjeta" required></div>
            </div>
            <div class="Usuarios">
				<label for="cvv">CVV</label>
                <div><input type="text" class="" maxlength="3" placeholder="Ingresa tu CVV" name="cvv" required></div>
            </div>
            <div class="Usuarios">
				<label for="date">Fecha de Vencimiento</label>
                    <div><input type="date" class="" placeholder="Ingresa la fecha de vencimiento de tu tarjeta" name="vencimiento" required></div>
                </div>
            <center>
                <div>
                    Aceptar <a href="Terminos.html">Terminos y Condiciones</a> <input type="checkbox"required />
                </div>
                <div>
                    <button type="submit" class="">Crear cuenta</button>
                </div>
            </center>
            </form>
            </div>
		</div>
		</section>
		<section>
		    
		</section>
		
    <footer>
        <?php
            pie();
        ?>
    </footer>
   </body>
</html>    