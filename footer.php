<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kilobyte
 */

?>
<?php wp_footer(); ?>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
				
				</div>
				<div class="col-md-4 col-sm-5">
					<div class="social-contact">
						<h4>STAY CONNECTED WITH US</h4>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri().'/img/facebook.png';?>"></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri().'/img/linkedin.png';?>"></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri().'/img/twitter.png';?>"></a>
						<br>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri().'/img/instagram.png';?>"></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri().'/img/google-plus.png';?>"></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-3">
					<div class="address-footer">
						<p>13,PNB Road Sector 2A, Vaishali</p>
						<p>Ghaziabad</p>
						<p>contact@kilobytetech.com</p>
						<p>7895210001</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>
