<?php

function php2_theme_support() {
    //Dynamic Title
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

    add_action('after_setup_theme', 'php2_theme_support');

    function php2_menus() {
        $locations = array(
            'primary' => "Desktop Primary Left Sidebar",
            'footer' => "Footer Menu Items"
        );

        register_nav_menus($locations);
    }

    add_action('init', 'php2_menus');


    function php2_register_styles() {
        
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('php2-style', get_template_directory_uri() . "/style.css", array('php2-bootstrap'), $version, 'all');
        wp_enqueue_style('php2-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
        wp_enqueue_style('php2-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', array(), '6.2.1', 'all');

    }


    add_action('wp_enqueue_scripts', 'php2_register_styles');


    function php2_register_scripts() {
        
        wp_enqueue_script('php2-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
        wp_enqueue_script('php2-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
        wp_enqueue_script('php2-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
        wp_enqueue_script('php2-main', get_template_directory_uri(). "/assets/js/main.js", array('php2-javascript'), '1.0', true);

    }


    add_action('wp_enqueue_scripts', 'php2_register_scripts');


    function php2_widget_areas() {

        register_sidebar(
            array(
                'before-title' => '',
                'after-title' => '',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
            ),

            array(
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar Widget Area',
            )
        );

    
        register_sidebar(
            array(
                'before-title' => '',
                'after-title' => '',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
            ),

            array(
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar Widget Area',
            )
        );
    }   


    add_action('widgets_init', 'php2_widget_areas')


?>