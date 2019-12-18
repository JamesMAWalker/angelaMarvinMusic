<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day|Nunito:200,300,400&display=swap" rel="stylesheet">
	<title>Angela Marvin Music</title>
	<?php wp_head(); ?>

</head>	
<body>
	<nav class="nav">
		<div class="nav__item sub-header-1">music</div>
		<div class="nav__item sub-header-1">blog</div>
		<img class="nav__logo" src="<?php echo get_template_directory_uri()?>/assets/images/provisional-logo.svg" alt="angela marvin monogram">
		<div class="nav__item sub-header-1">about</div>
		<div class="nav__item sub-header-1">contact</div>
	</nav>
	

	
