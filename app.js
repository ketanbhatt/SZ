jQuery(document).ready(function($){
	$(".ham").click(function(){
		$(".nav-ele").slideToggle();
		$(this).toggleClass("active");
	});

});