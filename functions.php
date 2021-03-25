<?php

function asopropird_theme_agregar_js_css(){
  
  wp_enqueue_script( 'menu', get_template_directory_uri() . '/assets/js/menu.js', array ( 'jquery' ), 1.1, true);
  
  wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/css/blog.css',false,'1.1','all');
    
}
add_action( 'wp_enqueue_scripts', 'asopropird_theme_agregar_js_css' );


// Soporte imagenes destacadas

if (function_exists('add_theme_support')){
    add_theme_support( 'post-thumbnails' );
}


// Agregar sidebar

function asopropird_theme_widgets(){
    register_sidebar(array(
        'name'          => __( 'Widgets-derecha-1', 'asopropird_theme' ),
        'id'            => 'widgets-derecha-1',
        'description'   => __( 'Arrastra lo que quieras' ),
        'before_widget' => '<aside id="%1$s" class="sidebar %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action( 'widgets_init', 'asopropird_theme_widgets' );

// Agregar el menú de navegación

function asopropird_theme_register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Menu principal' )
       )
     );
   }
   add_action( 'init', 'asopropird_theme_register_my_menus' );

// Agregar menú del login

add_filter( 'wp_nav_menu_items', 'dcms_items_login_logout', 10, 2);

function dcms_items_login_logout( $items, $args ) {

	if ($args->theme_location == 'header-menu') {
		if (is_user_logged_in())
		{
			$items .= '<li class="menu-item">
						<a href="https://asopropird.com/recursos/">'. __("RECURSOS") .'</a>
                        </li>';
            $items .= '<li class="menu-item">
						<a href="'. wp_logout_url(get_permalink()) .'">'. __("LOG OUT") .'</a>
						</li>';
		}
		else
		{
			$items .= '<li class="menu-item">
						<a href="'. wp_login_url(get_permalink()) .'">'. __("LOG IN") .'</a>
						</li>';
		}
	}

	return $items;
}