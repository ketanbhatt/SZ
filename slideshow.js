$( document ).ready(function() {

	console.log("hahshas");
	var time = 2000;

    function infinite () {

	    $("div.hero")
	    	.delay( time ).fadeOut(400)
	    	.queue( function(next){ 
	    		$(this).css("background-image","url(./img/hero-images/2.jpg)");
	    		$( "#hero-title" ).html( "Main Title 2" );
	    		$( "#hero-para" ).html( "text <br><br> 2" );
	    		next();
	    	}).fadeIn(400)
	    	.delay( time ).fadeOut(400)
	    	.queue( function(next){ 
	    		$(this).css("background-image","url(./img/hero-images/3.jpg)");
	    		$( "#hero-title" ).html( "Main Title 3" );
	    		$( "#hero-para" ).html( "text <br><br> 3" );
	    		next();
	    	}).fadeIn(400)
	    	.delay( time ).fadeOut(400)
	    	.queue( function(next){ 
	    		$(this).css("background-image","url(./img/hero-images/4.jpg)");
	    		$( "#hero-title" ).html( "Main Title 4" );
	    		$( "#hero-para" ).html( "text <br><br> 4" );
	    		next();
	    	}).fadeIn(400)
	    	.delay( time ).fadeOut(400)
	    	.queue( function(next){ 
	    		$(this).css("background-image","url(./img/hero-images/5.jpg)");
	    		$( "#hero-title" ).html( "Main Title 5" );
	    		$( "#hero-para" ).html( "text <br><br> 5" );
	    		next();
	    	}).fadeIn(400)
	    	.delay( time ).fadeOut(400)
	    	.queue( function(next){ 
	    		$(this).css("background-image","url(./img/hero-images/1.jpg)");
	    		$( "#hero-title" ).html( "Main Title 1" );
	    		$( "#hero-para" ).html( "text <br><br> 1" );
	    		next();
	    	}).fadeIn(400);

	    }

	    infinite();

	    setInterval(infinite,time*5);
    	


});