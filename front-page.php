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
<div class="container">
<div class="hero-part">
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

<!-- blogs -->
<div class="blogs-more">
  <a href="a.com"><h1 style="float: right;">See more</h1></a></div>
<div class="row grid">
  <?php
  $args = array('post_type' => 'post','posts_per_page' => 3  );
  $loop = new WP_Query($args);
  if($loop->have_posts()):
    while ($loop->have_posts()): $loop->the_post(); ?>
    <div class="card col-md-4 col-sm-6 col-xs-12 blogc" onclick="window.location = '<?php the_permalink(); ?>';">
      <div class="blog-detail blog-featured">
        <h1><?php the_title();?></h1>
        <?php the_excerpt();?>
      </div>
    </div>
    <?php
    endwhile;
  endif;
  wp_reset_postdata();
  ?>
  </div>

<!-- portfolio-->
<div class="row">
<?php
$args = array(
  'post_type'   => 'post-type-portfolio','posts_per_page' => 2);
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
  // echo get_post_meta($post->ID, 'sub_heading', true);
  ?>
  <div class="col-md-6 col-xs-12 col-sm-6">
    <div class="wrap card">
      <a href="<?php the_permalink();?>">
      <?php the_post_thumbnail( 'portifolio-thumbnail', 'class=img-responsive' ); ?>
      <div class="port-meta">
        <h3 class="head"><?php the_title();?></h3>
        <p class="bodytext"><?php echo get_post_meta( $post->ID, 'sub_heading', true ); ?></p>
      </div>
      </a>
    </div>
  </div>
  <?php
  endwhile;
endif;
?>
</div>
<?php
get_footer();