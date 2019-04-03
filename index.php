<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-58CTFMQ');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <title>BERKELEY | Alta dirección e innovación</title>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/scss/stylesheet.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- MATERIAL DESIGN LITE -->
    <link rel="stylesheet" href="assets/libs/mdl/material.min.css">
    <script src="assets/libs/mdl/material.min.js"></script>
    <script type="text/javascript" src="assets/js/logs.js"></script>
    <!-- MATERIALIZE -->
    <!-- <script src="assets/js/materialize.js"></script> -->
    <!-- <script src="assets/js/materialize.min.js"></script> -->
    <!-- Jquery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- Slick -->
    <link rel="stylesheet" href="assets/libs/slick/slick.css">
    <link rel="stylesheet" href="assets/libs/slick/slick-theme.css">
    <script type="text/javascript" src="assets/libs/slick/slick.js"></script>
    <!-- AOS animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico" />
</head>

<body>
        
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58CTFMQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Getting the querystring -->
    <?php
        $queryStringArray = array();
        foreach ($_GET as $key => $value) {
            $parameter = $key . "=" . $value;
            array_push($queryStringArray, $parameter);
        }
        $queryString = implode("&", $queryStringArray);
    ?>

    <header>
        <div class="header-container">
            <img class="Logo-one" src="assets/img/svg/logo-Berkeley-Executive-Education.svg" alt="BERKELEY">
            <!-- <img class="Logo-two" src="assets/img/png/logo-execed-150x81.png" alt="Executive Education"> -->
            <div class="dinamic">
                <div class="header-button">
                    <a class="opsBo fs16 blanco">
                        MÁS INFORMACIÓN
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Body -->
    <div class="space"></div>
    <!-- Sección Hero Imagen -->
    <div class="hero-container">
        <div class="hero-data">
        </div>
        <div class="hero-data-cont">
            <div class="data">
                <div class="banner opsBo fs16 amarillo15">
                    NUEVO PROGRAMA ONLINE EN ESPAÑOL
                </div>
                <div class="title opsBo fs30 blanco">
                    Alta dirección e innovación
                </div>
                <div class="subtitle opsBo fs20 blanco">
                    Berkeley Executive Education
                </div>
                <div class="fechas opsRe fs16 grisA7">
                    26 AGO. 2019 a 14 FEB. 2020 (6 MESES)
                </div>
                <div class="precio opsRe fs16 blanco">
                    Costo del curso:
                    <span class="opsBo">$27,000 USD</span>
                </div>
            </div>
        </div>
        <div class="formulario-container">
            <div class="formulario-cont">
                <div class="form" id="form">
                    <div class="form-title fs18 negro23">Para obtener más información, por favor llena el formulario
                    </div>
                    <form class="form-cont" id="fordesk" method="POST"
                        action="http://www2.eruditus.com/l/63132/2019-03-28/3l5l53p">

                        <div class="mdl-textfield mov-input mdl-js-textfield mdl-textfield--floating-label" style="width: 35%;">
                            <select id="salutation" name="salutation"
                                class="opsRe mdl-textfield__input salutation mov-input-class" required>
                                <option value=""></option>
                                <option value="Mr">Mr.</option>
                                <option value="Ms">Ms.</option>
                                <option value="Mrs">Mrs.</option>
                                <option value="Dr">Dr.</option>
                                <option value="Prof">Prof.</option>
                            </select>
                            <label class="mdl-textfield__label" for="salutation">Saludo</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 63%;">
                            <input class="opsRe mdl-textfield__input" type="text" id="first_name" name="first_name"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required style="text-transform: capitalize;">
                            <label class="opsRe mdl-textfield__label" for="first_name">Nombre(s)</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="opsRe mdl-textfield__input" type="text" id="last_name" name="last_name"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required style="text-transform: capitalize;">
                            <label class="opsRe mdl-textfield__label" for="last_name">Apellido(s)</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="opsRe mdl-textfield__input" type="email" id="email" name="email"
                                pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$" required>
                            <label class="opsRe mdl-textfield__label" for="email">Email</label>
                        </div>

                        <div class="mdl-textfield mov-input mdl-js-textfield mdl-textfield--floating-label">
                            <select id="country" name="country" class="mdl-textfield__input country mov-input-class"
                                required>
                            </select>
                            <label class="opsRe mdl-textfield__label" for="country">País</label>
                        </div>

                        <div class="mdl-textfield mov-input mdl-js-textfield mdl-textfield--floating-label">
                            <select id="00N9000000CnMwU" name="00N9000000CnMwU"
                                class="opsRe mdl-textfield__input 00N9000000CnMwU mov-input-class" required>
                                
                                <option value=""></option>
                                <option value="&gt; 20 Years">20 años</option>
                                <option value="15-20 Years">15-20 años</option>
                                <option value="10-15 Years">10-15 años</option>
                                <option value="&lt; 10 Years">Menos de 10 años</option>
                            </select>
                            <label class="mdl-textfield__label" for="00N9000000CnMwU">Experiencia Profesional</label>
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="opsRe mdl-textfield__input" type="tel" id="mobile" name="mobile"
                                maxlength="15" minlength="5" onkeypress="return valida(event)" pattern="[0-9]+"
                                required>
                            <label class="opsRe mdl-textfield__label" for="mobile">Número de celular</label>
                        </div>

                        <div class="button-container">
                            <input type="hidden" name="lead_source" id="lead_source" value="">
                            <input type="hidden" name="utm_source" id="utm_source" value="">
                            <input type="hidden" name="utm_medium" id="utm_medium" value="">
                            <input type="hidden" name="utm_term" id="utm_term" value="">
                            <input type="hidden" name="utm_content" id="utm_content" value="">
                            <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                            <input type="hidden" name="browser" id="browser" value="">
                            <input type="hidden" name="course" id="course" value="Berkeley - Alta Dirección e Innovación">
                            <!--This value is different in each in the pages-->
                            <input type="hidden" name="retURL" value="http://latam.eruditus.com/programas/Berkeley/Alta-Direccion-e-Innovacion/Thanks.php">
                            <button class="opsBo fs16 blanco" type="submit" id="btn-download-brochure">
                                Descarga el folleto
                            </button>
                        </div> <!-- button-container -->

                    </form>
                    <div class="private-data">
                        <div class="data">
                            Tus datos personales no serán compartidos con terceros.
                        </div>
                        <div>
                            <a class="grapBo fs14 rosaFB" href="https://www.eruditus.com/privacy-policy/"
                                target="_blank" rel="noopener noreferrer">
                                Política de Privacidad
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sección Información -->
    <div class="informacion-container">
        <div class="informacion-cont">
            <div class="informacion opsRe fs16 negro19" data-aos="fade-right" data-aos-delay="100">
                El autor Peter Drucker dijo una vez “la cultura se come a la estrategia
                para el desayuno”, y Bill Aulent del MIT añadió más tarde “y a la
                tecnología para el lunch”; y en efecto, la realidad es que de nada sirve
                tener una gran estrategia o los últimos “juguetes” tecnológicos si no se
                cuenta con una cultura capaz de convertirlos en activos de negocio... <span class="opsBo">y
                    con líderes con la visión y capacidad de vislumbrar, implementar y
                    cultivar dicha cultura.</span>
                <br>
                <br>
                Hablamos de personas capaces no solo de hacer frente al cambio, sino
                de adelantársele y ser parte del mismo. Líderes con el talento para
                transmitir su capacidad de adaptación a su ámbito empresarial y de
                proyectar una visión compartida de futuro a organizaciones enteras.
            </div>
            <div class="informacion opsRe fs16 negro19" data-aos="fade-right" data-aos-delay="200">
                El objetivo de este curso es justamente ese: detonar el talento de líderes
                con las bases y experiencia para potenciar su crecimiento e impulsar a
                sus empresas; individuos con el empuje y la ambición necesarios para
                actuar como agentes de cambio en sus organizaciones, industrias y sectores.
                <br>
                <br>
                Para ello, la Universidad de California en Berkeley -calificada
                consistentemente como una de las mejores a nivel mundial en los
                rankings internacionales- te ofrece una oportunidad de aprendizaje
                única para desarrollar tus habilidades de top management y de
                innovación de la mano de expertos mundialmente reconocidos en su
                campo, consolidando tu liderazgo y afinando tus capacidades directivas.
            </div>
        </div>
    </div>
    <!-- Sección Caracteristicas -->
    <div class="caracteristicas-container">
        <div class="caracteristicas-title ralBo fs28 azulB3">
            Características del programa
        </div>
        <div class="caracteristicas-cont">
            <div class="caracteristicas" data-aos="fade-up" data-aos-delay="100">
                <div class="caracteristica-img">
                    <img src="assets/img/svg/icono-programa-hibrido.svg" alt="PROGRAMA-HÍBRIDO">
                </div>
                <div class="caracteristica-info">
                    <div class="title grapBo fs18 negro19">
                        PROGRAMA HÍBRIDO
                    </div>
                    <div class="subtitle grapRe fs16 gris66">
                        3 módulos presenciales de 5 días en las instalaciones
                        de la Universidad de California en Berkeley + 2
                        módulos en línea.
                    </div>
                </div>
            </div>
            <div class="caracteristicas" data-aos="fade-up" data-aos-delay="100">
                <div class="caracteristica-img">
                    <img src="assets/img/svg/icono-exploracion-ecosistema.svg"
                        alt="EXPLORACIÓN-DEL-ECOSISTEMA-DE-SILICON-VALLEY">
                </div>
                <div class="caracteristica-info">
                    <div class="title grapBo fs18 negro19">
                        EXPLORACIÓN DEL
                        ECOSISTEMA DE SILICON
                        VALLEY
                    </div>
                    <div class="subtitle grapRe fs16 gris66">
                        4 visitas guiadas con altos
                        ejecutivos de gigantes de la
                        industria como Google y Facebook.
                    </div>
                </div>
            </div>
            <div class="caracteristicas" data-aos="fade-up" data-aos-delay="100">
                <div class="caracteristica-img">
                    <img src="assets/img/svg/icono-curso-espanol.svg" alt="CURSO-EN-ESPAÑOL">
                </div>
                <div class="caracteristica-info">
                    <div class="title grapBo fs18 negro19">
                        CURSO EN ESPAÑOL
                    </div>
                    <div class="subtitle grapRe fs16 gris66">
                        Los módulos en línea se imparten
                        en español; los presenciales y las
                        visitas se realizan con la asistencia
                        de un intérprete.
                    </div>
                </div>
            </div>
            <div class="caracteristicas" data-aos="fade-up" data-aos-delay="100">
                <div class="caracteristica-img">
                    <img src="assets/img/svg/icono-estudio-caso.svg" alt="ESTUDIO-DE-CASOS-Y-APRENDIZAJE-APLICADO">
                </div>
                <div class="caracteristica-info">
                    <div class="title grapBo fs18 negro19">
                        ESTUDIO DE CASOS Y APRENDIZAJE APLICADO
                    </div>
                    <div class="subtitle grapRe fs16 gris66">
                        A lo largo del curso analizarás
                        casos de negocio reales y podrás
                        aplicar lo aprendido a tu propia
                        organización.
                    </div>
                </div>
            </div>
            <div class="caracteristicas" data-aos="fade-up" data-aos-delay="100">
                <div class="caracteristica-img">
                    <img src="assets/img/svg/icono-aprendizaje-pares.svg" alt="APRENDIZAJE-ENTRE-PARES">
                </div>
                <div class="caracteristica-info">
                    <div class="title grapBo fs18 negro19">
                        APRENDIZAJE ENTRE PARES
                    </div>
                    <div class="subtitle grapRe fs16 gris66">
                        Con otros altos ejecutivos del ámbito empresarial latinoamericano.
                    </div>
                </div>
            </div>
            <div class="caracteristicas" data-aos="fade-up" data-aos-delay="100">
                <div class="caracteristica-img">
                    <img src="assets/img/svg/icono-costo-duracion.svg" alt="COSTO-Y-DURACIÓN">
                </div>
                <div class="caracteristica-info">
                    <div class="title grapBo fs18 negro19">
                        COSTO Y DURACIÓN
                    </div>
                    <div class="subtitle grapRe fs16 gris66">
                        El curso tiene una duración de 6
                        meses y un costo de $27,000 USD
                        si se realiza la aplicación antes
                        del 30 de abril, y $29,000 USD si
                        la aplicación se realiza después
                        del 1 de mayo.
                    </div>
                </div>
            </div>
        </div>
        <div class="financiamiento">
            <div class="financiamiento-title opsBo fs14 negro19">
                *Financiamiento
            </div>
            <div class="financiamiento-desc opsRe fs14 negro19">
                En este programa el alumno tiene la oportunidad de financiar sus estudios a través de financieras
                locales.
                En el caso de México, se ofrece esta posibilidad vía Laudex, institución financiera no bancaria que
                apoya a
                estudiantes graduados y por graduarse con préstamos para acceder a educación en universidades
                privadas. Para más información enviar un correo a: <a class="naranja33"
                    href="mailto:latam.berkeley@eruditus.com">latam.berkeley@eruditus.com</a>
            </div>
        </div>
    </div>
    <!-- Sección Silicon World-->
    <div class="silicon-container">
        <div class="silicon-title ralBo fs28 blanco">
            It’s a Silicon World.
        </div>
        <div class="silicon-desc opsRe fs16 blanco">
            Hasta hace no mucho tiempo, el mundo de la tecnología digital
            se regía por reglas distintas a las de otras industrias. Hoy,
            las plataformas digitales, los nuevos modelos de negocio y un
            sin número de factores disruptivos han difuminado esas barreras
            y demandan nuevas tácticas y estrategias independientemente del
            sector en el que uno se desempeñe. Hablamos ya no de un silicon
            valley, sino de un silicon world. Por eso, <span class="azulB9 opsBo">
                este programa contempla 4 visitas guiadas a gigantes de la industria
                como Google y Facebook, </span>con el fin de analizar cómo sus
            experiencias y aprendizajes pueden ser aplicados en otros
            campos de actividad profesional.
        </div>
    </div>
    <!-- Sección Perfil de principiante-->
    <div class="perfil-participante-container">
        <div class="perfil-title ralBo fs28 azulB3">
            Perfil del participante
        </div>
        <div class="perfil-subtitle opsRe fs18 negro19">
            El Programa de Alta Dirección e Innovación esta diseñado para líderes
            empresariales con un alto nivel de experiencia y progreso profesional;
            así como con la ambición y sed de innovación necesarios para llevar
            sus capacidades directivas y el potencial de su organización a un nuevo
            nivel. En otras palabras, este curso ha sido pensado para...
        </div>
        <div class="perfil-container-flex">
            <div class="perfil-cont">
                <div class="perfil" data-aos="zoom-in" data-aos-delay="100">
                    <div class="desc opsRe fs15 blanco">
                        CXOs, directores, presidentes,
                        vicepresidentes, gerentes senior
                        y otros líderes empresariales en
                        diversas funciones de negocio,
                        desde marketing hasta finanzas.
                    </div>
                </div>
                <div class="perfil" data-aos="zoom-in" data-aos-delay="200">
                    <div class="desc opsRe fs15 blanco">
                        Ejecutivos con 10-20 años de
                        experiencia en posiciones
                        gerenciales, puestos directivos
                        y roles de liderazgo.
                    </div>
                </div>
                <div class="perfil" data-aos="zoom-in" data-aos-delay="300">
                    <div class="desc opsRe fs15 blanco">
                        Altos ejecutivos de América Latina
                        o profesionales con intensa actividad
                        empresarial en la región, con un alto
                        nivel de experiencia y progreso
                        profesional.
                    </div>
                </div>
                <div class="perfil" data-aos="zoom-in" data-aos-delay="400">
                    <div class="desc opsRe fs15 blanco">
                        Emprendedores de alto nivel,
                        con experiencia, ambición y
                        sed de innovación de cualquier
                        industria o sector.
                    </div>
                </div>
            </div>
            <div class="ejemplo-cont">
                <div class="ejemplo-title opsBo fs18 negro19">
                    EJEMPLOS
                </div>
                <div class="ejemplos">
                    <ul class="lista-ejemplos">
                        <li class="opsRe fs16 azulBF"><span class="gris66">Director de Servicio a Clientes- Servicios
                                de TI</span></li>
                        <li class="opsRe fs16 azulBF"><span class="gris66">Project Manager – Servicios de
                                Infraestructura</span></li>
                        <li class="opsRe fs16 azulBF"><span class="gris66">Brand Marketing Manager – FMCG</span></li>
                        <li class="opsRe fs16 azulBF"><span class="gris66">Product Manager – Telecom</span></li>
                        <li class="opsRe fs16 azulBF"><span class="gris66">Director de Banca Corporativa– Servicios
                                Financieros</span></li>
                        <li class="opsRe fs16 azulBF"><span class="gris66">Ventas Regionales y Líder de Marketing -
                                Pharma / Servicios Financieros / Productos de TI</span></li>
                        <li class="opsRe fs16 azulBF"><span class="gris66">Director Financiero – Empresa de
                                manufactura</span></li>
                        <li class="opsRe fs16 azulBF"><span class="gris66">VP de Operaciones – Hospitalidad</span></li>
                        <li class="opsRe fs16 azulBF"><span class="gris66">Analista de Negocios Senior – Industria
                                automotriz</span></li>
                        <li class="opsRe fs16 azulBF"><span class="gris66">Director Asociado de Servicios Profesionales
                                - Consultoría</span></li>
                        <li class="opsRe fs16 azulBF"><span class="gris66">Director General de Operaciones de Entrega –
                                Servicios de TI</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sección Perfil de egreso -->
    <div class="perfil-egreso-container">
        <div class="perfil-title ralBo fs28 azulB3">
            Perfil de egreso
        </div>
        <div class="perfil-subtitle opsRe fs18 negro19">
            El Programa de Alta Dirección e Innovación prepara a sus participantes para
            aplicar aprendizajes clave del ecosistema de Berkeley y de Silicon Valley a
            su propio ámbito y contexto profesional; los provee con la experiencia y
            conocimientos necesarios para tomar decisiones de negocio informadas a nivel
            organizacional, y los prepara para desempeñarse como líderes responsivos y
            responsables en un contexto global exponencialmente interconectado e
            interdependiente.
        </div>
        <div class="egreso-title opsBo fs18 negro19">
            Para alcanzar este objetivo, al completar ese curso sus egresados habrán aprendido a...
        </div>
        <div class="perfil-egreso-cont">
            <div class="egreso ralRe fs16 blanco" data-aos="zoom-in" data-aos-delay="100">
                Identificar prácticas y tendencias clave para
                liderar equipos, negocios y organizaciones de
                alto desempeño.
            </div>
            <div class="egreso ralRe fs16 blanco" data-aos="zoom-in" data-aos-delay="200">
                Aplicar marcos de referencia para el desarrollo
                de estrategias de negocio a lo largo de cadenas
                de valor.
            </div>
            <div class="egreso ralRe fs16 blanco" data-aos="zoom-in" data-aos-delay="300">
                Adquirir una visión holística de la cadena de
                operaciones de un negocio, con énfasis en el
                manejo de productos y servicios.
            </div>
            <div class="egreso ralRe fs16 blanco" data-aos="zoom-in" data-aos-delay="100">
                Desarrollar un expertise financiero sobre las
                aportaciones de la analítica de datos (business
                analytics) a la toma de decisiones de negocio.
            </div>
            <div class="egreso ralRe fs16 blanco" data-aos="zoom-in" data-aos-delay="200">
                Impulsar una estrategia organizacional en ambientes
                de innovación, haciendo las preguntas pertinentes
                para la acertada toma de decisiones.
            </div>
            <div class="egreso ralRe fs16 blanco" data-aos="zoom-in" data-aos-delay="300">
                Generar un plan de negocio para su organización
                con el propósito de abrir un área, enfrentar un
                desafío o aprovechar una oportunidad de negocio.
            </div>
        </div>
    </div>
    <!-- Sección Profesor -->
    <div class="profesor-container">
        <div class="profesor-title ralBo fs28 azulB3">
            Profesor
        </div>
        <div class="profesor-subtitle grapRe fs18 negro19">
            Este programa es liderado por profesores de clase
            mundial que, además, son reconocidos investigadores
            y miembros de organizaciones de primer nivel.
        </div>
        <div class="profesor-cont">
            <div class="profesor-desc">
                <div class="profesor-desc-cont">
                    <div class="profesor-img">
                        <img src="assets/img/jpg/profesor-asociado-Ernesto-Dal-Bo-PhD.jpg" alt="Ernesto-Dal-Bó-PhD">
                    </div>
                    <div class="profesor-data">
                        <div class="grapRe fs24 negro19">Ernesto Dal Bó PhD</div>
                        <div class="opsBo fs16 negro4D">Investigador y profesor titular</div>
                        <div class="grapRe fs16 negro4D">Co-director del Centro para la Economía y Política de Berkeley
                        </div>
                    </div>
                </div>
                <hr>
                <div class="profesor-description grapRe fs14 negro46">
                    El profesor Dal Bó es autor y co-autor de una amplia variedad de estudios
                    sobre corrupción y coerción en gobierno. Su trabajo como investigador ha
                    contado con la colaboración activa de países como la India, México y Paraguay.
                    Licenciado y Maestro en Economía por la Universidad de Buenos Aires y la
                    Universidad de Oxford, respectivamente, se desempeña como co-director
                    del Centro para la Economía y Política de la Universidad de California en Berkeley.
                </div>
            </div>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/1l18jnBYgWw" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- Sección Tutores Expertos -->
    <div class="tutores-expertos-container">
        <div class="tutores-expertos-title ralBo fs28 azulB3">
            Profesores asociados
        </div>
        <div class="tutor-cont">
            <div class="tutor">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="assets/img/jpg/profesor-asociado-Gustavo-Manso.jpg" alt="Gustavo-Manso,-Phd">
                    </div>
                    <div class="tutor-data">
                        <div class="grapRe fs24 negro19">Gustavo Manso, Phd</div>
                        <div class="opsBo fs16 gris6E">
                            Miembro distinguido de enseñanza en Haas Finance Group.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description grapRe fs14 negro46">
                    Doctor en Finanzas por la Stanford Graduate School of
                    Business, ha sido profesor asistente de finanzas y profesor
                    de administración en el desarrollo de carrera en la
                    MIT Sloan School of Management. Co-fundador y miembro
                    del consejo del Finance Theory Group, ha participado
                    como revisor en revistas como American Economic Review,
                    el Economic Inquiry Journal y el Journal of Accounting
                    Research.
                </div>
            </div>
            <div class="tutor">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="assets/img/jpg/profesor-asociado-Frederico-Finan.jpg" alt="Frederico-Finan,-PhD">
                    </div>
                    <div class="tutor-data">
                        <div class="grapRe fs24 negro19">Frederico Finan, PhD</div>
                        <div class="opsBo fs16 gris6E">
                            Profesor asociado de Economía y Administración de Negocios
                        </div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description grapRe fs14 negro46">
                    Doctor en Agricultura y Recursos Económicos por la
                    Universidad de California en Berkeley, se ha desempeñado
                    como profesor asistente de economía en UCLA y se unió
                    a la facultad de Berkeley en el 2009. Actualmente es
                    miembro del Bureau for Research and Economic Analysis
                    of Development (BREAD),y miembro investigador de la
                    International Zeolite Association (IZA) y el National
                    Bureau of Economic Research (NBER).
                </div>
            </div>
            <div class="tutor">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img src="assets/img/jpg/profesor-asociado-Demian-Pouzo.jpg" alt="Demian-Pouzo-PhD">
                    </div>
                    <div class="tutor-data">
                        <div class="grapRe fs24 negro19">Demian Pouzo PhD</div>
                        <div class="opsBo fs16 gris6E">
                            Doctor en Economía por la Universidad de Nueva York
                        </div>
                    </div>
                </div>
                <hr>
                <div class="tutor-description grapRe fs14 negro46">
                    El doctor Pouzo es un reconocido investigador y conferencista.
                    Actualmente, sus investigaciones abordan temas de teoría econométrica
                    y macroeconomía. Profesor asistente en Berkeley desde el 2009,
                    es también un autor publicado en múltiples journals académicos.
                </div>
            </div>
        </div>
    </div>
    <!-- Sección Plan de estudios -->
    <div class="plan-de-estudios-container">
        <div class="plan-de-estudios-title ralBo fs28 azulB3">
            Plan de estudios
        </div>
        <div class="modulos-container">
            <ul class="collapsible">
                <li class="modulo-cont">
                    <div class="collapsible-header grapRe fs16">
                        <div class="No opsBo fs18 verde33">Módulo 1</div>
                        <div class="module-title">
                            <div class="opsBo fs18 negro23">
                                (PRESENCIAL)-26-30 de agosto de 2019
                            </div>
                            <div class="contenido opsRe fs16 gris6E">
                                • Herramientas financieras e innovación en la administración
                                <br>
                                • Gestión Macro y de Mercadotecnia
                                <br>
                                • Marketing estratégico, gestión de marketing (CRM) y posicionamiento competitivo
                                <br>
                                • Modelos de negocio y liderazgo empresarial
                                <br>
                                • Analítica de negocios, pensamiento estratégico e innovación
                                <br>
                                • Sesión de experiencias: visita
                            </div>
                        </div>
                    </div>
                </li>
                <li class="modulo-cont">
                    <div class="collapsible-header grapRe fs16">
                        <div class="No opsBo fs18 verde33">Módulo 2</div>
                        <div class="module-title">
                            <div class="opsBo fs18 negro23">
                                (EN LÍNEA) – 2 de septiembre al 1 de noviembre de 2019
                            </div>
                            <div class="contenido opsRe fs16 gris6E">
                                • Webinar + Actividad: Analítica y ciencia de datos
                                <br>
                                • Actividad práctica: Negociaciones e influencia
                                <br>
                                • Proyecto Final - Etapa 1. Inicio y Planeación
                            </div>
                        </div>
                    </div>
                </li>
                <li class="modulo-cont">
                    <div class="collapsible-header grapRe fs16">
                        <div class="No opsBo fs18 verde33">Módulo 3</div>
                        <div class="module-title">
                            <div class="opsBo fs18 negro23">
                                (PRESENCIAL) – 4-8 de noviembre de 2019
                            </div>
                            <div class="contenido opsRe fs16 gris6E">
                                • Innovación disruptiva y mindset empresarial
                                <br>
                                • Administración de Mercadotecnia y Estrategia
                                <br>
                                • Gestión de marketing, marketing digital y estrategias para mercados competitivos
                                <br>
                                • Workshop de gestión política y economía en latinoamérica
                                <br>
                                • Economía política, negociaciones e influencia
                                <br>
                                • Machine learning e inteligencia artificial para la gestión de negocios
                                <br>
                                • Workshop de decisiones de negocio basadas en big data
                            </div>
                        </div>
                    </div>
                </li>
                <li class="modulo-cont">
                    <div class="collapsible-header grapRe fs16">
                        <div class="No opsBo fs18 verde33">Módulo 4</div>
                        <div class="module-title">
                            <div class="opsBo fs18 negro23">
                                (EN LÍNEA) – 11 de noviembre de 2019 al 8 de febrero de 2020
                            </div>
                            <div class="contenido opsRe fs16 gris6E">
                                • Webinar + Acrtividad: Estrategias para negocios digitales y transformación digital
                                <br>
                                • Actividad práctica: Contabilidad Financiera y Administrativa
                                <br>
                                • Proyecto Final -Etapa 2: Revisión parcial y desarrollo
                            </div>
                        </div>
                    </div>
                </li>
                <li class="modulo-cont">
                    <div class="collapsible-header grapRe fs16">
                        <div class="No opsBo fs18 verde33">Módulo 5</div>
                        <div class="module-title">
                            <div class="opsBo fs18 negro23">
                                (PRESENCIAL) – 11-15 de febrero de 2020
                            </div>
                            <div class="contenido opsRe fs16 gris6E">
                                • Finanzas y desarrollo de mindset empresarial
                                <br>
                                • Workshop de ecosistemas de innovación
                                <br>
                                • Herramientas financieras y motivación para el emprendimiento y la innovación
                                <br>
                                • Workshop de liderazgo, comunicación e influencia
                                <br>
                                • Impulso para el cambio y la ejecución dinámica
                                <br>
                                • DNA adaptativo para la gestión del cambio
                                <br>
                                • Liderazgo de equipos dinámicos de óptimo desempeño
                                <br>
                                • Presentación del capstone strategy Project a panel de profesores
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Sección Certificado -->
    <div class="certificado-container">
        <div class="certificado-title ralBo fs28 blanco">
            Certificado Oficial
        </div>
        <div class="certificado-subtitle opsRe fs20 blanco">
            Al concluir satisfactoriamente el programa,
            los participantes son reconocidos con un
            certificado oficial de conclusión de estudios
            respaldado por la Universidad de California
            en Berkeley.
        </div>
        <div class="certificado-button">
            <a href="https://eruditus.secure.force.com/SMAI" target="_blank" rel="noopener noreferrer" class="btn-certificate opsBo fs16 blanco"
                id="btn-apply-now">
                APLICAR
            </a>
        </div>
    </div>
    <!-- Sección Oportunidades -->
    <div class="oportunidades-container">
        <div class="oportunidades-descripcion opsRe fs20 negro46">
            Adicionalmente, tendrán acceso a todos los
            <a class="anaranjado77" href="https://www.haas.berkeley.edu/groups/alumni/benefits/" target="_blank"
                rel="noopener noreferrer">beneficios de los egresados de Berkeley-Hass,</a>
            entre los que destacan:
        </div>
        <div class="oportunidades-cont">
            <div class="oportunidad" data-aos="fade-up" data-aos-delay="100">
                <div class="oportunidad-img">
                    <img src="assets/img/svg/icono-oportunidades-networking.svg" alt="Oportunidades-de-networking">
                </div>
                <div class="oportunidad-title opsBo fs20 negro46">
                    Oportunidades de networking
                </div>
                <div class="oportunidad-descripcion opsRe fs16 negro46">
                    A través de nuestra red mundial de egresados y eventos especiales.
                </div>
            </div>
            <div class="oportunidad" data-aos="fade-up" data-aos-delay="200">
                <div class="oportunidad-img">
                    <img src="assets/img/svg/icono-oportunidades-desarrollo.svg" alt="Oportunidades-de-desarrollo">
                </div>
                <div class="oportunidad-title opsBo fs20 negro46">
                    Oportunidades de desarrollo
                </div>
                <div class="oportunidad-descripcion opsRe fs16 negro46">
                    Cortesía de nuestra bolsa de trabajo y programas de educación continua.
                </div>
            </div>
            <div class="oportunidad" data-aos="fade-up" data-aos-delay="300">
                <div class="oportunidad-img">
                    <img src="assets/img/svg/icono-oportunidades-aprendizaje.svg" alt="Oportunidades-de-aprendizaje">
                </div>
                <div class="oportunidad-title opsBo fs20 negro46">
                    Oportunidades de aprendizaje
                </div>
                <div class="oportunidad-descripcion opsRe fs16 negro46">
                    Acceso a investigaciones, publicaciones y casos de estudio
                    con insights de estrategia corporativa e innovación.
                </div>
            </div>
        </div>
    </div>
    <!-- Sección Footer -->
    <footer>
        <div class="universidad-info">
            <div class="universidad-img">
                <img src="assets/img/svg/logo-Berkeley-EE.svg" alt="Berkeley-Logo">
            </div>
            <div class="universidad-descripcion">
                <div class="descripcion opsBo fs16 blanco">
                    Sobre la universidad de Berkeley
                </div>
                <div class="descripcion opsRe fs14 blanco">
                    Fundada en 1868, la Universidad de California en
                    Berkeley es considerada como una de las mejores
                    instituciones de educación superior a nivel mundial
                    por los rankings internacionales; su oferta educativa
                    incluye más de 300 programas en multiplicidad de
                    campos y sus alumnos y profesores son acreedores
                    de 22 premios nobel.
                </div>
            </div>
        </div>
        <div class="pages">
            <a class="grapRe fs14 blanco" href="https://www.eruditus.com/terms-of-service/" target="_blank"
                rel="noopener noreferrer">Términos de servicio</a>
            <a class="grapRe fs14 blanco" href="https://www.eruditus.com/privacy-policy/" target="_blank"
                rel="noopener noreferrer">Política de privacidad</a>
            <a class="grapRe fs14 blanco" href="https://www.eruditus.com/cookie-policy/" target="_blank"
                rel="noopener noreferrer">Política de cookies</a>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            //offset: 120, // offset (in px) from the original trigger point
            //delay: 0, // values from 0 to 3000, with step 50ms
            //duration: 400, // values from 0 to 3000, with step 50ms
            //easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
</body>
<!-- Populating the countrie, using a function in Countries Script added at the top of this file. -->
<script type="text/javascript" src="https://latam.emeritus.org/programas/assets/js/countries-latam-update.js"></script>
<script type="text/javascript">
    populateCountries("country");
</script>
<!--
        Inline script provided by Ruchira's team. It is in charge of reading the params in the URL and inserting them into the
        form hidden fields to be sent to the provided web service.
    -->
<script type="text/javascript">
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
        var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    jQuery(document).ready(function () {
        jQuery('#lead_source').val(getParameterByName("utm_source"));
        jQuery('#utm_source').val(getParameterByName("utm_source"));
        jQuery('#utm_medium').val(getParameterByName("utm_medium"));
        jQuery('#utm_content').val(getParameterByName("utm_content"));
        jQuery('#utm_campaign').val(getParameterByName("utm_campaign"));
        jQuery('#utm_term').val(getParameterByName("utm_term"));
    })
</script>


<!-- Inline script provided by Ruchira's team. It is in charge of inserting the Pardot's script. -->
<script type="text/javascript">
    piAId = '135351';
    piCId = '1429';

    (function () {
        function async_load() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.src = ('https:' == document.location.protocol ? 'https://pi' : 'https://cdn') +
                '.pardot.com/pd.js';
            var c = document.getElementsByTagName('script')[0];
            c.parentNode.insertBefore(s, c);
        }


        if (window.attachEvent) {
            window.attachEvent('onload', async_load);
        } else {
            window.addEventListener('load', async_load, false);
        }

    })();
</script>
<script src="assets/js/main.js"></script>
<script src="assets/js/onkeypress.js"></script>

</html>