<?php
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "custom-background" );
    add_theme_support( "custom-header" );

    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { 
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { 
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    function hamburger_script() {
        wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&display=swap', array() );
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array() );
        wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1');
        wp_enqueue_script( 'hamburger', get_template_directory_uri() . '/js/script.js', array(), '1.0.0' );

        add_editor_style();
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    if ( ! isset( $content_width ) ) {
        $content_width = 960;
    }