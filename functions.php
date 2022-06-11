<?php
    function nivelasesoria_title_support(){
        add_theme_support( 'title-tag' );
    }
    add_action( 'after_setup_theme', 'nivelasesoria_title_support' );
    

    function nivelasesoria_register_styles(){
        $theme_version = wp_get_theme()->get('version');
        wp_enqueue_style('nivelasesoria-normalize', get_template_directory_uri().'/assets/css/normalize.css', array(), $theme_version, 'all');
        // wp_enqueue_style('nivelasesoria-skeleton', get_template_directory_uri().'/assets/css/skeleton.css', array('nivelasesoria-normalize'), $theme_version, 'all');
        wp_enqueue_style('nivelasesoria-style', get_template_directory_uri().'/assets/css/main.css', array('nivelasesoria-normalize'), $theme_version, 'all');
        wp_enqueue_style('nivelasesoria-home', get_template_directory_uri().'/assets/css/home.css', array('nivelasesoria-style'), $theme_version, 'all'); //this css is loaded afet nivelasesoria-main because it depends on it
    }
    add_action( 'wp_enqueue_scripts', 'nivelasesoria_register_styles');

    function nivelasesoria_register_scripts(){
        $theme_version = wp_get_theme()->get('version');
        wp_enqueue_script( 'nivelasesoria-js', get_template_directory_uri().'/assets/js/main.js', array(), $theme_version, true );
    }
    add_action( 'wp_enqueue_scripts', 'nivelasesoria_register_scripts');
    /*  
        This function is not necesary but a nice to have for WP admins while creating the theme
        This deletes the margin-top that wp put for default on syles.min.css to take on account the admin bar
    */
    function my_function_admin_bar(){ return false; }

    add_filter( 'show_admin_bar' , 'my_function_admin_bar');
    
?>