<?php
/*
Template Name: casestudies
*/

get_header();
?>
<div class="container upper-z">
	<div class="case-studies">
		<?php
		$args = array('post_type' => 'post-type-casestudy' );
		$loop = new WP_Query($args);
		if($loop->have_posts()):
		while ($loop->have_posts()): $loop->the_post(); ?>
		<div class="card">
			<div class="row" onclick="window.location = '<?php the_permalink(); ?>';">

				<div class="col-md-4 col-sm-5 case-study-image">
					<div ><?php if(has_post_thumbnail() ): ?>
						<?php the_post_thumbnail('large','class=img-responsive');
						endif;
						?>
					</div>
				</div>
				<div class="col-md-8 col-sm-7 case-study-content">
					<h1><?php the_title()?></h1>
					<?php the_excerpt();?>
				</div>
			</div>
		</div><br>
		<?php
		endwhile;
		endif;
		wp_reset_postdata();
		?>
	</div>
</div>
<?php
get_footer();
?>