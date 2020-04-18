<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ronja_ceramics
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Pontano+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ronjaceramics' ); ?></a>

	<header id="masthead" class="site-header">

<img class="mx-auto d-block logo img-fluid" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logostrans.png">
		<nav id="site-navigation" class="main-navigation nav navbar nav-item">

			<?php /* Primary navigation */
	wp_nav_menu( array(
	  'menu' => 'Primary 2',
	  'depth' => 2,
	  'container' => true,
	  'menu_class' => 'nav navbar nav-link',
		'items_wrap'      => '<ul class="nav justify-content-end w-100 %2$s">%3$s</ul>',
	  //Process nav menu using our custom nav walker
	  'walker' => new wp_bootstrap_navwalker())
	);
	?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
