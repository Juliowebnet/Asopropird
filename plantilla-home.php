<?php 
/*
*
* 	Template Name: home
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
    <?php wp_head();?>
    <script src="https://kit.fontawesome.com/2f546a1745.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://asopropird.com/css/home.css">
</head>

<body>
    <div id="cabecera-principal">
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
        <div class="texto-cabecera">
            <div class="titulo-cabecera">
                <div class="letra-a">
                    <div id="letra-a1" class="letra-a1 letra-oculta">
                        <img src="https://asopropird.com/img/logo-00.png" alt="">
                    </div>
                    <div class="letra-a2">A</div>
                </div>
                <span class="letra-s">S</span><span class="letra-o">O</span><span class="letra-p">P</span><span
                    class="letra-r">R</span><span class="letra-o2">O</span><span class="letra-p2">P</span><span
                    class="letra-i">I</span><span class="letra-r2">R</span><span class="letra-d">D</span>
            </div>
            <p>Asociación de Profesionales de la <br> Piscina República Dominicana</p>
        </div>
        <div class="botones-cabecera-principal">
            <a href="https://asopropird.com/asopropird/">
                <div class="boton1">NOSOTROS</div>
            </a>
            <a href="https://asopropird.com/contactanos/">
                <div class="boton3">CONTÁCTANOS</div>
            </a>
        </div>
    </div>
    <div id="contenido">
        <div id="tipo-socio">
            <div id="persona" class="socios">
                <div class="capa-oscura">
                    <div id="persona-icon" class="socio-img">
                        <img src="https://asopropird.com/img/tecnico-icon.svg" alt="Socio como persona física"></div>
                    <div class="socio-text">
                        <p>SER SOCIO COMO PERSONA FÍSICA</p><br>
                        <p>Técnicos, Mantenedores, u otro Profesional que su actividad se vea relacionada con el sector
                            de piscinas o tratamiento de aguas.</p>
                    </div>
                    <a href="https://asopropird.com/persona/">
                        <div class="socio-boton">LEER MÁS</div>
                    </a>

                </div>
            </div>
            <div id="empresa" class="socios">
                <div class="capa-oscura">
                    <div id="factory-icon" class="socio-img">
                        <img src="https://asopropird.com/img/factory-icon.svg" alt="Socio como empresa"></div>
                    <div class="socio-text">
                        <p>SER SOCIO COMO EMPRESA</p><br>
                        <p>Fabricantes, Distribuidores, Comerciales,
                            u otras empresas que se identifiquen y se
                            relacionen con la actividad.
                        </p>
                    </div>
                    <a href="https://asopropird.com/empresa/">
                        <div class="socio-boton">LEER MÁS</div>
                    </a>
                </div>
            </div>
            <div id="aliado" class="socios">
                <div class="capa-oscura">
                    <div id="hotel-icon" class="socio-img">
                        <img src="https://asopropird.com/img/hotel-icon.svg" alt="Socio como aliado"></div>
                    <div class="socio-text">
                        <p>SER SOCIO COMO ALIADO</p><br>
                        <p>Toda empresa establecida que se relacione con el sector en su beneficio.</p>
                    </div>
                    <a href="https://asopropird.com/aliado/">
                        <div class="socio-boton">LEER MÁS</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="llamado-accion">
            <p>No te pierdas ninguno de nuestros artículos</p>
            <a href="https://asopropird.com/blog/">
                <div class="boton2">VER MÁS</div>
            </a>
        </div>
        <div id="instagram">
            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; 
            endif; 
        ?>
        </div>
        <footer>
            <div class="contenido-footer">
                <div id="logo-footer" class="bloque-footer">
                    <img src="https://asopropird.com/img/logo-1.png" alt="">
                </div>
                <div id="contacto-footer" class="bloque-footer">
                    <p> <span>CONTÁCTANOS</span></p> <br>
                    <p><a href="tel:+18097928463">+1 (809) 792 8463</a></p><br>
                    <p>PLAZA ORLEANS SUITE 408 <br> AV. WINSTON CHURCHILL 1550, <br> SANTO DOMINGO, REPÚBLICA
                        DOMINICANA.</p><br>
                    <p>Siguenos en nuestras redes sociales</p><br>
                    <div class="contenedor-redes-sociales">
                        <div>
                            <a href="https://www.instagram.com/asopropird/?hl=es-la"><img
                                    src="https://asopropird.com/img/instagram-icon.svg" alt="Instagram"></a>
                        </div>
                        <div>
                            <a href=""><img src="https://asopropird.com/img/facebook-icon.svg" alt="Facebook"></a>
                        </div>
                        <div>
                            <a href=""><img src="https://asopropird.com/img/youtube-icon.svg" alt="Youtube"></a>
                        </div>
                    </div>
                </div>
                <div id="mapa-footer" class="bloque-footer">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.1471942044436!2d-69.94670738579656!3d18.47699067532955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89f012b749b9%3A0x8f35fb14dbeed98a!2sPlaza+Orleans!5e0!3m2!1sen!2sdo!4v1564026459138!5m2!1sen!2sdo"
                        width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="copyright">
                <p>Todos los derechos reservados ASOPROPIRD <i class="far fa-copyright"></i> 2019</p>
                <p>Web desarrollada por <a href="https://julioweb.net">Julioweb</a></p>
            </div>
        </footer>
    </div>
    <script src="https://asopropird.com/js/scripts.js"></script>
    <?php wp_footer(); ?>
</body>

</html>