<?php

add_action('after_setup_theme', 'jarvis_child_theme_setup');

function jarvis_child_theme_setup() {
    
    //init scripts
    if (!function_exists("jarvis_childscripts")) {
        if (!is_admin()) {

            function jarvis_childscripts() {


                wp_enqueue_script('features', get_stylesheet_directory_uri() . '/js/features.js', array('jquery' ), '1.0', true );
            }

        }
    }


    add_action('wp_enqueue_scripts', 'jarvis_childscripts');

    //init styles
    if (!function_exists("jarvis_childstyles")) {
	if (!is_admin()) {

	    function jarvis_childstyles() {
                wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
                wp_enqueue_style('features', get_stylesheet_directory_uri() . '/css/features.css', 'style', '1.0', 'screen');
				wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Oswald', 'style', '1.0', 'screen');
	    }

	}
    }
    add_action('wp_enqueue_scripts', 'jarvis_childstyles');
    

   
}

//end theme setup




?>