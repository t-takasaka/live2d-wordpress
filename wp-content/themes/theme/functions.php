<?php

/**
 * existing functions
 */

/**
 * Live2D function
 */
function live2d_koharu() {
	wp_enqueue_script('pixi', 'https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.6.1/pixi.min.js', '', '1.0', false);
	//By including below library in your project you agree to http://live2d.com/eula/live2d-proprietary-software-license-agreement_en.html
	wp_enqueue_script('live2dcubismcore', 'https://s3-ap-northeast-1.amazonaws.com/cubism3.live2d.com/sdk/js_eap/live2dcubismcore.min.js', '', '1.0', false);
	wp_enqueue_script('live2dcubismframework', get_stylesheet_directory_uri() . '/js/live2dcubismframework.js', '', '1.0', false);
	wp_enqueue_script('live2dcubismpixi', get_stylesheet_directory_uri() . '/js/live2dcubismpixi.js', '', '1.0', false);
	wp_enqueue_script('pixiKoharu', get_stylesheet_directory_uri() . '/js/pixiKoharu.js', '', '1.0', false);
}
add_action( 'wp_enqueue_scripts', 'live2d_koharu' );

