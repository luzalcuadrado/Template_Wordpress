<?php
	
	//Inserción de jQuery
	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	function my_jquery_enqueue() {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
	   wp_enqueue_script('jquery');
	}

	// Soporte para menús con wp_nav_menu( array('menu' => 'Nombre_del_menu' )); 
	add_theme_support('menus');
	
	// Soporte para imagen destacada
	add_theme_support('post-thumbnails');

	// Soporte para sidebar
	if ( function_exists('register_sidebar') )
		register_sidebar(array(
        'id' => 'sidebar-main', // Sirve para mandarla a llamar en los templates usando dynamic_sidebar($id);
        'name' => 'Nombre de la sidebar',
        'description' => 'Una descripción para reconocer la sidebar',
		'before_title' => '<h4 class="nombre_de_la_clase_titulo">',
		'after_title' => '</h4>',
		'before_widget' => '<div class="contenedor_del_widget">',
		'after_widget' => '</div>',
	));
	
	// añadir una clase first y una last a los menús generados por wp_nav_menu
	function add_first_and_last($output) {
	    $output = preg_replace('/class="menu-item/', 'class="first-menu-item menu-item', $output, 1);
	    $output = substr_replace($output, 'class="last-menu-item menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
	    return $output;
	}
	add_filter('wp_nav_menu', 'add_first_and_last');
	
	// shortcode in widgets
	if ( !is_admin() ){
	    add_filter('widget_text', 'do_shortcode', 11);
	}
	
	// make TinyMCE allow iframes
	add_filter('tiny_mce_before_init', create_function( '$a',
	'$a["extended_valid_elements"] = "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]"; return $a;') );

	add_filter('mce_buttons','wysiwyg_editor');
	function wysiwyg_editor($mce_buttons) {
	    $pos = array_search('wp_more',$mce_buttons,true);
	    if ($pos !== false) {
	        $tmp_buttons = array_slice($mce_buttons, 0, $pos+1);
	        $tmp_buttons[] = 'wp_page';
	        $mce_buttons = array_merge($tmp_buttons, array_slice($mce_buttons, $pos+1));
	    }
	    return $mce_buttons;
	}
	
	function mqw_mas_botones($buttons) {
	 $buttons[] = 'hr';
	 $buttons[] = 'del';
	 $buttons[] = 'sub';
	 $buttons[] = 'sup';
	 $buttons[] = 'fontselect';
	 $buttons[] = 'fontsizeselect';
	 $buttons[] = 'cleanup';
	 $buttons[] = 'styleselect';
	 return $buttons;
	}
	add_filter("mce_buttons_3", "mqw_mas_botones");

?>