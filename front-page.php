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
<div class="hero-part container ">
		<div class="row">
			<div class="col-sm-6">
				<h1 class="tagline">TECH FOR YOUR <br>BUSINESS</h1>
				<h3 class="short-intro">We are a digital agency that focused on solving problems through technology.
				</h3>
				<div class="start-btn">
					<button class="input-lg">GET STARTED</button>
				</div>
        </div>
			<div class="col-sm-6 animate-me">
				<img src="<?php echo get_stylesheet_directory_uri().'/img/1.png';?>" class=" img-responsive">
        <div class="c">
          <div class="typewriter"><p>Hello World!</p></div>
        </div>
			</div>
		</div>
</div>

<!-- testimonials -->
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  	<h2>Testimonials</h2>
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        "lorem ipsum"
        <br><strong>-name</strong>
      </div>

      <div class="item">
        "hello world"
        <br><strong>-name</strong>

      </div>
    
      <div class="item">
        "hello there"
        <br><strong>-name</strong>

      </div>
    </div>

    <!-- Left and right controls -->
  </div>
<?php
get_footer();