<?php
/*
Template Name: Portfolio
 */

get_header();
?>
<link href="https://fonts.googleapis.com/css?family=Anton|Poiret+One" rel="stylesheet">
<div class="container portfolio">
<?php
$args = array(
	'post_type'   => 'portfolio',
);
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
	// echo get_post_meta($post->ID, 'sub_heading', true);
	?>
	<div class="col-xs-6">
		<div class="wrap card">
			<?php the_post_thumbnail( 'portifolio-thumbnail', 'class=img-responsive' ); ?>
			<div class="port-meta">
				<h3 class="head"><?php the_title();?></h3>
				<p class="bodytext"><?php echo get_post_meta( $post->ID, 'sub_heading', true ); ?></p>
			</div>
		</div>
	</div>
	<?php
	endwhile;
endif;
?>
</div>
<?php get_footer();