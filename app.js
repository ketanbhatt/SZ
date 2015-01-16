jQuery(document).ready(function($){
	$(".ham").click(function(){
		$(".nav-ele").slideToggle();
		$(this).toggleClass("active");
		$(".ham").hide();
		$(".ham-press").show();
	});

	$(".ham-press").click(function(){
		$(".nav-ele").slideToggle();
		$(this).toggleClass("active");
		$(".ham").show();
		$(".ham-press").hide();
	});

	$(window).resize(function(){
		if(window.innerWidth > 760) {
			$(".ham").hide();
		}else{
			$(".ham").show();
		}
	});

	$(".search-button-icon").click(function(){
		$(".search-drop-menu").slideToggle();
		$(this).toggleClass("active");
		});
});