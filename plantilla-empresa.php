<?php 
/*
*
* 	Template Name: empresa
* 	
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASOPROPIRD</title>
    <script src="https://kit.fontawesome.com/2f546a1745.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://asopropird.com/css/page.css">
    <link rel="stylesheet" href="https://asopropird.com/css/miembros.css">
    <?php wp_head();?>
</head>

<body>
    <header>
        <div class="capa-oscura-10">
            <div class="contenedor_boton_menu">
                <div id="boton_menu" class="boton_menu">
                    <div id="mini_menu"></div>
                </div>
            </div>
            <div id="menu_desplegable" class="oculto2">
                <?php wp_nav_menu( 
                array( 
                    'theme_location' => 'header-menu',
                    'container'       => 'nav',
                    'container_class' => 'oculto',
                    'container_id'   => 'contenedor_nav',
                    'items_wrap'      => '<ul>%3$s</ul>'
                    ) );?>
            </div>
        </div>
    </header>
    <div id="enunciado" class="bg-empresa">
        <div class="capa-oscura-50">
            <div class="titulo-miembros">
                <h1>SOCIO COMO <br> EMPRESA</h1>
            </div>
            <div class="contenedor-miembros-icon">
                <div class="mini-img-tipo-socio">
                    <img class="icono-empresa" src="https://asopropird.com/img/factory-icon color.svg" alt="icono">
                </div>
            </div>
        </div>
    </div>
    <div class="contenido">
        <h2>BENEFICIOS</h2>
        <div class="columnas-beneficios">
            <div class="columna">
                <ul>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Pertenecer a la Asociación de
                        Profesionales de la
                        Piscina República Dominicana.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Facilidad de acceso a
                        servicios en condiciones
                        ventajosas frente a empresas profesionales mediante la suscripción de convenios de cooperación
                        con colaboradores y prestadores de servicios.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Acceso a plataforma de
                        contacto entre nuestras
                        empresas profesionales asociadas y nuestros aliados que deseen ser atendidos por un profesional
                        del sector.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Posibilidad de mantener un
                        contacto on-line regular y
                        fluido con otros profesionales y colegas del sector para intercambiar experiencias o solicitar
                        asesoramiento o consultaría.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Facilidad de presencia en
                        ferias y eventos nacionales
                        e internacionales, alcanzando acuerdos con las entidades organizadoras para abaratar el coste y
                        facilitar su presencia a través de packs de viaje y estancia.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Acceso a cursos y seminarios
                        formativos para el
                        personal , tanto técnicos como de gestión o ventas específicamente diseñados para nuestros
                        asociados en temas de candente actualidad.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Acceso a su personal al
                        Programa de Certificación de
                        Operador de Piscina y Spa CPO en República Dominicana y Material de Apoyo.</li>
                </ul>
            </div>
            <div class="columna">
                <ul>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Promoción y Publicidad de
                        Miembros mediante pagina de
                        la Asociación , Redes Sociales, Boletines Informativos Mensuales.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Acceso a actividades
                        formativas de profesionalización
                        del sector Facilitando la obtención del carnet de operario instalador del personal. </li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Base de Datos, Bolsa de
                        Trabajo con profesionales
                        capacitados,lista de Profesionales Certificados.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Ser representado frente a las
                        Administraciones
                        Publicas, Promover gestionar y canalizar una política de créditos oficiales desgravaciones o
                        protección fiscal que pueda beneficiar al sector.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Contacto y relaciones con
                        Agrupaciones similares
                        extranjeras en promoción del comercio y la exportación e importación.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Participación en Feria EXPO
                        Piscinas República
                        Dominicana ,Talleres, Eventos, Foros, Simposium, conferencias. Plataforma de Capacitación
                        Online. </li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Impartir talleres en promoción
                        de temas relacionados
                        con el sector y su empresa. </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="columnas-2">
        <div class="columna quien-puede">
            <div><img src="https://asopropird.com/img/interrogante-icon.svg" alt="icono"></div>
            <div>
                <h3>¿QUIEN PUEDE ASOCIARCE?</h3>
            </div>
            <div class="padding-30-50">
                <ul>
                    <li><img src="https://asopropird.com/img/salvavidas-icon_blanco.svg" alt=""> Empresas que operan una
                        tienda minorista abierta al público que ofrece una variedad de productos de la industria.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon_blanco.svg" alt=""> Empresas que prestan
                        servicios y mantienen piscinas, spas, jacuzzis y fuentes de agua.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon_blanco.svg" alt=""> Entidad que opera una
                        sola piscina comercial o semipública, spa o instalación de jacuzzi.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon_blanco.svg" alt=""> Empresas que brindan
                        servicios de gestión profesional para piscinas públicas y semipúblicas, spas, bañeras de
                        hidromasaje y fuentes de agua.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon_blanco.svg" alt=""> Empresas cuyo negocio
                        principal es la venta al por mayor de productos fabricados por terceros.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon_blanco.svg" alt=""> Empresas que fabrican o
                        fabrican productos o componentes, incluidas unidades completas de piscinas, spas y unidades de
                        hidromasaje.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon_blanco.svg" alt=""> Una empresa que
                        representa a dos o más fabricantes y marcas diferentes.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon_blanco.svg" alt=""> Empresas
                        internacionales del sector de las piscinas o tratamiento de aguas que deseen tener contacto con
                        empresas locales con el objetivo de intercambios comerciales y apoyo al sector del pais. </li>
                </ul>
            </div>
        </div>
        <div class="columna requisitos">
            <div><img src="https://asopropird.com/img/requisitos-icon.svg" alt="icono"></div>
            <div>
                <h3>REQUISITOS</h3>
            </div>
            <div class="padding-30-50 ">
                <ul>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Formulario de inscripción,
                        debidamente
                        completado,
                        según la categoría de su empresa.</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Copia fotostática y
                        certificación del Registro
                        Nacional de Contribuyentes (RNC).</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Copia fotostática del
                        Certificado de Registro
                        Mercantil</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Copia fotostática de la Cédula
                        de Identidad o el
                        Pasaporte, según corresponda, de un representante del establecimiento ante ASOPROPIRD</li>
                    <li><img src="https://asopropird.com/img/salvavidas-icon.svg" alt=""> Envío digital del Logo de su
                        empresa en alta
                        resolución</li>
                </ul>
            </div>
        </div>
    </div>
    <?php get_footer();?>
</body>

</html>