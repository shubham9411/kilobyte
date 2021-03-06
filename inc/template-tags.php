<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package kilobyte
 */

if ( ! function_exists( 'kilobyte_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function kilobyte_posted_on() {
	?>
	<div class="row">
	<br>
		<div class="col-md-6">
			<div class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 80 );?></div>
		</div>
		<div class="col-md-6" style="padding-top: 25px;">
		<?php
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$posted_on = sprintf(
			esc_html_x( ' on %s', 'post date', 'kilobyte' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
		if( ! is_home() ) {
			global $post;
			$post_id = $post->post_author;
			$byline = sprintf(
				esc_html_x( 'Posted by %s', 'post author', 'kilobyte' ),
				'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( $post_id ) ) . '">' . esc_html( get_the_author_meta( 'display_name', $post_id ) ) . '</a></span>'
			);
		} else {
			$byline = sprintf(
				esc_html_x( 'Posted by %s', 'post author', 'kilobyte' ),
				'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
			);
		}
		if ( ! is_page() ) {
			echo $byline . $posted_on ; // WPCS: XSS OK.
		}
		?>
		</div>
	</div>
	<?php
}
endif;

if ( ! function_exists( 'kilobyte_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function kilobyte_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'kilobyte' ) );
		if ( $categories_list && kilobyte_categorized_blog() ) {
			/* translators: 1: list of categories. */
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'kilobyte' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'kilobyte' ) );
		if ( $tags_list ) {
			/* translators: 1: list of tags. */
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'kilobyte' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link(
			sprintf(
				wp_kses(
					/* translators: %s: post title */
					__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'kilobyte' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
		echo '</span>';
	}

	edit_post_link(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Edit <span class="screen-reader-text">%s</span>', 'kilobyte' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function kilobyte_categorized_blog() {
	$all_the_cool_cats = get_transient( 'kilobyte_categories' );
	if ( false === $all_the_cool_cats ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'kilobyte_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 || is_preview() ) {
		// This blog has more than 1 category so kilobyte_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so kilobyte_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in kilobyte_categorized_blog.
 */
function kilobyte_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'kilobyte_categories' );
}
add_action( 'edit_category', 'kilobyte_category_transient_flusher' );
add_action( 'save_post',     'kilobyte_category_transient_flusher' );
