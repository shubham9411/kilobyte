<?php
/**
* The landing page template
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package kilobyte
*/
get_header(); ?>
<div class="upper-z">
<!-- hero section -->
<div class="hero-section container">
    
    <div>
        <div class="tag-line">
            Digital Products that Businesses <i>love.</i>
        </div>
        <div class="short-intro">
            We craft digital products and experiences to start, scale and empower identities and organisations.
        </div>
      <div class="btn strt-btn">Experience More</div>
    </div>
    <div class="gif row">
        <div class="col-md-8 col-sm-6">
            <img src="<?php echo get_stylesheet_directory_uri().'/img/main.gif';?>" class="img-responsive main-gif" id="image-gif">
            <img src="<?php echo get_stylesheet_directory_uri().'/img/main.png';?>" class="img-responsive hero-image">
        </div>
    </div>
</div>
<!-- work section -->
<?php
 $i=0;
 $args = array(
      'post_type'   => 'post-type-portfolio','posts_per_page' => 3);
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
      $thumb[$i] = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
      $titl[$i] = get_the_title();
      $sub[$i] = get_post_meta( $post->ID, 'sub_heading', true );
      $i=$i+1;
      endwhile;
    endif;
    ?>

<div class="work">
  <div class="work-meta container">
    <h1>Work</h1>
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="w1 port " style="background-image:url('<?php echo $thumb[0]["0"]?>');background-size: 100% 100%;">
                <div class="port-meta">
                  <h2><?php echo $titl[0] ?></h2>
                  <p><?php echo $sub[0] ?></p>
                </div>
            </div>       
            <div class="w2 port" style="background-image:url('<?php echo $thumb[1]["0"]?>');background-size: 100% 100%; ">
                  <div class="port-meta">
                    <h2><?php echo $titl[1] ?></h2>
                    <p><?php echo $sub[1] ?></p>
                  </div>
            </div>
          </div>
      <div class=" col-md-6 col-xs-12">
          <div class="w3 port" style="background-image:url('<?php echo $thumb[2]["0"]?>');background-size: 100% 100%; ">
              <div class="port-meta">
                <h2><?php echo $titl[2] ?></h2>
                <p><?php echo $sub[2] ?></p>
              </div>
          </div>
      </div>
      </div>
      <div class="sm"><a href="<?php echo get_page_link(1942);?>"><h2>See More</h2></a></div>
  </div>
</div>

<!-- blogs and case study -->
<div class="container">
  <div class="reading-section row">
    <div class="col-md-6 col-lg-6 case-study">
      <h1>Case Studies</h1>
            <div class="card cs-cont">
                <?php 
                    $args = array('post_type' => 'post-type-casestudy','posts_per_page' => 1 );
                    $loop = new WP_Query($args);
                    if($loop->have_posts()):
                      while ($loop->have_posts()): $loop->the_post();?>
                     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <?php the_excerpt();
                      endwhile;
                    endif;
                   wp_reset_postdata();
                ?>
            </div>
            <a href="<?php echo get_page_link(1997);?>"><h2>See more</h2></a>  
    </div>
    <div class="col-md-6 col-lg-6 blog">
      <h1>Blogs</h1>
      <div class="card blog-cont">
              <?php 
                    $args = array('post_type' => 'post','posts_per_page' => 1 );
                    $loop = new WP_Query($args);
                    if($loop->have_posts()):
                      while ($loop->have_posts()): $loop->the_post();?>
                     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <?php the_excerpt();
                      endwhile;
                    endif;
                   wp_reset_postdata();
                ?></div>
      <a href="<?php echo get_page_link(1847);?>"><h2>See more</h2></a>
    </div>
  </div>
</div>
<!-- client logo -->
<div class="client-logos"> 
</div>
</div>
<script type="text/javascript">
  jQuery(document).ready(function(){
   var gifSource = jQuery('#image-gif').attr('src'); //get the source in the var
    jQuery('#image-gif').attr('src', ""); //erase the source     
    jQuery('#image-gif').attr('src', gifSource+"?"+new Date().getTime());
  });
</script>
<?php
get_footer();
