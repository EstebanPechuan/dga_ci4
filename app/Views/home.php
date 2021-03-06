<main>
    <?php
        $clase['menu_activo'] = 'home';
        echo view('includes/hero', $clase);

        $clase['pilar_activo'] = 'null';
        echo view('includes/pilares', $clase);
    ?>

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
                <h3>Ciudadano Digital web donde podés acceder a tus servicios de una forma Rápida, Fácil y Segura</h3>
                <p>Podrás realizar distintos trámites y servicios digitales</p>
            </div>
            <div class="publi-button-compu">
                <a href="https://mi.sanjuan.gob.ar/" target="_blank">Ir a Ciudadano Digital</a>
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
                    <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imagen de Noticia">
                </div>
                <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                <a href="#c" target="_blank">Ver más</a>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imagen de Noticia">
                </div>
                <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                <a href="#c" target="_blank">Ver más</a>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                <a href="#c" target="_blank">Ver más</a>
            </div>

            <div class="card-noticias">
                <div class="card-noti">
                    <img src=" <?php echo base_url('public/img/card-noti.png') ?> " alt="Imágen de Noticia">
                </div>
                <h4>El CoPESJ avanza en la Elaboración de los planes estratégicos departamentales</h4>
                <p>Con más de 3.800 aportes documentados, se trabaja en Albardón. Caucete, 9 de Julio y San Martín</p>
                <a href="#c" target="_blank">Ver más</a>
            </div>
        </div>
    </section>

    <section class="cards-home-tramites">
        <div class="card-home-tramite">
            <a href="https://sanjuan.gob.ar/#dnwvZ29iaWVybm8vc2VydmljaW9zL2V4cGVkaWVudGVzL3MvX2ZfMkIzMzFDQzM0RDM0NEMzMTg3NURFRDVFMDUwNjBGQUEuaHRtbHxfdmFsaWRhY2lvbmVzfHx8fA==" target="_blank">
                <div class="card-home-img">
                    <img src=" <?php echo base_url('public/img/iconos/folder.png') ?> " alt="Icono Carpeta">
                </div>
                <div class="card-home-titulo">
                    <h3>Consulta de Expedientes</h3>
                </div>
            </a>
        </div>

        <div class="card-home-tramite">
            <a href="https://tramite.sanjuan.gob.ar/" target="_blank">
                <div class="card-home-img">
                    <img src=" <?php echo base_url('public/img/iconos/hands.png') ?> " alt="Icono Manos">
                </div>
                <div class="card-home-titulo">
                    <h3>Trámites</h3>
                </div>
            </a>
        </div>

        <div class="card-home-tramite">
            <a href="https://compraspublicas.sanjuan.gob.ar/" target="_blank">
                <div class="card-home-img">
                    <img src=" <?php echo base_url('public/img/iconos/document-mouse.png') ?> " alt="Icono Documento">
                </div>
                <div class="card-home-titulo">
                    <h3>Contrataciones</h3>
                </div>
            </a>
        </div>

        <div class="card-home-tramite">
            <a href="https://hacienda.sanjuan.gob.ar/#dnwvZ29iaWVybm8vcmVkbWluZS9jb25zdWx0YXMvcy9fZl9CMzcxOTJCQjMxMzM0NDQ1QjU0OEQ1QjgyQ0Y4OEIyQi5odG1sfF92YWxpZGFjaW9uZXN8fHx8" target="_blank">
                <div class="card-home-img">
                    <img src=" <?php echo base_url('public/img/iconos/chats.png') ?> " alt="Icono Conversación">
                </div>
                <div class="card-home-titulo">
                    <h3>Consultas y solicitudes</h3>
                </div>
            </a>
        </div>
    </section>

    <section class="links-utiles">
        <div class="link">
            <h4>Ministerio de Hacienda y Finanzas</h4>
            <a href="https://hacienda.sanjuan.gob.ar/" target="_blank">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Dirección Provincial de Informática</h4>
            <!-- A definir redirección -->
            <a href="https://dpi.sanjuan.gob.ar/" target="_blank">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Recaudación Impositiva</h4>
            <a href="https://rentas.dgrsj.gob.ar/contribuyentes/index.asp" target="_blank">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Régimen Federal de Responsabilidad Fiscal</h4>
            <a href="https://web.sanjuan.gob.ar/hacienda/wp-content/uploads/sites/6/2019/11/Regimen-Provincial-de-Responsabilidad-Fiscal-Municipal.pdf" target="_blank">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>
        
        <div class="link">
            <h4>Digesto Administrativo</h4>
            <a href="https://digesto.sanjuan.gob.ar/digesto/" target="_blank">
                Página Web <i class='bx bx-world'></i>
            </a>
        </div>

        <div class="link">
            <h4>Consulta de  Comprobantes de Pago y Rentenciones</h4>
            <a href="https://rentas.dgrsj.gob.ar/contribuyentes/index.asp" target="_blank">
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
                <h3>Descarga nuestra app y accede a tus servicios de una forma Rápida, Fácil y Segura</h3>
                <p>Podrás realizar distintos trámites y servicios digitales</p>
            </div>
            <div class="publi-buttons-celu">
                <a href="#c" target="_blank">
                    <img src=" <?php echo base_url('public/img/google-play.png') ?> " alt="Botón Google Play">
                </a>
                <a href="#c" target="_blank">
                    <img src=" <?php echo base_url('public/img/app-store.png') ?> " alt="Botón App Store">
                </a>
            </div>
        </div>
    </section>

    <?php
        echo view('includes/flyer_violencia');
    ?>    
</main>