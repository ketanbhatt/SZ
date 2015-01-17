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

		




	//--------------------------Jquery code for clientele slider begins

	/*var currentIndex = 0,
  items = $('.client-images div'),
  itemAmt = items.length;

function cycleItems() {
  var item = $('.client-images div').eq(currentIndex);
  items.hide();
  item.css('display','inline-block');
}

var autoSlide = setInterval(function() {
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
}, 3000);

$('.left').click(function() {
  clearInterval(autoSlide);
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
});

$('.right').click(function() {
  clearInterval(autoSlide);
  currentIndex -= 1;
  if (currentIndex < 0) {
    currentIndex = itemAmt - 1;
  }
  cycleItems();
});*/



	
});