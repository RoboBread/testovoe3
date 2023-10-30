<?php
    add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
    add_theme_support( 'custom-logo' );

    function add_scripts_and_styles(){
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.7.0.min.js',false,null,true);
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js',false,null,true);
        wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js',array('jquery','swiper-js'),null,'footer');

        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css');
        wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
        wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css');
        wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
        wp_enqueue_style( 'main', get_stylesheet_uri(), array('normalize','reset','fonts','swiper-style'));
    }
?>