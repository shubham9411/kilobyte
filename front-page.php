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
			<h1 class="tagline">TECH FOR YOUR <br>BUSINESS</h1>
			<h3 class="short-intro">" We are a digital agency that focused on solve problems through technology."
			</h3>
		<div class="start-btn">
			<button class="input-lg">GET STARTED</button>
		</div>
	</div>
<?php
get_footer();
