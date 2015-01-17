$( document ).ready(function() {

	var time = 6000;

    function infinite () {

    	$("div.hero")
	    	.delay( time ).fadeOut(400)
	    	.queue( function(next){ 
	    		$(this).css("background-image","url(./img/hero-images/2.png)");
	    		$( "#hero-title-1" ).hide();
	    		$( "#hero-para-1" ).hide();
	    		$( "#hero-title-2" ).show();
	    		$( "#hero-para-2" ).show();
	    		$( "#hero-title-3" ).hide();
	    		$( "#hero-para-3" ).hide();
	    		$( "#hero-title-4" ).hide();
	    		$( "#hero-para-4" ).hide();
	    		next();
	    	}).fadeIn(400)
	    	.delay( time ).fadeOut(400)
	    	.queue( function(next){ 
	    		$(this).css("background-image","url(./img/hero-images/3.png)");
	    		$( "#hero-title-1" ).hide();
	    		$( "#hero-para-1" ).hide();
	    		$( "#hero-title-2" ).hide();
	    		$( "#hero-para-2" ).hide();
	    		$( "#hero-title-3" ).show();
	    		$( "#hero-para-3" ).show();
	    		$( "#hero-title-4" ).hide();
	    		$( "#hero-para-4" ).hide();
	    		next();
	    	}).fadeIn(400)
	    	.delay( time ).fadeOut(400)
	    	.queue( function(next){ 
	    		$(this).css("background-image","url(./img/hero-images/4.png)");
	    		$( "#hero-title-1" ).hide();
	    		$( "#hero-para-1" ).hide();
	    		$( "#hero-title-2" ).hide();
	    		$( "#hero-para-2" ).hide();
	    		$( "#hero-title-3" ).hide();
	    		$( "#hero-para-3" ).hide();
	    		$( "#hero-title-4" ).show();
	    		$( "#hero-para-4" ).show();
	    		next();
	    	}).fadeIn(400)
	    	.delay( time ).fadeOut(400)
	    	.queue( function(next){ 
	    		$(this).css("background-image","url(./img/hero-images/1.png)");
	    		$( "#hero-title-1" ).show();
	    		$( "#hero-para-1" ).show();
	    		$( "#hero-title-2" ).hide();
	    		$( "#hero-para-2" ).hide();
	    		$( "#hero-title-3" ).hide();
	    		$( "#hero-para-3" ).hide();
	    		$( "#hero-title-4" ).hide();
	    		$( "#hero-para-4" ).hide();
	    		next();
	    	}).fadeIn(400);

	    }

	    infinite();

	    setInterval(infinite,time*2);
    	


});

