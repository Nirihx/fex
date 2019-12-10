<?php
    function register_my_menus() {
        register_nav_menus(
            array(
                'primary-menu' => __( 'Menu Principale' ),
                'footer-menu' => __( 'Menu Footer' ),
            )
        );
    }
    add_action( 'init', 'register_my_menus' );

    // ajout fichier css / js  
    function fex_register_assets() {
    
        wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
        // Déclarer jQuery
        wp_enqueue_script( 
            'jquery', 
            'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
//             get_template_directory_uri() . '/js/jquery-3.3.1.min.js', 
            false, 
            '3.3.1', 
            true 
        );        
        
        // Déclarer bootstrap js
        wp_enqueue_script( 
            'fex', 
            get_template_directory_uri() . '/js/bootstrap.min.js', 
            array('jquery'), 
            '4.2.1', 
            true
        );

        // Déclarer un autre fichier CSS
        // wp_enqueue_style( 
        //     'fex', 
        //     get_template_directory_uri() . './css/style.css',
        //     array(), 
        //     '1.0'
        // );

        // Déclarer style.css à la racine du thème
        wp_enqueue_style( 
            'fex',
            get_stylesheet_uri(), 
            array(), 
            '1.0'
        );                
    }
    add_action( 'wp_enqueue_scripts', 'fex_register_assets' );

    // Supprimer les notifications de thèmes update
    remove_action('load-update-core.php', 'wp_update_themes');
    add_filter('pre_site_transient_update_themes', create_function('$a', "return null;"));

    // Supprimer les notifications de plugins
    remove_action('load-update-core.php', 'wp_update_plugins');
    add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));

    // masquer les autre menu de l'admin
    function remove_menu_items() {
        global $menu;
        $restricted = array(__('Posts'), __('Pages'), __('Comments'), __('Plugins'), __('Links'), __('Media'), __('Tools'), __('Users'));
        end ($menu);
        while (prev($menu)) {
            $value = explode(' ',$menu[key($menu)][0]);
            if(in_array($value[0] != NULL?$value[0]:"" , $restricted)) {
                unset($menu[key($menu)]);}
        }
    }
    add_action('admin_menu', 'remove_menu_items');

    add_theme_support( 'post-thumbnails' );