<?php
/*
Template Name: single-team-page
*/
get_header();
?>
	<div class="single-team-page" id="single-team">
		<div class="container">
			<div class="member-cover">
				<div class="img-responsive"><?php $author_info=get_userdata($_GET['uid']);
				echo get_avatar($author_info->ID, 220 );?></div>
				<h1><?php 
						echo $author_info->first_name . ' ' . $author_info->last_name;?>
				</h1>
				<h3><?php if($author_info->urole) echo '('.$author_info->urole.')'?></h3>
			</div>
			<br>
			<div class="member-desc">
				<div class="row">
					<?php  	if($author_info->user_description){?>
					<div class="col-md-7">
						
								<?php echo "<h2>DESCRIPTION</h2><div class='member-detailed'>".$author_info->user_description."</div>";?>
					</div>
					<?php }?>
					<div class="col-md-5">
						<div class="member-blog">
								<?php
								    $args = array( 'author__in'=>$author_info->ID,'post_type'=> 'personalblogs');
								    $loop = new WP_Query($args);
								    if ( $loop->have_posts() ) :
								    	echo "<h2>BLOGS</h2>";
								     while ( $loop->have_posts() ) : $loop->the_post();
								      ?><h4><?php the_title();?></h4>
								    <?php
								    endwhile;
								  endif;
								  ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
?>