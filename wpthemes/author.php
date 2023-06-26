<?php get_header(); ?>


<div id="primary" class= "content-area">

    <main id='main' class="site-main">

    <h3>template: author.php</h3>


    <div class="author-bio">
        <h1><?php the_archive_title( ) ?></h1>

        <p>
            <?php echo the_author_description(  ) ?>
        </p>
    </div>
      

    <?php if ( have_posts() ) : while( have_posts() ) : the_post();   ?>

        <?php get_template_part( "template-parts/content" , get_post_format() ); ?>


        <?php endwhile; else: ?>

            <?php get_template_part( "template-parts/content", "none" ); ?>


            <?php endif; ?>
    </main>

</div>


<?php get_sidebar(); ?>



<?php get_footer(); ?>