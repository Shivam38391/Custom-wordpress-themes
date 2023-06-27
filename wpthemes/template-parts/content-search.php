<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

        <a style="color: blue;" href='<?php the_permalink(); ?>'>
             <h2 class="search-title"><?php echo get_post_type(); ?>:<?php the_title(); ?></h2>
        </a>

    </header>

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>


    <!-- condition to check for commenting is open  -->
    <?php if( comments_open() ) : ?>

    <?php comments_template(); ?>

    <?php endif; ?>
</article>