<?php
/*
Template Name: single-team-page
*/

get_header();
?>
	<div class="single-team-page" id="single-team">
		<div class="member-cover">
			<div class="row">
				<div class="col-md-9">
					<h1>NAME OF MEMBER</h1>
					<h4>SHORT DISCRIPTION</h4>
				</div>
				<div class="col-md-3">
					<div ><img src="<?php echo get_stylesheet_directory_uri().'/img/male.jpg';?>" class="img-responsive img-circle member-image"></div>
				</div>
			</div>
		</div>
		<br>
		<div class="container">
		<div class="member-desc">
			<div class="row">
				<div class="col-md-7">
					<div class="member-detailed">
						<h2>DESCRIPTION</h2>
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
					</div>
				</div>
				<div class="col-md-5">
					<div class="member-blog">
						<h2>BLOGS</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
<?php
get_footer();
?>