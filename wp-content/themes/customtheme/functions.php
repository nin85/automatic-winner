<?php

// Loading in scripts
function enqueue_customtheme_styles(){
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
    // wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
    wp_enqueue_style('customtheme-style', get_stylesheet_uri());
} 
add_action('wp_enqueue_scripts', 'enqueue_customtheme_styles');


function customtheme_setup(){
    
    //Register a custom primary navigation menu
    register_nav_menus(array (
        "primary" => __('Primary Menu', 'customtheme')
        ));
        
    // Add theme support for document title tag
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'customtheme_setup');

function customtheme_widgets(){
    register_sidebar(array(
        'name'          => __('Sidebar', 'customtheme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets to appear in the sidebar', 'customtheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
        ));
}
add_action('widgets_init','customtheme_widgets');

function custom_shortcode($atts, $content=null){
        return '<div class="col-sm-4">' . $content . '</div>';
}
add_shortcode('one_third', 'custom_shortcode');

?>