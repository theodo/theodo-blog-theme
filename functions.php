<?php

function theodo_theme_enqueue()
{
	wp_enqueue_style( 'share-button-css', get_theme_root_uri() . '/theodo-blog-theme/css/share-button.min.css', null, null );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'share-button-js', get_theme_root_uri() . '/theodo-blog-theme/js/share-button.min.js', null, null );
	wp_enqueue_script( 'main-theodo', get_theme_root_uri() . '/theodo-blog-theme/js/main.js', null, null, true );
}

add_action( 'wp_enqueue_scripts', 'theodo_theme_enqueue' );

?>