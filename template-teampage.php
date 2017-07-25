<?php
/*
Template Name: Team page
 */
get_header();
?>
<div class="container upper-z">
	<div class="team">
		<h1 class="team-heading">MEET THE TEAM</h1>
		<div class="row">
				<?php
				// Create the WP_User_Query object
				$roles = array('Administrator', 'Contributor','Editor','Subscriber','Author');
				foreach ($roles as $role)
				{
				$wp_user_query = new WP_User_Query(array( 'role' => $role,'fields' => 'all_with_meta'));

				// Get the results
				$authors = $wp_user_query->get_results();
				// Check for results
				if (!empty($authors)) {
				    // loop through each author
				    foreach ($authors as $author)
				    {
				    	?>
				    	<div class="col-md-3 col-sm-4 m-member-data">
				    	<?php
				        // get all the user's date_add()
				        $author_info = get_userdata($author->ID);
				        ?>
				        <div><?php echo get_avatar($author->ID, 220 );?></div>
				        <?php
				        echo '<h2>'.$author_info->first_name . ' ' . $author_info->last_name.'</h2>';
				        echo '<h4>'.$author_info->urole.'</h4>';
						?>
						<a href="<?php echo get_page_link(1987);
						echo "?uid=".$author->ID ;?>">
						<button class="m-explore-btn btn-sm">KNOW MORE</button></a>
						</div>
					<?php
				    }
				}
			}
				?>
			</div>
		</div>
	</div>	
</div>
<?php 
get_footer();