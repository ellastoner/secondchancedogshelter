<?php 
/*
    ====================================
    Include Scripts
    ====================================
*/
function friyay_script_enqueue() {
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/friyay.css', array(), '1.0.0', 'all');
    //js
    wp_enqueue_script('j-query', get_template_directory_uri() .'/js/my-custom-script.js', array('jquery'), null, true);
    wp_enqueue_script('js', get_template_directory_uri() . '/js/friyay.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.3.1', true);
}

add_action( 'wp_enqueue_scripts', 'friyay_script_enqueue');

/*
    ====================================
    Activate Menus
    ====================================
*/
function friyay_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}
/*
    ====================================
    Theme Support function
    ====================================
*/
add_action('init', 'friyay_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside', 'image', 'video'));


/*
    ====================================
    Sidebar Function 
    ====================================
*/

function friyaytheme_widget_setup(){
    register_sidebar(
        array(
         'name' => 'Sidebar',
         'id' => 'sidebar-1',
         'class' => 'custom',
         'description' => 'standard Sidebar',
         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
         'after_widget' => '</aside>',
         'before_title' => '<h1 class="widget-title">',
         'afer_title' => '</h1>',
        )
    );
}
add_action('widgets_init','friyaytheme_widget_setup');

/*
    ====================================
    Navbar Logo 
    ====================================
*/

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

/*
    ====================================
    Woo Commcerce Function:
    ====================================
*/

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );