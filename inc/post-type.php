<?php
    function fex_register_post_types() {

        // CPT Slide header
        $labels = array(
            'name' => 'Slide header',
            'all_items' => 'Tous les Slide header',  // affiché dans le sous menu
            'singular_name' => 'Slide',
            'add_new_item' => 'Ajouter un Slide',
            'edit_item' => 'Modifier le Slide',
            'menu_name' => 'Slide header'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-format-gallery',
        );

        register_post_type( 'slide', $args );

        // CPT Services
        $labels = array(
            'name' => 'Services',
            'all_items' => 'Tous les Services',  // affiché dans le sous menu
            'singular_name' => 'Service',
            'add_new_item' => 'Ajouter un Service',
            'edit_item' => 'Modifier le Service',
            'menu_name' => 'Services'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
            'menu_position' => 6, 
            'menu_icon' => 'dashicons-clipboard',
        );

        register_post_type( 'service', $args );

        // CPT Pieces
        $labels = array(
            'name' => 'Pieces',
            'all_items' => 'Tous les pièces',  // affiché dans le sous menu
            'singular_name' => 'Pièce',
            'add_new_item' => 'Ajouter un pièce',
            'edit_item' => 'Modifier le pièce',
            'menu_name' => 'Pièces'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
            'menu_position' => 7, 
            'menu_icon' => 'dashicons-layout',
        );

        register_post_type( 'pieces', $args );
        
        // CPT Equipes
        $labels = array(
            'name' => 'Equipes',
            'all_items' => 'Tous les équipes',  // affiché dans le sous menu
            'singular_name' => 'Equipe',
            'add_new_item' => 'Ajouter un equipe',
            'edit_item' => 'Modifier le equipe',
            'menu_name' => 'Equipes'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
            'menu_position' => 8, 
            'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        );

        register_post_type( 'equipe', $args );

        // CPT Contact
        $labels = array(
            'name' => 'Contact',
            'all_items' => 'Tous les contacts',  // affiché dans le sous menu
            'singular_name' => 'Contact',
            'add_new_item' => 'Ajouter un contact',
            'edit_item' => 'Modifier le contact',
            'menu_name' => 'Contact'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
            'menu_position' => 9, 
            'menu_icon' => 'dashicons-phone',
        );

        register_post_type( 'contact', $args );        

        // CPT Qui sommes-nous
        $labels = array(
            'name' => 'Qui sommes-nous',
            'all_items' => 'Tous',  // affiché dans le sous menu
            'singular_name' => 'Qui sommes-nous',
            'add_new_item' => 'Ajouter un Qui sommes-nous',
            'edit_item' => 'Modifier le Qui sommes-nous',
            'menu_name' => 'Qui sommes-nous'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
            'menu_position' => 10, 
            'menu_icon' => 'dashicons-editor-help',
        );

        register_post_type( 'qui-sommes-nous', $args );

        // CPT Galerie photo
        $labels = array(
            'name' => 'Galerie Photo',
            'all_items' => 'Tous les Galeries Photos',  // affiché dans le sous menu
            'singular_name' => 'Galerie',
            'add_new_item' => 'Ajouter un Galerie',
            'edit_item' => 'Modifier le Galerie',
            'menu_name' => 'Galerie Photo'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => array( 'title'),
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-format-gallery',
        );

        register_post_type( 'galerie', $args );
        
    }
    add_action( 'init', 'fex_register_post_types' ); // Le hook init lance la fonction 