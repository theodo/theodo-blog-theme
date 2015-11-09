<?php

function join_us_renderer( $atts ){
	$html = "<hr />";
	$html .= "<p>You liked this article? You'd probably be a good match for our ever-growing tech team at Theodo.</p>\n";
	$html .= "<p style=\"text-align: center;\"><a target=\"_blank\" href=\"http://www.theodo.fr/en/joinus\" class=\"button\"><i class=\"pw-icon-heart\"></i>Join Us</a></p>";
	return $html;
}

add_shortcode( 'joinus', 'join_us_renderer' );

function theodo_theme_enqueue()
{
	wp_enqueue_style( 'share-button-css', get_template_directory_uri() . '/css/share-button.min.css', null, null );
	wp_enqueue_script( 'share-button-js', get_template_directory_uri() . '/js/share-button.min.js', null, null );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', null, null );
}

add_action( 'wp_enqueue_scripts', 'theodo_theme_enqueue' );
