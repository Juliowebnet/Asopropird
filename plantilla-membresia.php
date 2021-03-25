<?php 
/*
*
* 	Template Name: membresia
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
    <link rel="stylesheet" href="https://asopropird.com/css/membresia.css">
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
    <div class="contenedor">
        <h2 class="titulo-seccion">TIPOS DE SOCIOS</h2>
        <div id="contenedor-tipo-socios">
            <div class="columna tipo-persona">
                <div class="bloque-superior">
                    <div class="img-bloque">
                        <img src="https://asopropird.com/img/tecnico-icon.svg" alt="icono">
                    </div>
                    <div class="texto-bloque">
                        <h2>PERSONA FÍSICA</h2>
                        <P>Técnicos, Mantenedores, u otro Profesional que su actividad se vea relacionada con el sector
                            de
                            piscinas o tratamiento de aguas.</P>
                    </div>
                </div>
                <div class="bloque-inferior">
                    <div class="titulo-costo">
                        <h2>COSTO DE <br> AFILIACIÓN</h2>
                    </div>
                    <div class="texto-bloque-inferior">
                        <P class="descripcion-pago">El costo de la afiliación esta compuesto de una inscripción que se
                            paga una sola vez y de una
                            suscripción que puede ser anual o semestral.</P>
                        <div class="texto-precios">
                            <h3>INSCRIPCIÓN <br> PAGO ÚNICO</h3>
                            <p class="precio">USD 120.00</p>
                        </div>
                        <div class="texto-precios">
                            <h3>SUSCRIPCIÓN <br> SEMESTRAL</h3>
                            <p class="precio">USD 175.00</p>
                        </div>
                        <div class="texto-precios">
                            <h3>SUSCRIPCIÓN <br> ANUAL</h3>
                            <p class="precio">USD 350.00</p>
                        </div>
                        <div class="boton-beneficios">
                            <a href="https://asopropird.com/persona/">
                                <div>
                                    BENEFICIOS Y REQUISITOS
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columna tipo-empresa">
                <div class="bloque-superior">
                    <div class="img-bloque">
                        <img src="https://asopropird.com/img/factory-icon.svg" alt="icono">
                    </div>
                    <div class="texto-bloque">
                        <h2>EMPRESA</h2>
                        <P>Fabricantes, Distribuidores, Comerciales,
                            u otras empresas que se identifiquen y se
                            relacionen con la actividad.
                        </P>
                    </div>
                </div>
                <div class="bloque-inferior">
                    <div class="titulo-costo">
                        <h2>COSTO DE <br> AFILIACIÓN</h2>
                    </div>
                    <div class="texto-bloque-inferior">
                        <P class="descripcion-pago">El costo de la afiliación esta compuesto de una inscripción que se
                            paga una sola vez y de una
                            suscripción que puede ser anual o semestral.</P>
                        <div class="texto-precios">
                            <h3>INSCRIPCIÓN <br> PAGO ÚNICO</h3>
                            <p class="precio">USD 120.00</p>
                        </div>
                        <div class="texto-precios">
                            <h3>SUSCRIPCIÓN <br> SEMESTRAL</h3>
                            <p class="precio">USD 175.00</p>
                        </div>
                        <div class="texto-precios">
                            <h3>SUSCRIPCIÓN <br> ANUAL</h3>
                            <p class="precio">USD 350.00</p>
                        </div>
                        <div class="boton-beneficios">
                            <a href="https://asopropird.com/empresa/">
                                <div>
                                    BENEFICIOS Y REQUISITOS
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columna tipo-aliado">
                <div class="bloque-superior">
                    <div class="img-bloque">
                        <img src="https://asopropird.com/img/hotel-icon.svg" alt="icono">
                    </div>
                    <div class="texto-bloque">
                        <h2>ALIADO</h2>
                        <P>Toda empresa establecida que se relacione con el sector en su beneficio..</P>
                    </div>
                </div>
                <div class="bloque-inferior">
                    <div class="titulo-costo">
                        <h2>COSTO DE <br> AFILIACIÓN</h2>
                    </div>
                    <div class="texto-bloque-inferior">
                        <P class="descripcion-pago">El costo de la afiliación esta compuesto de una inscripción que se
                            paga una sola vez y de una
                            suscripción que puede ser anual o semestral.</P>
                        <div class="texto-precios">
                            <h3>INSCRIPCIÓN <br> PAGO ÚNICO</h3>
                            <p class="precio">USD 120.00</p>
                        </div>
                        <div class="texto-precios">
                            <h3>SUSCRIPCIÓN <br> SEMESTRAL</h3>
                            <p class="precio">USD 175.00</p>
                        </div>
                        <div class="texto-precios">
                            <h3>SUSCRIPCIÓN <br> ANUAL</h3>
                            <p class="precio">USD 350.00</p>
                        </div>
                        <div class="boton-beneficios">
                            <a href="https://asopropird.com/aliado/">
                                <div>
                                    BENEFICIOS Y REQUISITOS
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>NUESTRTOS SOCIOS</h2>
        <div id="contenedor-socios">
            <?php echo do_shortcode('[metaslider id="47"]'); ?>
        </div>
    </div>
    <?php get_footer(); ?>
</body>

</html>