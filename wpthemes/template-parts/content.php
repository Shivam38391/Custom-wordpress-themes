<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>
    
<h3>content.php</h3>
        <?php the_title("<h1>" , "</h1>" ); ?>

    </header>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>


        <!-- condition to check for commenting is open  -->
        <?php if( comments_open() ) : ?>

            <?php comments_template(); ?>

        <?php endif; ?>
</article>