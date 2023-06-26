<?php get_header(); ?>


<div id="primary" class="content-area">

    <main id='main' class="site-main">


        <h3>template: ATTACHMENT.php</h3>


        <?php if ( have_posts() ) : while( have_posts() ) : the_post();   ?>

        <?php //get_template_part( "template-parts/content" , "page" ); ?>

        <!-- authomatically find out the content pg -->
        <?php //get_template_part( "template-parts/content" , get_post_format() ); ?>






        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">

                <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

                <h3>content.php</h3>
                <?php the_title("<h1>" , "</h1>" ); ?>

            </header>

            <div class="entry-content">

         

            <pre>   <?php var_export( $post ); ?> </pre>

            
                <?php the_content(); ?>
            </div>


            <!-- condition to check for commenting is open  -->
            <?php if( comments_open() ) : ?>

            <?php comments_template(); ?>

            <?php endif; ?>
        </article>




        <?php endwhile; else: ?>

        <?php get_template_part( "template-parts/content", "none" ); ?>


        <?php endif; ?>
    </main>

</div>


<?php get_sidebar(); ?>



<?php get_footer(); ?>