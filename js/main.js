// jQuery('.grid').masonry({
// 	itemSelector: '.blogc',
// 	horizontalOrder: true,
// });


// portfolio
	// var modal;
	// var i=0;
	// function moda(d){
	// 	i=d;
	// 	modal = document.getElementById('myModal'+i);
	// 	 modal.style.display = "block";
	// 	 jQuery('.upper-z').css('z-index','4');
	// 	 var a = jQuery('.img-a').html();

	//   jQuery('#close'+i).on('click',function(){ 
	//   	  jQuery('.upper-z').css('z-index','3');
	//   	  modal.style.display = "none";
	//   	})
	// }


	var flag = 1;
	jQuery('.designs').hide();
	jQuery('#changeIt').on('click',function(){
		if(flag===1){
			jQuery('.portfolio').hide();
			jQuery('.designs').show();
			jQuery('#changeIt').html("Check out our cool digital products!")
			flag = 0;
		}
		else{
			jQuery('.portfolio').show();
			jQuery('.designs').hide();
			jQuery('#changeIt').html("Check out our awesome designs!")
			flag = 1;
		}
	});

// portfolio end

// google-analytics

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101475667-1', 'auto');
  ga('send', 'pageview');

// end google-analytics
