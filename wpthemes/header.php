<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- dpnt need to hardcode title tage -->
    <!-- <title>Document</title> -->

    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>



    <div id="page">

        <a href="#content" class="skip-link screen-reader-text">
            skip
        </a>

        <header id="masthead" class='site-header' role='banner'>

            <div class="site-branding">
                <p class="site-title"> <?php bloginfo( 'name' ) ?>  </p>

                <p class="site-description"> <?php bloginfo( 'description' ) ?> </p>

            </div>

            <nav id='site-navigation' class="main-navigation"  role='navigation' >
                    <?php
                    $args = ['theme_location' => 'main-menu'];
                    wp_nav_menu( $args );
                    ?>
            </nav>

        </header>


        <div id="content" class="site-content">


