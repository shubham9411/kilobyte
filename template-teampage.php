
<?php
/*
Template Name: Team page
 */
get_header();
?>
<div class="container">
	<div class="team">
		<h1 class="team-heading">MEET THE TEAM</h1>
		<div class="row">
			<div class="col-sm-4 col-md-3 col-xs-12 member">
				<!-- <div class="m-member-image">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/male.jpg';?>" class="img-responsive img-circle team-img">
				</div>
				<div class="m-description">
					<h2>NAME OF MEMBER</h2>
					<h4>Web Developer</h4>
					<a href="<?php echo get_page_link( get_page_by_title('single-team-page')->ID ); ?>"><button class="btn-sm m-explore-btn"><b>EXPLORE MORE</b></button></a>
				</div> -->
				<?php
				// Create the WP_User_Query object
				$wp_user_query = new WP_User_Query(array( 'role' => 'Administrator'));

				// Get the results
				$authors = $wp_user_query->get_results();

				// Check for results
				if (!empty($authors)) {
				    // loop through each author
				    foreach ($authors as $author)
				    {
				        // get all the user's data
				        $author_info = get_userdata($author->ID);
				        echo get_avatar($author->ID, 80 );
				        echo "<br>";
				        echo $author_info->first_name . ' ' . $author_info->last_name;
				        echo get_the_author_meta('description');
				    }
				    echo '</ul>';
				} else {
				    echo 'No authors found';
				}
				?>
			</div>
			<div class="col-sm-4 col-md-3 col-xs-12 member">
				<div class="m-member-image">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/male.jpg';?>" class="img-responsive img-circle team-img">
				</div>
				<div class="m-description">
					<h2>NAME OF MEMBER</h2>
					<h4>Web Developer</h4>
					<a href=""><button class="btn-sm m-explore-btn"><b>EXPLORE MORE</b></button></a>
				</div>
			</div>
			<div class="col-sm-4 col-md-3 col-xs-12 member">
				<div class="m-member-image">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/male.jpg';?>" class="img-responsive img-circle team-img">
				</div>
				<div class="m-description">
					<h2>NAME OF MEMBER</h2>
					<h4>Web Developer</h4>
					<a href=""><button class="btn-sm m-explore-btn"><b>EXPLORE MORE</b></button></a>
				</div>
			</div>
			<div class="col-sm-4 col-md-3 col-xs-12 member">
				<div class="m-member-image">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/male.jpg';?>" class="img-responsive img-circle team-img">
				</div>
				<div class="m-description">
					<h2>NAME OF MEMBER</h2>
					<h4>Web Developer</h4>
					<a href=""><button class="btn-sm m-explore-btn"><b>EXPLORE MORE</b></button></a>
				</div>
			</div>
		</div>
		<br>
		</br>
		<div class="row">
			<div class="col-sm-4 col-md-3 col-xs-12 member">
				<div class="m-member-image">
					<img src="<?php echo get_stylesheet_directory_uri().'/img/male.jpg';?>" class="img-responsive img-circle team-img" align="middle">
				</div>
				<div class="m-description">
					<h2>NAME OF MEMBER</h2>
					<h4>Web Developer</h4>
					<a href=""><button class="btn-sm m-explore-btn"><b>EXPLORE MORE</b></button></a>
				</div>
			</div>
		</div>
	</div>	
</div>
<?php 
get_footer();