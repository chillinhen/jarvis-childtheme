<?php

add_action('after_setup_theme', 'jarvis_child_theme_setup');

function jarvis_child_theme_setup() {
    
    //init scripts
    if (!function_exists("my_scripts")) {
        if (!is_admin()) {

            function my_scripts() {


                wp_enqueue_script('features', get_stylesheet_directory_uri() . '/features.js', array('jquery' ), '1.0', true );
            }

        }
    }


    add_action('wp_enqueue_scripts', 'my_scripts');

    //init styles
    if (!function_exists("my_styles")) {
	if (!is_admin()) {

	    function my_styles() {
                wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
                wp_enqueue_style('features', get_stylesheet_directory_uri() . '/features.css', 'style', '1.0', 'screen');
				wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Oswald', 'style', '1.0', 'screen');
	    }

	}
    }
    add_action('wp_enqueue_scripts', 'my_styles');
    

   
}

//end theme setup




?>