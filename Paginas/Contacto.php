<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contacto</title>
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
            <img src="../Imagenes/Banner/4.jpg" alt="">
            <div class="contenedor">
                <h3>Contacto</h3>
            </div>
        </section>
    </main>
    
    <div class="Contacto">
        <h1>¿Tienes alguna pregunta sobre nuestros servicios?</h1>
        <form id = "contact-form" class="contact" name = "contact=form" method="post" action="../Librerias/Correo.php">
        <div class="ContenedorF">
            <div class="row">
                <div class="col-75">
                    <input type="text" name="Nombre" placeholder="Nombre...">
                </div>
            </div>
            <div class="row">
                <div class="col-75">
                    <input type="text" name="Telefono" placeholder="Telefono...">
                </div>
            </div>
            <div class="row">
                <div class="col-75">
                    <input type="email" name="Email" required="required" placeholder="e-mail">
                </div>
            </div><hr>
            <div class="row">
                <div class="col-75">
                    <textarea name="Mensaje" id="Mensaje" placeholder="Detalles, Comentarios o Preguntas.." cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Enviar">
            </div>
        </div>
        </form>
        <br><br>
        <div class="ContactoN">
            <h2>Estamos a su disposición a través de los siguientes medios.</h2>
            <table>
                    <tr>
                        <td>52(656)222 5825</td>
                    </tr>
                    <tr>
                        <td>52(656)131 2585</td>
                    </tr>
                    <tr>
                        <td>Contacto@HSAC.com.mx</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.Facebook.com">Siguenos en Facebook</a></td>
                    </tr>
            </table>
            <h2>Visitanos</h2>
            <table>
                    <tr>
                        <td><a href="#mapa">Av. Paseo de la Victoria 4370, Partido Iglesias, 32618 Cd Juárez, Chih.</a></td>
                    </tr>
            </table>
        </div>
    </div>
    <div id="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.1659494409014!2d-106.4087546848454!3d31.684030981315832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75eaabec7322b%3A0x426ef2f7dc336d2e!2sHospital+Star+M%C3%A9dica+Ciudad+Ju%C3%A1rez!5e0!3m2!1ses-419!2smx!4v1556138467434!5m2!1ses-419!2smx" width="1920" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <footer>
        <?php
            pie();
        ?>
        <?php
            //session_start();
            if (isset($_SESSION['idUsuario'])){
              insertSesion();
            }else{
              insertLogin();
            }
        ?>    
    </footer>
</body>
</html>