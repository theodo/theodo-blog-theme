<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Buffer
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<title>Theodo blog <?php wp_title( '|', true, 'left' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="//brick.a.ssl.fastly.net/Merriweather:400,900,400i,900i/Open+Sans:300,400,700,300i,400i,700i" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700" rel="stylesheet" type="text/css">

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="Buffer <?php bloginfo( 'name' ); ?> Feed" href="<?php echo site_url(); ?>/feed/">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<header class="header">
		<div class="centered">
			<a id="logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.gif" /></a>
			<nav id="nav-wrap" role="navigation">
				<?php if ( has_nav_menu( 'primary' )  ) : ?>
						<?php
							// Primary navigation menu.
							wp_nav_menu( array(
								'menu_class'     => 'nav-menu',
								'theme_location' => 'primary',
								'walker'         => new Theodo_Nav_Menu_Walker(),
							) );
						?>
				<?php endif; ?>
			</nav><!-- .main-navigation -->
		</div>
	</header>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home <?php bloginfo( 'name' ); ?>" class="site-title"><?php bloginfo( 'name' ); ?></a>
			<div class="tagline"><?php bloginfo( 'description' ); ?></div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
