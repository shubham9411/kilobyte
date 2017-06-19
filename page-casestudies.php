<?php
get_header();
/* 
Template Name: casestudies
*/

?>
<div class="row container">
<?php
$args = array('post_type' => 'casestudy' );
$loop = new WP_Query($args);
if($loop->have_posts()):
	while ($loop->have_posts()): $loop->the_post(); ?>
	<div class="card">
	<div class="thumbnail"><?php if(has_post_thumbnail() ): ?>
	<?php the_post_thumbnail(medium);
	endif;
	?>
	</div>
	<h1><?php the_title()?></h1>
	<?php 	the_excerpt();?>
	</div><br>
	<?php 
	endwhile;
endif;

?>
</div>
<?php 
get_footer(); 
?>