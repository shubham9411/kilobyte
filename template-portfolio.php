<?php
/*
Template Name: Portfolio
*/
get_header();
?>
<div class="container upper-z">
	<div class="row portfolio">
		<?php
		$args = array(
			'post_type'   => 'post-type-portfolio',
		);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
			// echo get_post_meta($post->ID, 'sub_heading', true);
			?>
			<div class="col-md-6 col-xs-12 col-sm-6">
				<div class="wrap card">
					<a href="<?php the_permalink();?>">
					
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
						<div class="thumbnail img-responsive" style="background-image:url('<?php echo $thumb["0"]?>');background-size: 100% 100%;height: 360px;">
							<div class="port-meta">
								<h3 class="head"><?php the_title();?></h3>
								<p class="bodytext"><?php echo get_post_meta( $post->ID, 'sub_heading', true ); ?></p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php
			endwhile;
		endif;
		?>
	</div>
</div>
<?php get_footer();