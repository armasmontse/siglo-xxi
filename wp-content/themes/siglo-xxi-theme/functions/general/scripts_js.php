<?php

/**
 * En este archivo se incluyen los scripts
 *
 */


/** ==============================================================================================================
 *                                                HOOKS
 *  ==============================================================================================================
 */


add_action( 'wp_enqueue_scripts', 'cltvo_js' ); // incluye el functions.js
add_action( 'admin_enqueue_scripts', 'cltvo_admin_js' ); // incluye el admin-functions.js. Descomentar para tener JS en admin (no olvidar crear el file [admin-functions.js])


/** ==============================================================================================================
 *                                               SCRIPTS
 *  ==============================================================================================================
 */

// incluye el functions.js
function cltvo_js(){
	// Cltvo functions
	wp_register_script( 'cltvo_functions_js', JSPATH.'functions.js', array('jquery','cltvo_validate_js','cltvo_validate_espanol_js', 'cltvo_wow_js', 'cltvo_swiper_js', 'cltvo_gsap_js'  /* 'cltvo_scrollIt_js'*/), false, true );

	// Swiper
	wp_register_script( 'cltvo_swiper_js', "https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js", array('jquery'), false, true );
	// wp_register_script( 'cltvo_scrollIt_js', JSPATH.'scrollIt.js', array('jquery'), false, true );
    wp_register_script( 'cltvo_validate_js', JSPATH.'jquery.validate.min.js', array('jquery'), false, true );
	wp_register_script( 'cltvo_validate_espanol_js', JSPATH.'messages_es.min.js', array('jquery'), false, true );
	
	// CDN link for  TweenMax
	wp_register_script( 'cltvo_gsap_js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js', array('jquery'), false, true );

	// Wow load animations
	wp_register_script( 'cltvo_wow_js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array('jquery'), false, true );

	// Localizing script
	wp_localize_script( 'cltvo_functions_js', 'cltvo_js_vars', cltvo_js_vars() );

	wp_enqueue_script('jquery');
	wp_enqueue_script('cltvo_functions_js');
}

// incluye el admin-functions.js

function cltvo_admin_js(){
	wp_register_script( 'cltvo_admin_functions_js', JSPATH.'admin-functions.js', array('jquery'), false, false );
	wp_localize_script( 'cltvo_admin_functions_js', 'cltvo_js_vars', cltvo_js_vars() );

	wp_enqueue_style('admin-styles', CSSPATH.'ultraligero_admin.css' );
	wp_enqueue_script('jquery');
	wp_enqueue_script('cltvo_admin_functions_js');
}

// genera el site_url y template_url para javascript

function cltvo_js_vars(){
	$php2js_vars = array(
		'site_url'     => home_url('/'),
		'template_url' => get_bloginfo('template_url'),
		'ajax_url' 		=> admin_url( 'admin-ajax.php' ),
	);
	return $php2js_vars;
}


?>
