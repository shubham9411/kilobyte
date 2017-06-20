<?php
get_header();
/* 
Template Name: blog
*/
?>
<div class="container">
<div class="row">
<?php
$args = array('post_type' => 'post' );
$loop = new WP_Query($args);
if($loop->have_posts()):
	while ($loop->have_posts()): $loop->the_post(); ?>
	<div class="card col-sm-4 col-xs-6 blogc">
	<div class="thumbnail"><?php if(has_post_thumbnail() ){ ?>
	<?php the_post_thumbnail('medium_large','class= img-responsive');
	}
	?>
	</div>
	<h1><?php the_title();?></h1>
	<?php the_excerpt();?>
	</div>
	<?php
	endwhile;
endif;
wp_reset_postdata();
?>
</div>
<?php 
get_footer(); 
?>