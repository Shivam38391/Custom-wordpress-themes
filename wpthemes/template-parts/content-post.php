<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
    
        <p>content post file</p>
        <a href='<?php the_permalink(); ?>'><h2><?php the_title(); ?></h2></a>

        <p class="byline">
            Author: <?php  the_author_posts_link(  ); ?>
        </p>

        

    </header>

    <div class="entry-content">
        <?php //the_content(); ?>
        <?php the_excerpt(); ?>

    </div>


        <!-- condition to check for commenting is open  -->
        <?php if( comments_open() ) : ?>

            <?php comments_template(); ?>

        <?php endif; ?>
</article>