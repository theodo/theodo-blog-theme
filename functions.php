<?php

function join_us_renderer( $atts ){
	$html = "<p>You liked this article? You'd probably be a good match for our ever-growing tech team at Theodo.</p>\n";
	$html .= "<p style=\"text-align: center;\"><a target=\"_blank\" href=\"http://www.theodo.fr/en/joinus\" class=\"button\"><i class=\"pw-icon-heart\"></i>Join Us</a></p>";
	return $html;
}

add_shortcode( 'joinus', 'join_us_renderer' );
