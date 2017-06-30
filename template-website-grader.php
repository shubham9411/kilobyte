<?php
/*
Template Name: website grader
 */
get_header();
?>

<div class="container">
<div class="website-grader">
	<div class="wg" style="text-align: center;">
		<h1>TEST YOUR WEBSITE</h1>
		<div class="analyze">
			<?php echo do_shortcode('[contact-form-7 id="129" title="web grader"]' ); ?>
		</div>
	</div>
<hr>

<!-- results -->
<div class="results" style="display: none;">
	<h2 style="text-align: center;">SUMMARY:</h2>
	<div class="result2 row" >
		<div class="col-md-4 col-sm-4">
			<h3><div class="card2 score"><img src="<?php echo plugins_url();?>\contact-form-7\images\ajax-loader.gif"></div></h3>
		</div>
		<div class="col-md-4 col-sm-4">
			<h3><div class="preq card2"><img src="<?php echo plugins_url();?>\contact-form-7\images\ajax-loader.gif"></div></h3>
		</div>
	</div>

	<h2 style="text-align: center;">PERFORMANCE:</h2>
	<div class="Performance">
	<img src="<?php echo plugins_url();?>\contact-form-7\images\ajax-loader.gif">
	</div>
</div>
</div>
</div>

<script type="text/javascript">
jQuery('#contactform').css('display','none');
document.addEventListener( 'wpcf7mailsent', function( event ) {
    doThis();
}, false );

function doThis(){
  var webs = jQuery("#wname").val();
  var key = "AIzaSyDKAeC02KcdPOHWVEZqdR1t5wwgaFJJKiM";
  var api_url ="https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url="+webs+"&key="+key+"";
  jQuery.getJSON(api_url, function(data){
    var r=[];
    var score = data.ruleGroups.SPEED.score;
    var b=data.formattedResults.ruleResults;
    var ps= data.pageStats;
    var preq=ps.numberResources;
    r[0]=b.AvoidLandingPageRedirects;
    r[1]=b.EnableGzipCompression;
    r[2]=b.LeverageBrowserCaching;
    r[3]=b.MainResourceServerResponseTime;
    r[4]=b.MinifyCss;
    r[5]=b.MinifyHTML;
    r[6]=b.MinifyJavaScript;
    r[7]=b.MinimizeRenderBlockingResources;
    r[8]=b.OptimizeImages;
    r[9]=b.PrioritizeVisibleContent;

    var p="",q="",i=0,ri=[],ln=[];   
    for( i=0;i<10;i++){
      ln[i]=r[i].localizedRuleName;
      ri[i]=(r[i].ruleImpact).toFixed(3);
      if(ri[i]>0)
	      p =p+"<div class='yellow mybox'><h3>"+ln[i]+"</h3><div class='desc'> Impact on your score: "+ri[i]+"</div></div><br>";
  	  else
  	  	q =q+"<div class='green mybox'><h3>"+ln[i]+"</h3></div><br>";
  	} 
  	 jQuery(".score").html("SCORE <br>"+score);
  	 jQuery(".preq").html("REQUESTS <br>"+preq);
  	 jQuery(".Performance").html("<h2 style='text-decoration:underline';>Test passed: </h2>"+q);
  	 jQuery(".Performance").append("<h2 style='text-decoration:underline';>Needs Optimization: </h2>"+p);
  });
  jQuery(".results").css('display','block');
}

</script> 
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>

	<script type="text/javascript">
	        var pdf = new jsPDF();
	        pdf.text(30, 30, 'Hello world!');
	        pdf.save('hello_world.pdf');
	</script>
 -->
<?php
 get_footer();