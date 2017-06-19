<?php
get_header(); 
/* 
Template Name: casestudies
*/
get_header();
?>
<div class="container">
<?php
$args = array('post_type' => 'casestudy' );
$loop = new WP_Query($args);
if($loop->have_posts()):
	while ($loop->have_posts()): $loop->the_post(); ?>
	<div class="card">
	<div class="row">
		<div class="col-md-4 case-study-image">
			<div class="thumbnail"><?php if(has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('large','class=img-responsive');
			endif;
			?>
			</div>
		</div>
		<div class="col-md-8 case-study-content">
		<h1><?php the_title()?></h1>
		<?php 	the_excerpt();?>
		</div>
	</div>
	</div><br>
	<?php 
	endwhile;
endif;
wp_reset_postdata();
?>
</div>
<?php 
get_footer(); 
?>