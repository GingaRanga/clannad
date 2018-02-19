$(document).ready(function(){
	'use strict'

	// Script for off canvas toggler
	$('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  }) // Off Canvas Toggler

	// Init ScrollMagic
	var controller = new ScrollMagic.Controller(); // tells browser to use scroll bar and trigger animation

	var parallaxTl = new TimelineMax();
	parallaxTl
		.from('.content-wrapper', 0.3, {autoAlpha: 0, ease:Power0.easeNone}, 0) // autoalpha fades in
		.from('.hero', 1, {y: '-20%', ease:Power0.easeNone}, 0); // if hero set to height 150% then y-offset max is 50%. the last zero starts it first in the timeline at absolute postion 0

	var slideParallaxScene = new ScrollMagic.Scene({
		triggerElement: '.hero-parallax',
		triggerHook: 0.1,
		duration: '60%'
	})
	.setTween(parallaxTl)
	// .addIndicators({
	// 	name: 'hero parallax scene',
	// 	colorTrigger: 'red',
	// 	// indent: 200,
	// 	colorStart: 'green',
	// 	colorEnd: 'purple'
	// })
	.addTo(controller);

	// Loop through each scene with the main class .fade
	$('.fade').each(function(){
		// Build scene2 for animation
		var ourScene = new ScrollMagic.Scene({
			// Define options for the scene here
			triggerElement: this.children[0], // this is the element where the scene is triggered
			// this targets the element we are on which is .fade and this.children[0] targets the first child of the element
			// duration: 300 // ending after 300px from starting indicator
			// duration: '55%', // responsive duration
			triggerHook: 0.5, // puts the trigger at the top of the page. 1 is bottom of page
			// reverse: false // animation happens once and not triggered in reverse scroll
		})
		.setClassToggle(this, 'fade-in') // this allows us to change a class in 'classtochange', 'classtochangeto'
		// .addIndicators({
		// 	name: 'looped fade scenes',
		// 	colorTrigger: 'blue',
		// 	// indent: 200,
		// 	colorStart: 'black',
		// 	colorEnd: 'red'
		// }) // requires addindicators plugin. inside curly braces are indicator options
		.addTo(controller); // adds scene to controller
	}); // target each element with the class fade using each loop

}); // Document Ready Function
