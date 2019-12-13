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
        
//         // Déclarer un autre fichier CSS
//         wp_enqueue_style( 
//             'fex', 
//             get_template_directory_uri() . './css/style.css',
//             array(), 
//             '1.0'
//         );

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
    if ( !current_user_can('manage_options' ) ){
		function kodex_admin_remove_menus(){
			remove_menu_page('index.php');
			remove_menu_page('edit.php');
			remove_menu_page('upload.php');
			remove_menu_page('edit.php?post_type=page');
			remove_menu_page('edit-comments.php');
			remove_menu_page('themes.php');
			remove_menu_page('plugins.php');
			remove_menu_page('users.php');
			remove_menu_page('tools.php');
			remove_menu_page('options-general.php');
			remove_menu_page( 'wpcf7' );
		}
		add_action('admin_menu', 'kodex_admin_remove_menus');

		// masquer ACF
		add_filter('acf/settings/show_admin', '__return_false');

		add_action( 'admin_menu', 'adjust_the_wp_menu', 999 );
		function adjust_the_wp_menu() {
			remove_submenu_page( 'edit.php', 'widgets.php' );
		}
    }
    