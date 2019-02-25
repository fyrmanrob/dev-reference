<?php 

/*
 *	Plugin Name: My Developer Reference
 *	Plugin URI: http://css-animations.fyrmanrob.net
 *	Description: Contains CSS and other files
 *	Version: 1.0
 *	Author: Rob McClara
 *	Author URI: http://fyrmanrob.net
 *	GitHub Plugin URI: fyrmanrob/dev-reference
 *	GitHub Plugin URI: https://github.com/fyrmanrob/dev-reference
 */


function rm_enqueue_scripts() {
	wp_enqueue_style( 'rm_frontend_css',           plugins_url( 'css/main.css'                    , __FILE__ ) );
 	wp_enqueue_style( 'rm_3d_cube_css',            plugins_url( 'css/3D-cube.css'                 , __FILE__ ) );
	wp_enqueue_style( 'rm_flipping_element_css',   plugins_url( 'css/flipping-element.css'        , __FILE__ ) );
	wp_enqueue_style( 'rm_overlay_on_hover_css',   plugins_url( 'css/overlay-on-hover.css'        , __FILE__ ) );
	wp_enqueue_style( 'rm_sliding_transition_css', plugins_url( 'css/sliding-transition.css'      , __FILE__ ) );
	wp_enqueue_style( 'rm_blend_modes_css',        plugins_url( 'css/blend-modes.css'             , __FILE__ ) );
	wp_enqueue_style( 'rm_clip_path_css',          plugins_url( 'css/clip-path.css'				  , __FILE__ ) );
	wp_enqueue_style( 'rm_css_variables_css',      plugins_url( 'css/css-variables.css'			  , __FILE__ ) );
	wp_enqueue_style( 'rm_flexbox_css',            plugins_url( 'css/flexbox.css'                 , __FILE__ ) );
	wp_enqueue_style( 'rm_masks_css',              plugins_url( 'css/masks.css'                   , __FILE__ ) );
	wp_enqueue_style( 'rm_multi_col_layout_css',   plugins_url( 'css/multi-column-text-layout.css', __FILE__ ) );
	wp_enqueue_style( 'rm_home_css',               plugins_url( 'css/home.css'                    , __FILE__ ) );
	wp_enqueue_style( 'rm_viewport_animate_css',   plugins_url( 'css/viewport-animate-content.css', __FILE__ ) );
	wp_enqueue_style( 'rm_fav_google_fonts_css',   plugins_url( 'css/fav-google-fonts.css'        , __FILE__ ), array( 'rm_frontend_css' ) );
	
	wp_enqueue_script( 'rm_frontend_js',           plugins_url( 'js/main.js'                      , __FILE__ ), array( 'jquery' ), '', true );
	wp_enqueue_script( 'rm_viewport-animate_js',   plugins_url( 'js/viewport-animate.js'          , __FILE__ ), array( 'jquery' ), '', true );
	wp_enqueue_script( 'rm_fav_google_fonts_js',   plugins_url( 'js/fav-google-fonts.js'          , __FILE__ ), array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'rm_enqueue_scripts' );

?>