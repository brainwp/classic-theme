<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Classic Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="geral">	
	<div id="page" class="hfeed site">
	   
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<div class="logo">
						<?php
						   // Check to see if the header image has been removed
						   $header_image = get_header_image();
						   if ( ! empty( $header_image ) ) :
						?>
						   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
						<?php endif; // end check for removed header image ?>
				
					</a>
					</div><!-- .logo -->
					<div class="inf-header">
						<h2 class="inf-texto"><?php echo of_get_option( 'mo_telefone' ); ?></h2>
						<h2 class="inf-texto"><?php echo of_get_option( 'mo_email' ); ?></h2>
					</div><!-- .inf-header-->	
				</div><!-- .site-branding -->


				<nav id="site-navigation" class="main-navigation" role="navigation">
					<h1 class="menu-toggle"><?php _e( 'Menu', 'classic-theme' ); ?></h1>
					<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'classic-theme' ); ?></a>

					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
