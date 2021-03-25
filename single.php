<?php get_header(); ?>

<div class="contenedor_blog">
    <h2>NUESTRO BLOG</h2>
    <div class="columnas_blog">
        <!-- publicaciones -->
        <div class="contenedor_post">
            <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <div>
                    <h3><?php the_title();?></h3>
                    <p>Fecha: <?php the_time('F j, Y'); ?></p>
                    <p>Categoria: <?php the_category(' / ')?></p>
                    <p>Etiqueta: <?php the_tags(' ', ' / ', ' ')?></p>
                    <div class="img_post">
                        <?php 
                            if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('post-thumbnails');
                                }
                        ?>
                    </div>
                    <?php the_content(); ?><br>
                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>
        <!-- sidebar -->
        <div class="contenedor_publicidad">
            <h3>PÚBLICIDAD</h3>

            <aside class="sidebar">

            </aside>
            <aside class="sidebar">

            </aside>
            <aside class="sidebar">

            </aside>

        </div>
    </div>
</div>
<?php get_footer(); ?>