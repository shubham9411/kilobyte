<?php
/*
Template Name: contactPage
*/
get_header();
?>
<script type="text/javascript">
	function map(){
		jQuery("iframe").addClass("clicked");
	}
	function pointerRemove(){
		jQuery("iframe").removeClass("clicked");	
	}
</script>
<div class="container">
	<div class="map" onclick="map()" onmouseleave="pointerRemove()">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.6480567246886!2d77.3382219147242!3d28.640308382414727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfad3d093eddf%3A0xdd7e519ea30a44ae!2sKilobyte+Technologies!5e0!3m2!1sen!2sin!4v1498126995542" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
	<div class="contact-details">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<form>
					<div style="text-align:center">
					<input type="text" placeholder="NAME" name=""><br>
					<input type="text" placeholder="E-MAIL" name=""><br>
					<input type="text" placeholder="SUBJECT" name=""><br>
					<textarea  id="comment" placeholder="MESSAGE"></textarea><br>
					<input type="submit" value="SEND" class="btn btn-danger">
					</div>
				</form>
			</div>
			<div class="col-md-6 col-sm-6 get-intouch">
				<h2>GET IN TOUCH</h2>
				<p>13,PNB Road Sector 2A, Vaishali</p>
				<p>Ghaziabad</p>
				<h4>E-MAIL</h4>
				<p>contact@kilobytetech.com</p>
				<h4>PHONE NO.</h4>
				<p>7895210001</p>
			</div>
		</div>
	</div>
</div>
<br>
</br>
<?php
get_footer();
?>