<?php 

function divi_child(){
    wp_enqueue_style('divi_styles', get_template_directory_uri(). '/style.css' );
}

add_action('wp_enqueue_scripts', 'divi_child');

?>