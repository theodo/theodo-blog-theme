<?php
	if ( function_exists( 'coauthors_posts_links' ) ) {
    get_template_part( 'part', 'byline_co_author' );
	} else {
		get_template_part( 'part', 'byline_single_author' );
	}
?>
