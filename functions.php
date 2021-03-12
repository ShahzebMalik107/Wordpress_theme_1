<?php



//Addiing CSS
function AllCSS()
{
    wp_register_style( 'stylesheet', get_template_directory_uri() .'/css/main.css',array(), false,'all');
    wp_enqueue_style( 'stylesheet' );
    wp_register_style( 'main-css', get_template_directory_uri() .'/style.css',array(), false,'all');
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'main-css' );
}
add_action( 'wp_enqueue_scripts' , 'AllCSS');



//Menu 
add_theme_support( 'menus');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
register_nav_menus(
    array(
        'primary' => __( 'Top menu', 'theme' ),
        'footer'  => __( 'Footer menu', 'theme' ),
        'social_media'  => __( 'Social media', 'theme' ),
    )
);


// Image on Post

add_image_size( 'smalles', 300, 300, true );
add_image_size( 'largers', 800, 800, true );


//Logo size

function logo_size()
{
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
        );
        add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'logo_size' );

// google fonts

function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lobster&display=swap', false );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap',false);
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

//adding widgets


require_once('template-parts/widget-settings/basicWidgets.php');


// Custom objects in customizer

// require get_stylesheet_directory(  ). '/template-parts/widget-settings/setting1.php';
// new customizertheme1();

require_once('template-parts/widget-settings/header-section.php');
require_once('template-parts/widget-settings/footer-section.php');
require_once('template-parts/widget-settings/homepage-settings.php');

// My work posttype

function create_posttype() {
 
    register_post_type( 'work',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Works' ),
                'singular_name' => __( 'work' )
            ),
            'public' => true,
            'has_archive' => true,
            'has_thumbnail'=> true,
            'rewrite' => array('slug' => 'work'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );