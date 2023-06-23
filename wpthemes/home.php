<?php get_header(); ?>


<div id="primary" class= "content-area">

    <main id='main' class="site-main">
        <h1><?php wp_title( ) ?></h1>

        <h3>template: HOME.php</h3>


    <?php if ( have_posts() ) : while( have_posts() ) : the_post();   ?>

        <?php get_template_part( "template-parts/content" , get_post_format() ); ?>


        <?php endwhile; else: ?>

            <?php get_template_part( "template-parts/content", "none" ); ?>


            <?php endif; ?>
    </main>

</div>


<?php get_sidebar(); ?>



<?php get_footer(); ?>