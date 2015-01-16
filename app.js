jQuery(document).ready(function($){




	$(".ham").click(function(){
		$(".nav-ele").slideToggle();
		$(this).toggleClass("ham-press");
		
	});

	$(window).resize(function(){
		if(window.innerWidth > 760) {
			$(".ham").hide();
			$(".nav-ele").hide();
			$(".ham-press").toggleClass(".ham");
		}else{
			$(".ham").show();
			
		}
	});

	$(".search-button-icon").click(function(){
		$(".search-drop-menu").slideToggle();
		$(this).toggleClass("active");
		});

	$(window).resize(function(){
		if(window.innerWidth > 590) {
			$(".search-drop-menu").hide();
			
			
		}
	});

	
});