<?php 
/*
*
* 	Template Name: contactanos
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
    <link rel="stylesheet" href="https://asopropird.com/css/contactanos.css">
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
    <div id="contactanos">
        <div class="contenedor-formulario">
            <h2 class="titulo-contactanos">COMUNÍCATE CON <br> NOSOTROS <span> FACILMENTE</span></h2>
            <?php echo do_shortcode('[contact-form-7 id="13" title="Formulario de contacto 1"]'); ?>
        </div>
        <div class="contenedor-mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.1471942044436!2d-69.94670738579656!3d18.47699067532955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89f012b749b9%3A0x8f35fb14dbeed98a!2sPlaza+Orleans!5e0!3m2!1sen!2sdo!4v1564026459138!5m2!1sen!2sdo"
                width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <?php get_footer();?>
</body>

</html>