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
</div> 


<div class="container">
<div class="designs">
	<div class="row">
			<?php $i=0;
			for($i=1;$i<=16;$i++){
				echo "<div class='col-md-3 col-lg-3 col-sm-4' id ='slider".$i."'>
				<a href='' data-rel='lightcase:myCollection".$i."' id='myImg".$i."'><img src='".get_stylesheet_directory_uri()."/img/designs/".$i.".jpg' ></a></div>";
			}
			?>
		</div>	
</div>
</div>
</div>
<script type="text/javascript">

	jQuery(document).ready(function(jQuery) {
		jQuery('a[data-rel^=lightcase]').lightcase();
		jQuery('a[data-rel=lightcase:myCollection:slideshow]').lightcase({
		transition: 'scrollHorizontal',
		showSequenceInfo: false,
		showTitle: false
		});	
	});

		var a={
			slider1: ['a1.png','a2.png','a3.png'],
			slider2: ['b1.png','b2.png','b2.png','b3.png','b4.png','b5.png','b6.png','b7.png','b8.png','b9.png'],
			slider3:['c1.jpg','c2.jpg','c3.jpg','c4.jpg','c5.jpg','c6.jpg','c7.jpg','c8.jpg','c9.jpg'],
			slider4:['d1.jpg','d2.jpg','d3.jpg','d4.jpg','d5.jpg','d6.jpg','d7.jpg','d8.jpg','d9.jpg','d10.jpg','d11.jpg','d12.jpg','d13.jpg'],
			slider5:['e1.png','e2.png','e2.png','e3.png','e4.png','e5.png','e6.png','e7.png','e8.png','e9.png'],
			slider6:['y0.png','y1.png','y2.png','y2.png','y3.png','y4.png','y5.png','y6.png','y7.png','y8.png'],
			slider7:['r1.jpg','r2.jpg','r3.jpg','r4.jpg','r5.jpg','r6.jpg'],
			slider8:['z1.jpg','z2.jpg','z3.jpg','z4.jpg','z5.jpg'],
			slider9:['a1.jpg','a2.jpg','a3.jpg','a4.jpg','a5.jpg','a6.jpg','a7.jpg'],
			slider10:['k1.jpg','k2.jpg','k3.jpg','k4.jpg'],
			slider11:['sm1.png','sm2.png','sm3.png','sm4.png','sm5.png','sm6.png'],
			slider12:['j0.jpg'],
			slider13:['a1.png','a2.png','a3.png','a4.png','a5.png','a6.png'],
			slider14: ['mb1.png','mb2.png','mb2.png','mb3.png','mb4.png','mb5.png','mb6.png','mb7.png','mb8.png','mb9.png','mb10.png'],
			slider15:['q1.jpg','q2.jpg','q3.jpg','q4.jpg','q5.jpg','q6.jpg','q7.jpg','q8.jpg'],
			slider16:['c1.jpg','c2.jpg','c3.jpg'],
		  }
	var j=0;
	for(var key in a){
	j++;
	var sImg = "";
	var l =a[key].length;
	var x="<?php echo wp_upload_dir()['baseurl'];?>/portfolioImg/"+j+"/"+a[key][0];
	jQuery("#"+key+" #myImg"+j).attr("href", x)
	for(var i=1;i<l;i++)
	{	
		sImg+='<a href="<?php echo wp_upload_dir()['baseurl'];?>/portfolioImg/'+j+'/'+a[key][i]+'" data-rel="lightcase:myCollection'+j+'"></a>';
	}
 	// console.log(sImg);
 	jQuery('#'+key).append(sImg);
 	}
</script>


<?php get_footer();