<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kilobyte
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Francois+One|Oswald:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nova+Mono|Share+Tech+Mono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="navbar navbar-default" id="site-header-nav">
	<div class= "container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?php echo bloginfo( 'url' ); ?>"><img src="<?php echo get_stylesheet_directory_uri().'/img/logo.png';?>" class="img-responsive logo-image"></a>
		</div>
		<div id="top-menu" class="navbar-collapse collapse navbar-right">
			<?php
				$args = array(
					'theme_location' => 'top',
					'container' => 'ul',
					'menu_class' => 'nav navbar-nav menu-bar',
					'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
					'depth' => 0,
					'walker' => new Walker_Nav_top(),
				);
				wp_nav_menu( $args );
				?>
		</div><!--.nav-collapse -->
	</div>
</nav>
