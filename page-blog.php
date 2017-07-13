<?php
get_header();
/* 
Template Name: blog
*/
?>
	<div class="upper-z container">

		<?php
		$args = array('post_type' => 'post' );
		$loop = new WP_Query($args);
		if($loop->have_posts()):
	     while ($loop->have_posts()): $loop->the_post(); ?>
	 	<div class="blog-c">
			<div class="blog-img container"><?php if(has_post_thumbnail()){ ?>
			<img src=" <?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>" style="width:100%; height:300px;">
			      <?php 
			      }
			      else{?>
			      <img src=" <?php echo get_template_directory_uri()."/img/default.jpg" ?>" style="width:100%; height:300px;">
				<?php
				      }
			      ?>
			</div>
		    <div class="blog-details card" onclick="window.location = '<?php the_permalink(); ?>';">
		    	<div class="blog-title">
				    <h1><?php the_title();?></h1>
		        </div>	
		    </div>
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