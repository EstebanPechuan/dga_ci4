<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGA</title>

    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- Estilos DGA -->
    <link rel="stylesheet" href=" <?php echo base_url('public/css/style.css') ?> ">
    <link rel="stylesheet" href=" <?php echo base_url('public/css/media.css') ?> ">
</head>
<body>
    
    <header>
        <img src=" <?php echo base_url('public/img/linea-header.png') ?> " alt="Divisoria Gobierno">
        <nav>
            <div class="logo">
                <img src=" <?php echo base_url('public/img/logo-header.png') ?> " alt="Logo Gobierno San Juan">
            </div>
            <ul>
                <li><a href="#">INICIO</a></li>
                <li><a href="#">NOSOTROS</a></li>
                <li><a href="#">PILARES</a></li>
                <li><a href="#">CONTACTO</a></li>
            </ul>
        </nav>
    </header>


    <main>
        <section class="hero">
            <h1>Bienvenid@ a Gobierno Abierto</h1>
            <h3>Innovación Tecnológica</h3>

            <form action="./index.html" method="POST">
                <input type="text">
                <div class="home-hero-submit">
                    <input type="submit" value="">
                    <div class="">
                        <p>Buscar</p>
                        <i class='bx bx-search'></i>
                    </div>
                </div>
            </form>
        </section>

        <div class="nav-secundario">
            <ul>
                <li><a href="#c" class="li-active">INICIO</a></li>
                |
                <li><a href="#c">DGA</a></li>
                |
                <li><a href="#c">PILARES</a></li>
                |
                <li><a href="#c">CONTACTO</a></li>
            </ul>
        </div>

        <section class="nav-pilares">
            <h2>PILARES</h2>
            <div class="cards-pilares">
                <div class="card-pilares">
                    <a href="#c">INNOVACIÓN TECNOLOGÍCA</a>
                </div>
                <div class="card-pilares">
                    <a href="#c">TRANSPARENCIA</a>
                </div>
                <div class="card-pilares">
                    <a href="#c">COLABORACIÓN</a>
                </div>
                <div class="card-pilares">
                    <a href="#c">PARTICIPACIÓN</a>
                </div>
            </div>
        </section>

        <section class="que-es-ga">
            <div class="que-es-info">
                <h3>Qué es Gobierno Abierto</h3>
                <p>El Gobierno de la Provincia trabaja bajo el paradigma de Gobierno Abierto sustentado en tres pilares: <strong>la transparencia, la colaboración y la participación</strong>, priorizando a la innovación como transversal a todos los procesos.</p>
            </div>
            <div class="que-es-logo">
                <img src=" <?php echo base_url('public/img/gob-san-juan.png') ?> " alt="Logo Gobierno San Juan">
            </div>
        </section>

        <section class="publi-cidi-compu">
            <div class="publi-info-compu">
                <div class="publi-texto-compu">
                    <h3>Ciudadano Digital web donde podes acceder a tus servivios de una forma Rápida, Fácil y Segura</h3>
                    <p>Podrás realizar distintos trámites y servicios digitales</p>
                </div>
                <div class="publi-button-compu">
                    <a href="#c">Ir a Ciudadano Digital</a>
                </div>
            </div>
            <div class="publi-img-compu">
                <img src=" <?php echo base_url('public/img/mockup-compu.png') ?> " alt="MockUp Computadora">
            </div>
        </section>

        <section class="noticias-home">
            <h2>Noticias</h2>
            <div class="cards-noticias">
                <div class="card-noticias">
                    <div class="card-noti">
                        <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imágen de Noticia">
                    </div>
                    <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                    <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                    <a href="#c">Ver más</a>
                </div>

                <div class="card-noticias">
                    <div class="card-noti">
                        <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imágen de Noticia">
                    </div>
                    <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                    <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                    <a href="#c">Ver más</a>
                </div>

                <div class="card-noticias">
                    <div class="card-noti">
                        <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imágen de Noticia">
                    </div>
                    <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                    <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                    <a href="#c">Ver más</a>
                </div>

                <div class="card-noticias">
                    <div class="card-noti">
                        <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imágen de Noticia">
                    </div>
                    <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                    <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                    <a href="#c">Ver más</a>
                </div>
            </div>
        </section>

        <section class="cards-home-tramites">
            <div class="card-home-tramite">
                <div class="card-home-img">
                    <img src=" <?php echo base_url('public/img/iconos/folder.png') ?> " alt="Icono Carpeta">
                </div>
                <div class="card-home-titulo">
                    <h3>Consultas de Expedientes</h3>
                </div>
            </div>

            <div class="card-home-tramite">
                <div class="card-home-img">
                    <img src=" <?php echo base_url('public/img/iconos/hands.png') ?> " alt="Icono Manos">
                </div>
                <div class="card-home-titulo">
                    <h3>Trámites</h3>
                </div>
            </div>

            <div class="card-home-tramite">
                <div class="card-home-img">
                    <img src=" <?php echo base_url('public/img/iconos/document-mouse.png') ?> " alt="Icono Documento">
                </div>
                <div class="card-home-titulo">
                    <h3>Contrataciones</h3>
                </div>
            </div>

            <div class="card-home-tramite">
                <div class="card-home-img">
                    <img src=" <?php echo base_url('public/img/iconos/chats.png') ?> " alt="Icono Conversación">
                </div>
                <div class="card-home-titulo">
                    <h3>Consultas y solicitudes</h3>
                </div>
            </div>
        </section>

        <section class="links-utiles">
            <div class="link">
                <h4>Ministerio de Hacienda y Finanzas</h4>
                <a href="#c">
                    Página Web <i class='bx bx-world'></i>
                </a>
            </div>

            <div class="link">
                <h4>Dirección Provincial de Informática</h4>
                <a href="#c">
                    Página Web <i class='bx bx-world'></i>
                </a>
            </div>

            <div class="link">
                <h4>Recaudación Impositiva</h4>
                <a href="#c">
                    Página Web <i class='bx bx-world'></i>
                </a>
            </div>

            <div class="link">
                <h4>Régimen Federal de Responsabilidad Fiscal</h4>
                <a href="#c">
                    Página Web <i class='bx bx-world'></i>
                </a>
            </div>
            
            <div class="link">
                <h4>Digesto Administrativo</h4>
                <a href="#c">
                    Página Web <i class='bx bx-world'></i>
                </a>
            </div>

            <div class="link">
                <h4>Consulta de  Comprobantes de Pago y Rentenciones</h4>
                <a href="#c">
                    Página Web <i class='bx bx-world'></i>
                </a>
            </div>
        </section>

        <section class="publi-cidi-celu">
            <div class="publi-img-celu">
                <img src=" <?php echo base_url('public/img/mockup-celu.png') ?> " alt="MockUp Celulares">
            </div>
            <div class="publi-info-celu">
                <div class="publi-texto-celu">
                    <h3>Descarga nuestra app y accede a tus servivios de una forma Rápida, Fácil y Segura</h3>
                    <p>Podrás realizar distintos trámites y servicios digitales</p>
                </div>
                <div class="publi-buttons-celu">
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/google-play.png') ?> " alt="Botón Google Play">
                    </a>
                    <a href="#c">
                        <img src=" <?php echo base_url('public/img/app-store.png') ?> " alt="Botón App Store">
                    </a>
                </div>
            </div>
        </section>

        <div class="flyer-violencia">
            <img src=" <?php echo base_url('public/img/purple-bg.png') ?> " alt="Flyer Violencia">
        </div>
    </main>

    <footer>
        <div class="logo-redes">
            <img src=" <?php echo base_url('public/gob_sanjuan_logo_footer.svg') ?> " alt="Logo Gobierno footer">
            <div class="footer-redes">
                <i class='bx bxl-facebook-square'></i>
                <i class='bx bxl-instagram'></i>
                <i class='bx bxl-youtube' ></i>
            </div>
        </div>
        <div class="direccion">
            <h3>Dirección</h3>
            <p>
                Av. Libertador Gral. San Martín 750
                <br>
                Oeste - Capital.
                <br>
                Centro Cívico, 2° Piso.
                <br>
                Conmutador: 264 430 5000.
                <br>
                Teléfono: 264 430 6848/6854.
            </p>
        </div>
        <div class="tramites-servicios">
            <h3>Trámites y Servicios</h3>
            <ul>
                <li>
                    <a href="#c">Expedientes</a>
                </li>
                <li>
                    <a href="#c">Contrataciones</a>
                </li>
                <li>
                    <a href="#c">Trámites</a>
                </li>
                <li>
                    <a href="#c">Consultas y Servicios</a>
                </li>
                <li>
                    <a href="#c">Acceso a Webmail</a>
                </li>
            </ul>
        </div>
        <div class="accesos-directos">
            <h3>Accesos Directos</h3>
            <ul>
                <li>
                    <a href="#c">Autoridades</a>
                </li>
                <li>
                    <a href="#c">Boletín oficial</a>
                </li>
                <li>
                    <a href="#c">OSSE</a>
                </li>
                <li>
                    <a href="#c">EPSE</a>
                </li>
                <li>
                    <a href="#c">Caja de Acción Social</a>
                </li>
                <li>
                    <a href="#c">Agencia de San Juan de Desarrollo de Inversiones</a>
                </li>
            </ul>
        </div>
    </footer>
    
</body>
</html>