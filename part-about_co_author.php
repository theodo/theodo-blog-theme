<aside class="about-author">
	<h3><?php echo __( 'WRITTEN BY', 'read' ); ?></h3>

	<div class="author-bio">
		<?php
			$coauthors = get_coauthors();
			$descriptions = get_the_coauthor_meta( 'description' );
			foreach( $coauthors as $coauthor ):
		?>
    <div style="min-height: 110px;">
  		<div class="author-img">
  			<a href="<?php echo get_author_posts_url( $coauthor->ID, $coauthor->user_nicename ); ?>">
  				<?php
  					echo coauthors_get_avatar( $coauthor, 192, "", $coauthor->user_nicename );
  				?>
  			</a>
  		</div>

  		<div class="author-info">
				<h4 class="author-name"><?php echo $coauthor->display_name; ?></h4>
  			<p>
  				<?php
  					echo $descriptions[$coauthor->ID];
  				?>
  			</p>
  		</div>
    </div>
		<?php endforeach; ?>
	</div>
</aside>
