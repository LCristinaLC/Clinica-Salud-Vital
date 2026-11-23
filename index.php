<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Clinica Salud Vital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css"> 
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>Inicio</li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="citas.php">Citas</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
   
    <main class="contenedorsobra">
        <section class="hero">
            <div class="hero-content">
                <h2 class="hero-etiqueta">Tu salud es nuestra prioridad</h2>
                <h1>Clinica Salud Vital </h1>
                <p>En Clínica Salud Vital ofrecemos atención médica de calidad con profesionales especializados y servicios a tu alcance.</p>
            </div>
            <div class="hero-acciones btn">
                <a href="#" class="btn-info">Solicitar más información</a>
                <a href="#" class="btn-servicios">Ver nuestros servicios</a>
            </div>
            <div class="hero-visual">
                <div class="hero-card">
                    <span class="hero-icon">+</span>
                    <h2>Clínica Salud Vital</h2>
                    <p>Atención médica de calidad con profesionales especializados.</p>
                </div>
            </div>
        </section>

        <section class="indicadores contenedor">
            <div class="indicador">
                <h3>Atención cercana</h3>
                <p>Trato personalizado y atención integral.</p>
            </div>

            <div class="indicador">
                <h3>Profesionales</h3>
                <p>Equipo especializado en diversas áreas.</p>
            </div>

            <div class="indicador">
                <h3>Compromiso</h3>
                <p>Tu bienestar lo primero.</p>
            </div>
        </section>

        <section class="seccion servicios contenedor">
            <div>
                <div class="seccion-cabecera">
                    <h2>Especialidades médicas</h2>
                    <p>Ponemos a tu disposicón diferentes especializades para cuidar tu salud.</p>
                </div>

                <div class="servicios-grid">
                    <article class="servicios-tarjeta">
                        <div class="servicios-icono"></div>
                            <h3>Medicina General</h3>
                            <p>Atención médica integral para toda la familia.</p>
                            <a href="#">Más información</a>
                    </article>

                    <article class="servicios-tarjeta">
                        <div class="servicios-icono"></div>
                            <h3>Cardiología</h3>
                            <p>Diagnóstico y tratamiento.</p>
                            <a href="#">Más información</a>
                    </article>

                    <article class="servicios-tarjeta">
                        <div class="servicios-icono"></div>
                            <h3>Cirugía estética</h3>
                            <p>Tratamientos para realzar tu belleza.</p>
                            <a href="#">Más información</a>
                    </article>

                    <article class="servicios-tarjeta">
                        <div class="servicios-icono"></div>
                            <h3>Traumatología</h3>
                            <p>Tratamiendo de lesiones y fracturas.</p>
                            <a href="#">Más información</a>
                    </article>

                    <article class="servicios-tarjeta">
                        <div class="servicios-icono"></div>
                            <h3>Neurología</h3>
                            <p>Tratamientos para el sistema nervioso y cerebro.</p>
                            <a href="#">Más información</a>
                    </article>

                    <article class="servicios-tarjeta">
                        <div class="servicios-icono"></div>
                            <h3>Análisis clínico</h3>
                            <p>Estudios y pruebas diagnósticas para evaluar tu salud.</p>
                            <a href="#">Más información</a>
                    </article>
                </div><!--Div del grid de servicios-->
            </div><!--div contenedor de los servicios médicos-->
        </section>
        
        <section class="seccion equipo contenedor">
            <div class="contenedor">
                <div class="seccion-cabecera">
                    <h2>Equipo de profesionales</h2>
                    <p>Un equipo comprometido con la atención médica cercana y de calidad</p>
                </div>
                <div class="equipo-grid">
                    <article class="profesional-tarjeta">
                        <div class="profesional-icono"></div>
                        <div class="profesional-info">
                            <h3>Dr. Gonzalez</h3>
                            <p>Medicina General</p>
                        </div>
                    </article>

                    <article class="profesional-tarjeta">
                        <div class="profesional-icono"></div>
                        <div class="profesional-info">
                            <h3>Dra. Eva Alcántara</h3>
                            <p>Traumatología</p>
                        </div>
                    </article>
                    <article class="profesional-tarjeta">
                        <div class="profesional-icono"></div>
                        <div class="profesional-info">
                            <h3>Dr. Eric Carrasco</h3>
                            <p>Pediatría</p>
                        </div>
                    </article>
                    <article class="profesional-tarjeta">
                        <div class="profesional-icono"></div>
                        <div class="profesional-info">
                            <h3>Dr. Carlos García</h3>
                            <p>Cardiología</p>
                        </div>
                    </article>
                    <article class="profesional-tarjeta">
                        <div class="profesional-icono"></div>
                        <div class="profesional-info">
                            <h3>Dra. Henar Martinez</h3>
                            <p>Neurología</p>
                        </div>
                    </article>
                    <article class="profesional-tarjeta">
                        <div class="profesional-icono"></div>
                        <div class="profesional-info">
                            <h3>Dr. Emilio Gonzalez</h3>
                            <p>Cirugía estética</p>
                        </div>
                    </article>
                    <article class="profesional-tarjeta">
                        <div class="profesional-icono"></div>
                        <div class="profesional-info">
                            <h3>Dra. Carmen Martinez.</h3>
                            <p>Psiquiatría</p>
                        </div>
                    </article>
                </div> <!--div equipo grid-->
            </div><!--div contenedor profesionales-->
        </section>

        <section class="contacto contenedor">
            <h2 class="contacto-etiqueta">Contacta con nosotros</h2>
            <div>
                <div class="contacto-contenido">
                    <div class="contacto-texto">
                        <h2>Estamos aquí para ayudarte.</h2>
                        <p>Si necesitas información sobre nuestros servicios puedes contactarnos en:</p>
                    </div>
                    <div class="contacto-datos">
                        <p>Calle Alcalá 1, Madrid, España</p>
                        <p>900 123 456</p>
                        <p>info@clinicasaludvital.com</p>
                    </div>
                </div> <!--div de contacto(numero y dirección)-->

                <div class="contacto-horario">            
                    <div class="title-horario">
                        <h3>Horario de atención:</h3>

                        <div class="horario-semana">
                            <span>Lunes a Viernes</span>
                            <strong>9:00 - 20:00</strong>
                        </div>
                        <div class="horario-sabado">
                            <span>Sábados</span>
                            <strong>9:00 - 15:00</strong>
                        </div>
                    </div> <!--div de horarios-->
                    <a href="mail to: info@clinicasaludvital.com">Escribe un correo</a>
                </div>
            </div> <!--div contenedor-->
        </section>
    </main>

    <footer class="footer">
        <div class="contenedor">
            <div class="footer-contenido">
                <strong>+ Clínica Salud Vital</strong>
                <p>Cuidamos de lo que más importa</p>
            </div>
        </div>

    </footer>

</body>
</html>