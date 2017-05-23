<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skarma
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Squada+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>	
	
	<div class="nav-1">
		<span class="forthewin">#FORTHEWIN</span>
		<span class="skarma">SKARMA.ORG</span>
		<span class="beetroots">BEETROOTS</span>
		<span class="ticketing">TICKETING</span>
	</div>

	<div class="nav-2">
		<?php wp_nav_menu(); ?>	
	</div>

	<div id="page" class="site">
	
		<div id="content" class="site-content">
		