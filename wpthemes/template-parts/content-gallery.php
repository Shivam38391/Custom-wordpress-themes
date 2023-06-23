<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

    <h2>Enjoy the gallary post</h2>

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

        <?php the_title("<h1>" , "</h1>" ); ?>

        <p class="byline">
            Author: <a href="<?php echo  get_author_posts_url( $post->post_author ); ?>"> <?php  the_author(); ?></a> |
            Date: <?php the_date(); ?>| Time: <?php the_time(); ?> | Categories: <?php the_category( ',' ); ?>
        </p>


    </header>

    <div class="entry-content">
        <?php the_content(); ?>

    </div>

    <!-- condition to check for commenting is open  -->
    <?php if( comments_open() ) : ?>

        <?php comments_template(); ?>

    <?php endif; ?>

</article>