<?php
/**
 * The landing page template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kilobyte
 */

get_header(); ?>
	<div class="hero-part">
		<div class="container">
		<div class="row">
		<div class="col-sm-6">
			<h1 class="tagline">TECH FOR YOUR <br>BUSINESS</h1>
<<<<<<< HEAD
			<h3 class="short-intro">We are a digital agency that focused on solve problems through technology.
=======
			<h3 class="short-intro"> We are a digital agency that focused on solve problems through technology.
>>>>>>> e690e22aa47a36c34abee545e5b237482c390fec
			</h3>
		<div class="start-btn">
			<button class="input-lg">GET STARTED</button>
		</div>
		</div>
	<div class="col-sm-6">
	<img src="<?php echo get_stylesheet_directory_uri().'/img/1.png';?>" class="img-responsive">
	</div>
	</div>
	</div>
	</div>
<?php
get_footer();
