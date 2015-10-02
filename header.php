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
	<meta name="title" content="Theodo - Développement web Symfony - Refonte agile d'existant PHP">
	<meta name="description" content="Expertises de Theodo : développement symfony PHP agile sur des projets webs complexes">
	<meta name="keywords" content="symfony, développement symfony, Business intelligence, développement agile">
	<meta name="robots" content="index, follow">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="//brick.a.ssl.fastly.net/Merriweather:400,900,400i,900i/Open+Sans:300,400,700,300i,400i,700i" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="Buffer <?php bloginfo( 'name' ); ?> Feed" href="<?php echo site_url(); ?>/feed/">

	<style type="text/css">.tk-chaparral-pro{font-family:"chaparral-pro",sans-serif;}.tk-brandon-grotesque{font-family:"brandon-grotesque",sans-serif;}.tk-source-code-pro{font-family:"source-code-pro",sans-serif;}</style>
	<link rel="stylesheet" href="https://use.typekit.net/c/e0c17b/1w;brandon-grotesque,7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191,Y2l:W:n4,Y2q:W:n7;chaparral-pro,0ef9b1376f80b53bba8303eb38b8c5b4d636d5ab3e267bbfebde9089ee81d46f,XXw:W:i4,XY8:W:n4,XXk:W:n7;source-code-pro,2,gm0:W:i4,glz:W:n4,gm5:W:n7/l?3bb2a6e53c9684ffdc9a9bf7195b2a62598733aa752328711c758b15539a122671e8ab741601e3387c6599f931584899a0e9f7aa16c72e4ebd2c8698ed34832c57d4698b60372f7785e1bc857e05ca16d6f313c32c457c11d24dfa2859445e4ea96863ecbafbd51ce7672918e771e1ede7" media="all">
	
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
	<div id="social-menu">
		<ul>
			<li><a target="_blank" href="https://www.facebook.com/theodo.fr" title="Facebook"><span class="icon-facebook2"></span></a></li>
			<li><a target="_blank" href="https://twitter.com/theodo" title="Twitter"><span class="icon-twitter2"></span></a></li>
			<li><a target="_blank" href="http://www.linkedin.com/company/theodo" title="LinkedIn"><span class="icon-linkedin"></span></a></li>
			<li><a href="//theodo.fr/contact" title="Contact"><span class="icon-mail"></span></a></li>
		</ul>
	</div>

<div id="page" class="hfeed site">

	<div id="content" class="site-content">
