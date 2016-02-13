<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div id="site-header">
				<div id="site-logo">
					<a href="http://warchestboutique.com">
							<img src="http://warchestboutique.com/wp-content/uploads/2015/03/WARChestLogo.svg" width="250" height="120" /> 
					</a>
				</div>
			<!-- TOP NAVIGATION BAR-->
			<div id="top-nav-wrapper">
				<ul id="top-nav">
					<li class="top-nav-item"><a href="http://store.warchestboutique.com/"><img style="width: 18px;margin-top: -7px;margin-right: 5px;opacity: .5;" src="http://warchestboutique.com/wp-content/uploads/2014/05/shopping-cart.png" />Shop</a></li>
					<li class="top-nav-item" id="menu-item-24"><a href="http://warchestboutique.com/get-involved/">Get Involved</a></li>
					<li class="top-nav-item" id="menu-item-23"><a href="http://warchestboutique.com/store-locations/">Store Locations</a></li>
					<li class="top-nav-item" id="menu-item-22"><a href="http://warchestboutique.com/lookbooks/">Lookbooks</a></li>
					<li class="top-nav-item" id="menu-item-21"><a href="http://warchestboutique.com/our-story/">Our Story</a></li>
					
				</ul>
			</div>
			<!-- End of TOP NAVIGATION BAR-->
			</div>
	</header><!-- #masthead -->

		<div id="main" class="site-main">
