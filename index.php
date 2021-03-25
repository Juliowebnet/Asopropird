<?php get_header(); ?>
<div class="contenedor_blog">
    <h2>NUESTRO BLOG</h2>
    <div class="columnas_blog">
        <!-- publicaciones -->
        <div class="contenedor_post">
            <?php 
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <div>
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>Fecha: <?php the_time('F j, Y'); ?></p>
                    <p>Categoria: <?php the_category('/'); ?></p>
                    <p>Etiqueta: <?php the_tags($before = ' ', $sep = '/', $after = ' '); ?> </p>
                    <div class="img_post">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                    <p class="extracto_post"> <?php the_excerpt(); ?></p>
                    <div class="contenedor_boton_info">
                        <a href="<?php the_permalink(); ?>">
                            <div class="btn_info">Leér más</div>
                        </a>
                    </div>
                </div>
            </div>
            <?php 
                    endwhile; 
                    endif;
                ?>
                <?php posts_nav_link();?>
        </div>
        <!-- sidebar -->
        <div class="contenedor_publicidad">

            <?php get_sidebar('Widgets-derecha-1'); ?>


        </div>
    </div>
</div>

<?php get_footer(); ?>