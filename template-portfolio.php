<?php
/*
Template Name: Portfolio
*/
get_header();
?>
<div class="upper-z">
<div class="container">
<div style="height: 5em;"><div id="changeIt">Check out our awesome designs!</div></div>
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
						<div class="thumbnail img-responsive port" style="background-image:url('<?php echo $thumb["0"]?>');background-size: 100% 100%;height: 360px;">
							<div class="port-meta">
								<h2 class="head"><?php the_title();?></h2>
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

	<div class="designs">
		<div class="row">
			<?php $i=0;
			for($i=1;$i<=16;$i++){
				echo "<div class='col-md-3'><img src='".get_stylesheet_directory_uri()."/img/designs/".$i.".png' id='myImg".$i."' onclick=moda(".$i.")> </div>";
				?>
				<div id="myModal<?php echo $i; ?>" class="modal">
					  <!-- The Close Button -->
					  <span class="close" onclick="document.getElementById('myModal<?php echo $i; ?>').style.display='none'">&times;</span>
					   <div class="shrt"><?php echo do_shortcode('[masterslider id='.$i.']' ); ?></div>
				</div>
				<?php
			}
			?>
		</div>	
					
	</div>	
</div>
</div>
<script type="text/javascript">

</script>
<?php get_footer();