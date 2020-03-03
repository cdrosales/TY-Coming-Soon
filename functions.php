<?php

// Adds script and stylesheets
function ty_files(){
    // NAME & LOCATION FOR PARAMETERS
    wp_enqueue_style('ty_styles', get_stylesheet_uri(), NULL, microtime()); // first parameter name of styleshee & second is the location
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato&display=swap');
}

add_action('wp_enqueue_scripts', 'ty_files');//add stylesheet

//Adds theme support - ex: title tag
function ty_features(){
    add_theme_support('post-thumbnails');
    add_theme_support ('title-tag'); // wordpress method
}
add_action('after_setup_theme', 'ty_features');


function ty_sidebars_widgets() {
    register_sidebar( array(
        'name' => esc_html('Front Page Subscription Form'),
        'id' => 'sidebar-frontpg-subscribe',
        'description' => 'Mailchimp',
        'before_widget' => '<div class="frontpg-subscribe">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => ''
    ));
}
add_action('widgets_init', 'ty_sidebars_widgets');


?>