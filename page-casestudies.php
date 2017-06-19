<?php
get_header();
/* 
Template Name: casestudies
*/

?>
<div class="container">
<?php
$args = array('post_type' => 'casestudy' );
$loop = new WP_Query($args);
if($loop->have_posts()):
	while ($loop->have_posts()): $loop->the_post(); ?>
	<div class="card">
	<div class="row">
		<div class="col-md-4">
			<div class="thumbnail"><?php if(has_post_thumbnail() ): ?>
			<?php the_post_thumbnail('large','class=img-responsive');
			endif;
			?>
			</div>
		</div>
		<div class="col-md-8">
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