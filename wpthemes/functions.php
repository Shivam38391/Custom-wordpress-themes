<?php

    // Add Themes Support
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    //Let WordPress manage the document title.By adding theme support, we declare that this theme does not use a,hard-coded <title> tag in the document head, and expect WordPress to provide it for us.
	add_theme_support( 'title-tag' );
    //Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption',
			'style',
			'script',
		)
	);
    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'custom-background' );

    add_theme_support( 'custom-header' );
    get_theme_support( 'starter-content' );



    //Load in our  css
    function wp_themes_enqeue_style(){
        wp_enqueue_style( "main-css", get_stylesheet_directory_uri(  ) . '/style.css' , [], time(), 'all' );
        wp_enqueue_style( "custom-css", get_stylesheet_directory_uri() . '/assets/css/custom.css' , ["main-css"], time(), 'all' );

    }

    add_action( 'wp_enqueue_scripts', 'wp_themes_enqeue_style' );
    

    
    //Load in our  js
    function wp_themes_enqeue_scripts(){
        wp_enqueue_script("themes-js", get_template_directory_uri( ) . '/assets/js/themes.js' , [], time(), true  );

    }

    add_action( 'wp_enqueue_scripts', 'wp_themes_enqeue_scripts' );



//register menu locations
    register_nav_menus( array(
        'main-menu' => esc_html__( 'custom main menu', 'wpthemes' ) ,
        'footer_menu' => 'My Custom Footer Menu',
    ) );



//setup widget area
function custom_sidebar_init() {

    $args = [
        "name" => esc_html__( "CUSTOM sidebar" ) ,
        "id"  => "custom-sidebar",
        "description" => esc_html__( "add widgets for custom siebar here" ),
        "before_widget" => "<section class='widget'>",
        "after_widget" => "</section>",
        "before_title" => "<h2 class='widget-title'>",
        "after_title" => "</h2>",
    ];


    $frontPage = [
        "name" => esc_html__( "Front Page widget sidebar" ) ,
        "id"  => "front-page",
        "description" => esc_html__( "add widgets for front page here" ),
        "before_widget" => "<section class='widget'>",
        "after_widget" => "</section>",
        "before_title" => "<h2 class='widget-title'>",
        "after_title" => "</h2>",
    ];




    register_sidebar( $args );
    register_sidebar( $frontPage );

}

add_action( 'widgets_init', 'custom_sidebar_init' );

?>

