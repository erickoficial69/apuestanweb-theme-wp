<?php get_header(); ?>
<?php get_template_part('components/banner_top') ?>

<main>
	<article> taxt.php
    <?php
        print apply_filters( 'taxonomy-images-queried-term-image', '');
        
        if($post->post_type == 'pronosticos') : ?>
            <section class="container_tarjetitas" >
            <?php get_template_part('template-parts/content-archive') ?>
            </section>
        <?php endif;

        if($post->post_type != 'pronosticos') :
            get_template_part('template-parts/content-archive');
        endif;
    ?>
            
	</article>

    <?php get_sidebar() ?>
</main>
<?php get_footer();