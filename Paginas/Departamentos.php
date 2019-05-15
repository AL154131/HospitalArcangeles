<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Departamentos</title>
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
            subcabecera();
            session_start();
        ?>
    </header>
    
    <main>
        <section id="banner">
            <img src="../Imagenes/Banner/2.jpg" alt="">
            <div class="contenedor">
                <h3>Departamentos</h3>
            </div>
        </section>
    </main>
    
    <div id="Departamentos">
        <h1>Departamentos</h1><br>
        <div class="Cont">
            <div class="Dep">
                <h2>Departamento de Enfermeria</h2>
                <p>
                    Contamos con personal de enfermería altamente capacitado certificado en soporte vital básico. Somos y seguiremos siendo la mejor elección para la atención.
                </p>
            </div>
            <div class="Depima">
                <img src="../Imagenes/Departamentos/Enfermeria.jpg" alt="">
            </div>
        </div>
        <hr>
        <div class="Cont">
            <div class="Depd">
                <h2>Servicio de Urgencias</h2>
                <p>
                    Las 24 Horas del Día, Los 365 Días del Año<br>
                    Contamos con personal de enfermería altamente capacitado certificación de soporte vital básico. Somos y seguiremos siendo la mejor elección para la atención de la Salud en Ciudad Juárez.
                </p>
            </div>
            <div class="Depimad">
                <img src="../Imagenes/Departamentos/Urgencia.jpg" alt="">
            </div>
        </div>
        <div class="Cont">
            <div class="Dep">
                <h2>Quirófano</h2>
                <p>
                    El Servicio de Quirófano es una unidad operativa compleja, donde convergen los procedimientos invasivos de todos los servicios quirúrgicos del Hospital de 
                    Alta Complejidad. Funciona las 24 horas para cirugías de emergencia y 12 horas para cirugías programadas. Está integrado funcional y jerárquicamente dependiente de la Dirección Médica.
                </p>
            </div>
            <div class="Depima">
                <img src="../Imagenes/Departamentos/Quirofano.jpg" alt="">
            </div>
        </div>
        <div class="Cont">
            <div class="Depd">
                <h2>Servicio de Oftamología</h2>
                <p>
                    El Servicio de Oftalmología, atiende a todo paciente que acude a consultar, sin hacer distingo social o cultural dando una atención universal. Se ven más de 35,000 pacientes al año los cuales son atendidos en la policlínica de forma integral haciendo detección de todas las enfermedades que puedan conducir a la ceguera, son atendidos por profesores y oftalmólogos en formación (Residentes). 
                </p>
            </div>
            <div class="Depimad">
                <img src="../Imagenes/Departamentos/Oftamologia.jpg" alt="">
            </div>
        </div>
        <div class="Cont">
            <div class="Dep">
                <h2>Servicio de Odontología</h2>
                <p>
                    En el consultorio de odontología encontrarás las técnicas de cepillados y los usos adecuados y aditamentos, el cepillado dental es el método de higiene por el cual se elimina la placa bacteriana de los dientes y se previenen las caries dentales o las enfermedades periodontales como la gingivitis.
                </p>
            </div>
            <div class="Depima">
                <img src="../Imagenes/Departamentos/Odontologia.jpeg" alt="">
            </div>
        </div>
        <div class="Cont">
            <div class="Depd">
                <h2>Sala de Partos</h2>
                <p>
                    En el Hospital Arcangeles se cuenta con aproximadamente 23 salas de parto y una sala de operaciones para los procedimiento de cesárea. Nuestras futuras madres tienen amplias instalaciones, equipos modernos y reciben un servicio personalizado con profesionales de la salud altamente capacitados para atender sus necesidades especiales. 
                </p>
            </div>
            <div class="Depimad">
                <img src="../Imagenes/Departamentos/Sala.jpg" alt="">
            </div>
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
    </div>
    
 