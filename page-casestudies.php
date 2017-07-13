<?php
/*
Template Name: casestudies
*/

get_header();
?>
<div class="container upper-z">
	<div class="case-studies">
		<?php
		$i=0;
		$args = array('post_type' => 'post-type-casestudy' );
		$loop = new WP_Query($args);
		if($loop->have_posts()):
		while ($loop->have_posts()): $loop->the_post(); 
		$i++;
		?>
		<div class="card" style='border-left: 10px solid <?php echo get_post_meta( $post->ID, 'case_study_color', true );?>;'>
			<div class="row" onclick="window.location = '<?php the_permalink(); ?>';">
				<div class="col-md-8 col-sm-7 case-study-content">
					<h1><?php the_title(); echo $i;?></h1>
					<?php the_excerpt();?>
				</div>
				<div class="col-md-4 col-sm-5 case-study-image">
					<div class=""><?php if(has_post_thumbnail() ): ?>
						<?php the_post_thumbnail('thumbnail','class=img-responsive');
						endif;
						?>
					</div>
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