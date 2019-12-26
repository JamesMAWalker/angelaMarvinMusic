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
	<title>Angela Marvin Music</title>
	<?php wp_head(); ?>

</head>	

<?php global $post; ?>

<body>
	<a href="/#">
		<img class="nav__logo-phone" src="<?php echo get_template_directory_uri()?>/assets/images/provisional-logo.svg" alt="angela marvin monogram">
	</a>
	<nav class="nav <?php if ($post->ID === 28) {echo 'nav--about';} ?>" data-scroll>
		<a href="#section-listen" class="nav__item " data-scroll>music</a>
		<a href="#section-blog" class="nav__item " data-scroll>blog</a>
		<a href="/#">
			<img class="nav__logo" src="<?php echo get_template_directory_uri()?>/assets/images/provisional-logo.svg" alt="angela marvin monogram">
		</a>
		<a href="<?php get_home_url()?>/about" class="nav__item " data-scroll>about</a>
		<a href="#section-contact" class="nav__item " data-scroll>contact</a>
	</nav>
	<input type="checkbox" class="nav__checkbox" id="nav-toggle">
	<label for="nav-toggle" class="nav__btn-phone"></label>
	

	
