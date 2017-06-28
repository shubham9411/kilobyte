<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kilobyte
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-xs-12" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="prev-next">
                <?php
                $next_post = get_next_post();
                if (!empty( $next_post )): ?>
                      <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><button class="btn-sm btn-prev">PREV</button></a>
                <?php endif; ?>
                <?php
                $prev_post = get_previous_post();
                if (!empty( $prev_post )): ?>
                  <a href="<?php echo $prev_post->guid ?>"><button class="btn-sm btn-next">NEXT</button></a>
                <?php endif ?>
            </div>
<?php
get_footer();
