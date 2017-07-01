<?php
/*
Template Name: single-team-page
*/
get_header();
?>
	<div class="single-team-page" id="single-team">
		<div class="container">
			<div class="member-cover">
				<div class="row" style="width: 100%;">
					<div class="col-md-7 col-sm-7">
						<h1><?php
							$author_info=get_userdata($_GET['uid']);
						 echo $author_info->first_name . ' ' . $author_info->last_name;?>
						 </h1>
						<h3><?php if($author_info->urole) echo '('.$author_info->urole.')'?></h3>
					</div>
					<div class="col-md-5 col-sm-5">
						<div ><div class="img-responsive"><?php echo get_avatar($author_info->ID, 220 );?></div>
						</div>

					</div>
				</div>
			</div>
			<br>
			<div class="member-desc">
				<div class="row">
					<div class="col-md-7">
						<div class="member-detailed">
							<?php  	if($author_info->user_description){echo "<h2>DESCRIPTION</h2><p>".$author_info->user_description."</p>";}?>
						</div>
					</div>
					<div class="col-md-5">
						<div class="member-blog">
							<h2>BLOGS</h2>
								<?php
								    $args = array( 'author__in'=>$author_info->ID,'post_type'=> 'personalblogs');
								    $loop = new WP_Query($args);
								    if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
								      ?><h2><?php the_title();?></h2>
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