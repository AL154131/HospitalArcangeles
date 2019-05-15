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
            subcabecera();
            session_start();
        ?>
    </header>
    
    <main>
        <section id="banner">
            <img src="../Imagenes/Banner/3.jpg" alt="">
            <div class="contenedor">
                <h3>NOSOTROS</h3>
            </div>
        </section>
    </main>
    
    <div class="wrap">
       <ul class="tabs">
           <li><a href="#tab1"><span>Nosotros</span></a></li>
           <li><a href="#tab2"><span>Mision</span></a></li>
           <li><a href="#tab3"><span>Calidad</span></a></li>
           <li><a href="#tab4"><span>Especialistas</span></a></li>
           <li><a href="#tab5"><span>Personal</span></a></li>
           <li><a href="#tab6"><span>Instalaciones</span></a></li>
       </ul>
        <div class="secciones">
            <article id="tab1">
                
                <h1>¿Quiénes somos?</h1>
                <h2>
                    ❝Siempre que tenemos la oportunidad de ayudar a la vida humana, también tenemos la oportunidad de ofrecer calidad en la salud para así dar una mejor calidad de vida a todos nuestros pacientes.❞
                </h2>
                <p>
                    Somos un hospital integrado por un gran equipo humano, conformado por profesionales de la salud, que ofrecemos servicios médicos en un ambiente de calidez, calidad y humanismo.
                </p>
                <h2>Somos innovación</h2>
                <p>
                    Cada elemento de servicio y recurso humano se complementan para crear día a día la satisfacción de garantizar que somos el mejor hospital de Ciudad Juarez
                </p>
                <h2>Somos calidad</h2>
                <p>
                    En 2019 iniciamos un programa de Educación Médica continua Nacional con la Univercidad Autonoma de Ciudad Juarez, impartiendo conferencias médicas cada dos meses, con el objetivo de capacitar tanto al personal médico como de enfermería.
                </p>
                <h2>Somos calidez</h2>
                <p>
                    Apoyando a nuestra comunidad, llevamos a cabo cada año nuestra Feria de la Salud, siento totalmente gratuitos todos los servicios.
                </p>
            </article>
            <article id="tab2">
                <h1>Misión</h1>
    	        <h2>
    	            ❝Ser el mejor hospital de la comunidad por sus resultados, alta calidad y tecnología. Ser reconocido por sus médicos, pacientes y la población como una organización excelente en todos los sentidos.❞
    	        </h2>
    	        <p>
    	            Somos un hospital integrado por un gran equipo humano, conformado por profesionales de la salud, que ofrecemos servicios médicos en un ambiente de calidez, calidad y humanismo. Comprometidos con la mejora continua, respaldados con tecnología de punta y personal medico calificado.
    	        </p>
    	        <h2>Vision</h2>
                <p>
    	            Ser el mejor hospital de la comunidad por sus resultados, alta calidad y tecnología. Ser reconocido por sus médicos, pacientes y la población como una organización excelente en todos los sentidos.
                </p>
    	        <h2>Filosofia</h2>
    	        <ul>
    	        <li>
    	            Estamos comprometidos con la calidad en nuestros servicio y calidez en nuestra atención.
    	        </li>
    	        <li>
    	            Todas las personas deben tratarse con consideración, confianza y respeto.
    	        </li>
    	        <li>
    	            Cada persona es valiosa, es única y realiza una contribución importante.
    	        </li>
    	        <li>
    	            Todos nosotros debemos comprometernos incesantemente con la excelencia en lo que hacemos.
    	        </li>
    	        </ul>
    	        <h2>Valores</h2>
    	        <ul>
    	            <li>Honestidad</li>
    	            <li>Integridad</li>
    	            <li>Productividad</li>
    	            <li>Liderazgo</li>
    	            <li>Calidad e Innovación.</li>
    	        </ul>
            </article>
            <article id="tab3">
               <h1>Calidad y seguridad</h1>
    	       <h2>
    	           ❝La calidad es un modelo de vida, es una forma de pensar que se aplica a nuestra vida laboral y personal, influye en relaciones laborales, sociales y familiares, además de elevar nuestro nivel de exigencia.❞
    	       </h2>
    	       <p>
    	           La Calidad es un modelo de vida, es una forma de pensar que se aplica a nuestra vida laboral y personal, influye en relaciones laborales, sociales y familiares, además de elevar nuestro nivel de exigencia, lo que nos permite evaluar y valorar un buen servicio con el fin de buscar la forma de mejorarlo.
    	       </p>
    	       <br>
    	       <p>
    	           El Hospital Arcangeles hace constantemente un esfuerzo coordinado para ofrecer servicios de salud seguros y confiables de manera consistente. Integrando la calidad técnica, la calidez en el servicio y la eficiencia administrativa en un proceso de mejora continua.
    	       </p>
            </article>
            <article id="tab4">
                <h1>Especialistas en su salud</h1>
                <h2>
                    ❝Nos complace atenderle de la mejor    manera posible, es por eso que en el Hospital Arcángeles estamos conformados por personas cuyo principal objetivo es cuidarle y ayudarle durante su hospitalización.❞
                </h2>
                <p>
                    Estamos seguros que nuestro equipo de profesionales de la salud hará todo lo posible por brindar una excelente atención medica en un ambiente de comodidad y seguridad, además de su bienestar físico tendremos en cuenta su bienestar emocional y mental.
                </p>
                <h2>Su participación es primordial.</h2>
                <p>
                    Todos los colaboradores de atención medica trabajaremos en conjunto para lograr día a día los objetivos que nos lleven al éxito de su recuperación, le mantendremos informado para garantizar en la medida de lo posible su seguridad, si tiene dudas consúltenos o pregúntenos siempre tendremos tiempo para atender sus dudas.
                </p>
                <h2>¡Sus familiares y amigos le conocen mejor que nadie!  </h2>
                <p>
                    Involucre a un familiar o amigo, ellos nos pueden ayudar a entenderle y satisfacer sus necesidades de un modo comprensivo. Le sugerimos siempre estar acompañado de una persona mientras los enfermeros y médicos le mantienen informado y de esta manera también puedan participar en sus cuidados.
                </p>
                <h2>Ayúdenos a brindarle una mejor atención.</h2>
                <ul>
                    <li>
                        Nos da su historia clínica completa y precisa, una lista de los medicamentos que toma y de los médicos que le están tratando.
                    </li>
                    <li>
                        Siga todos los conejos de seguridad para los pacientes que se describen en esta guía.
                    </li>
                    <li>
                        Cuéntenos sobre sus necesidades y díganos si siente que no las estamos satisfaciendo.
                    </li>
                    <li>
                        Pregúntenos sobre cualquier aspecto de su atención.
                    </li>
                    <li>
                        Consulte a su enfermero o medico si hay algo que no entiende o que le preocupa.
                    </li>
                </ul>
            </article>
            <article id="tab5">
                <h1>Personal</h1>
    	        <p>Sientase libre de contactar a cualquier miembro de nuestro equipo: director general, administradores, coordinadores y jefes de diferentes departamentos.</p>
    	        <div class="personal">
                <table>
    	            <tr>
    	                <th>Nombre</th>
    	                <th>Especialidad</th>
    	            </tr>
    	            <tr>
    	                <td>Dr. Juan Martinez Soto</td>
    	                <td>General</td>
    	            </tr>
    	            <tr>
    	               <td>Dr. Angel Ramirez Solis</td>
    	               <td>General</td> 
    	            </tr>
    	            <tr>
    	                <td>Dra. Paulina Herrera Martinez</td>
    	                <td>General</td>
    	            </tr>
    	            <tr>
    	               <td>Dra. Daniela Vargas</td>
    	               <td>Ortopedista</td> 
    	            </tr>
    	            <tr>
    	                <td>Dr. Alan Silva Andrade</td>
    	                <td>Oftalmologo</td>
    	            </tr>
    	            <tr>
    	                <td>Dra. Angela Reyes Diaz</td>
    	                <td>Psiquiatra</td>
    	            </tr>
    	            <tr>
    	                <td>Dra. Maria Lopez Lopez</td>
    	                <td>Psiquiatra</td>
    	            </tr>
    	            <tr>
    	                <td>Dr. Mario Garay Hernandez</td>
    	                <td>Psiquiatra</td>
    	            </tr>
    	        </table>
    	       </div>
            </article>
            <article id="tab6">
                <h1>Instalaciones</h1>
    	        <h2>
               Nuestras instalaciones están diseñadas para hacer más cómoda su estancia y la de sus familiares. Además de que cumplen con estándares de calidad.
               </h2>
                <p>
                Además de que cumplen con estándares de calidad que garantizan al médico su buena práctica profesional en un marco de excelencia y digno entorno laboral.
                </p><br>
                <p>
                El hospital se distribuye principalmente en las siguientes áreas: consulta, urgencias, hospitalización, quirófano, servicios intermedios y generales.
                </p><br>
                <div class="slider">
                    <input type="radio" id="sboton1" name="sradio">
                    <label for="sboton1"></label>
                    <input type="radio" id="sboton2" name="sradio">
                    <label for="sboton2"></label>
                    <input type="radio" id="sboton3" name="sradio">
                    <label for="sboton3"></label>
                    <input type="radio" id="sboton4" name="sradio">
                    <label for="sboton4"></label>
                    <ul>
                        <li><img src="../Imagenes/Nosotros/Instalaciones/Instalaciones.jpg" alt=""></li>
                        <li><img src="../Imagenes/Nosotros/Instalaciones/Salas.jpg" alt=""></li>
                        <li><img src="../Imagenes/Nosotros/Instalaciones/Quirofano.jpg" alt=""></li>
                        <li><img src="../Imagenes/Nosotros/Instalaciones/Ofta.jpg" alt=""></li>
                    </ul>
                </div>
            </article>
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
</html>