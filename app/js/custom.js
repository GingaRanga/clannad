$(document).ready(function(){
	
	$('.hero').slick({
		dots: true,
		slidesToShow: 1,
		adaptiveHeight: true,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		infinite: true,
		fade: true,
		cssEase: 'linear'
  	});
	
	//GSAP
	var topNav 	= $('.header-top');
	
	// you can also use pure JavaScript instead of jQuery such as
	// or var applyBar = document.getElementById('.apply');
	
	// you can use fromto method as long as you set a starting and ending value or set method to just set a CSS property
	// set does not require a duration
	
	TweenLite.to('.header-top', 3, {autoAlpha: 0, y:-46, ease:Power3.easeIn}); // in order. element in quotes, duration, and values in curly braces
	// autoAlpha starts at 0 opacity and visibility of none
	// power is the strength of the ease and can be between 1 and 4
	// power1 easein starts slow and finishes fast and vise versa for easeout
	
});