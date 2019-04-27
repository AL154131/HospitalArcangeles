<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="Estilos/Estilos.css">
    <link rel="stylesheet" href="Estilos/fontello.css">
    <script
      src="https://code.jquery.com/jquery-3.4.0.js"
      integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
      crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="Js/enviarLogin.js"></script>
</head>
<body>
    <header> 
        <?php 
            include("Librerias/EncabezadoPie.phtml");
            include("Librerias/login.phtml");
            cabecera();
        ?>
    </header>

    <main>
        <section id="banner">
            <img src="Imagenes/Banner/1.jpg" alt="">
            <div class="contenedor">
                <h2>Protegiendo su salud</h2>
                <p>La mejor proteccion para sus seres queridos</p>
                <a href="Paginas/Contacto.php#mapa">Encuentranos</a>
            </div>
        </section>
    </main>
    
    <section class="contenedor">
        <div id="Bienvenidos">
        <h2>BIENVENIDO AL MEJOR LUGAR PARA SU SALUD</h2>
        <p> En nuestro hospital encontrara la mejor atención para su salud, a manos de excelentes profesionales de la salud usted podrá estar tranquilo. </p>
        </div>
    </section>
    
    <section id="blog">
       <h3>Lo ultimo en tecnologia</h3>
        <div class="contenedor">
            <article>
                <img src="Imagenes/Hospital.jpg" alt="">
                <h4>El mejor Hospital de la Ciudad</h4>
            </article>
            <article>
                <img src="Imagenes/Salas.jpg" alt="">
                <h4>Con las mejores instalaciones</h4>
            </article>
            <article>
                <img src="Imagenes/Personal.jpg" alt="">
                <h4>Personal altamente calificado</h4>
            </article>
        </div>
    </section>
    
    <section id="departamentoindex">
        <h3>Departamentos que tienes a tu disposicion</h3>
        <div class="contenedor">
           <div class="dep-info">
               <img src="Imagenes/dentista.jpg" alt="">
               <h4>Odontologia</h4>
           </div>
           <div class="dep-info">
               <img src="Imagenes/Quirofano.jpg" alt="">
               <h4>Quirofano</h4>
           </div>
           <div class="dep-info">
               <img src="Imagenes/Partos.jpg" alt="">
               <h4>Sala de Partos</h4>
           </div>
           <div class="dep-info">
               <img src="Imagenes/Ofta.jpg" alt="">
               <h4>Oftalmologia</h4>
           </div>
            
        </div>
    </section>
    
    <footer>
        <?php
            pie();
        ?>
        <?php
            session_start();
            if (isset($_SESSION['id'])){
              insertSesion();
            }else{
              insertLogin();
            }
        ?>
    </footer>
    
</body>
</html>