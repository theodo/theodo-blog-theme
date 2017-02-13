<?php

function join_us_renderer( $atts ){
	$html = "<hr />";
	$html .= "<p>You liked this article? You'd probably be a good match for our ever-growing tech team at Theodo.</p>\n";
	$html .= "<p style=\"text-align: center;\"><a target=\"_blank\" href=\"//www.theodo.com?utm_source=blog_article_joinus_button&utm_medium=blog&utm_campaign=blog\" class=\"button\"><i class=\"pw-icon-heart\"></i>Join Us</a></p>";
	return $html;
}

add_shortcode( 'joinus', 'join_us_renderer' );

function theodo_theme_enqueue()
{
	wp_enqueue_style( 'share-button-css', get_theme_root_uri() . '/theodo-blog-theme/css/share-button.min.css', null, null );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'share-button-js', get_theme_root_uri() . '/theodo-blog-theme/js/share-button.min.js', null, null );
	wp_enqueue_script( 'main-theodo', get_theme_root_uri() . '/theodo-blog-theme/js/main.js', null, null, true );
}

add_action( 'wp_enqueue_scripts', 'theodo_theme_enqueue' );
