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