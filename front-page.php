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
    <div><img src="<?php echo get_stylesheet_directory_uri().'/img/baloon.png'?>" class="baloon"></div>
    <div>
        <div class="tag-line">
            Digital Products that Businesses <i>love.</i>
        </div>
        <div class="short-intro">
            We craft digital products and experiences to start, scale and empower identities and organisations.
        </div>
      <div class="btn strt-btn" id="ex-more">Experience More</div>
    </div>
    <div class="gif row">
        <div class="col-md-8 col-sm-6">
            <img src="<?php echo get_stylesheet_directory_uri().'/img/main.gif';?>" class="img-responsive main-gif" id="image-gif">
            <img src="<?php echo get_stylesheet_directory_uri().'/img/main.png';?>" class="img-responsive hero-image">
        </div>
    </div>
</div>
<!-- work section -->

<div class="work" id="scroll-onxp">
  <div class="work-meta container">
    <h1>Work</h1>
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <div class="w1 port " style="background-image:url('<?php echo get_template_directory_uri()."/img/portfolio/farcon.png"?>');background-size: 100% 100%;">
                <div class="port-meta">
                  <h2>Org for leagues</h2>
                  <p>Online platform where you can buy vegetales</p>
                </div>
            </div>       
            <div class="w2 port" style="background-image:url('<?php echo get_template_directory_uri()."/img/portfolio/flyboy.png"?>');background-size: 100% 100%; ">
                  <div class="port-meta">
                    <h2>Flyboy</h2>
                  <p></p>
                  </div>
            </div>
          </div>
          <div class=" col-md-6 col-xs-12">
              <div class="w3 port" style="background-image:url('<?php echo get_template_directory_uri()."/img/portfolio/o4l.png" ?>');background-size: 100% 100%; ">
                  <div class="port-meta">
                    <h2>Org for leagues</h2>
                    <p>A platform to host leagues and manage teams</p>
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
      <h1>Thoughts</h1>
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
<div class="brands">
  <div class="client-logos container">
  <h1>Brands</h1>
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/bs.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/v.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/clj.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/fb.png" ?>" class="img-responsive"></div>

      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/w.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/ew.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/fc.png" ?>" class="img-responsive"></div>      
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/sd1.png" ?>" class="img-responsive"></div>

      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/tm.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/m.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/o4l.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/au.png" ?>" class="img-responsive"></div>

      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/br.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/d1.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/tmb.png" ?>" class="img-responsive"></div>
      <div class="col-md-3 col-sm-4 col-xs-6"><img src="<?php echo get_template_directory_uri()."/img/logos/fa.png" ?>" class="img-responsive"></div>

    </div>
  </div>
  </div>
</div> <!-- upper-z end -->
<script type="text/javascript">
  jQuery(document).ready(function(){
   var gifSource = jQuery('#image-gif').attr('src'); //get the source in the var
    jQuery('#image-gif').attr('src', ""); //erase the source     
    jQuery('#image-gif').attr('src', gifSource+"?"+new Date().getTime());

    jQuery('#ex-more').click(function() {
        if(jQuery(window).width() >=767){
                jQuery('html, body').animate({
                scrollTop: jQuery("#scroll-onxp").offset().top-30
            }, 300);
            }
        else{
            jQuery('html, body').animate({
                scrollTop: jQuery("#scroll-onxp").offset().top-60
            }, 300);
        }
    });
  });
</script>
<?php
get_footer();
