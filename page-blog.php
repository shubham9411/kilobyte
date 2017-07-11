<?php
get_header();
/* 
Template Name: blog
*/
?>
<div class="container">
	<div class="row grid">
	<?php
	$args = array('post_type' => 'post' );
	$loop = new WP_Query($args);
	if($loop->have_posts()):
		while ($loop->have_posts()): $loop->the_post(); ?>
		<div class="card col-md-4 col-sm-6 col-xs-12 blogc" onclick="window.location = '<?php the_permalink(); ?>';">
			<div><?php if(has_post_thumbnail() ){ ?>
			<?php the_post_thumbnail('blog-thumbnail','class= img-responsive');
			}
			?>
			</div>
			<div class="blog-detail">
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
</div>
<?php 
get_footer(); 
?>