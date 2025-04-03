<?php 

function stylovision_files(){
    wp_enqueue_script('stylovision_main_js', get_theme_file_uri('build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('stylovision_main_styles', get_theme_file_uri('build/style.css'));
}

add_action('wp_enqueue_scripts', 'stylovision_files');

function stylovision_features(){
    register_nav_menu('header', 'Header');
    register_nav_menu('footer', 'Footer');
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'stylovision_features')

?>