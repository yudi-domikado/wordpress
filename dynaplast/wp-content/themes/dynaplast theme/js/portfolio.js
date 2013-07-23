$(document).ready(function(){
  $('.slider-portfolio1, .slider-portfolio2').flexslider({
    animation: "slide",
    slideshow: false,
    animationLoop: true,
  	itemWidth: 1024,
  	itemMargin: 0
	});

  $('.sliderimg-portfolio1-1').sexyCycle({
		next: '.next1',
		prev: '.prev1',
		cycle: true
	});

  $('.sliderimg-portfolio1-2').sexyCycle({
		next: '.next1',
		prev: '.prev1',
		cycle: true
	});

  $('.sliderimg-portfolio1-3').sexyCycle({
		next: '.next1',
		prev: '.prev1',
		cycle: true
	});

  $('.sliderimg-portfolio1-4').sexyCycle({
		next: '.next1',
		prev: '.prev1',
		cycle: true
	});
});