<?php
/**
 * @package Buffer
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<div class="featured-image">
			<span class="gradient-overlay"></span>
			<?php
			// Must be inside a loop.

			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
				echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/article-header-default.png" />';
			}
			?>
		</div>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php theodo_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php if(strstr($post->post_content,'<!--more-->')) { the_content(); } else { the_excerpt(); } ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'buffer' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
