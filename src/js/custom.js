$(document).ready(function(){
	'use strict'

	// Script for off canvas toggler
	$('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })

	//SLICK CAROUSEL 1

	// $('.service-slide').slick({
	// 	infinite: true,
	// 	slidesToShow: 4,
	// 	slidesToScroll: 1,
	// 	autoplay: true,
	// 	autoplaySpeed: 2000,
	// 	dots: true,
	// 	arrows: false,
	// 	responsive: [
	//   	{
	//     		breakpoint: 1024,
	//     		settings: {
	//       		slidesToShow: 3,
	//       		slidesToScroll: 3,
	//       		infinite: true,
	//       		dots: true
	//     		}
	//   	},
	//   	{
	//     		breakpoint: 600,
	//     		settings: {
	//       		slidesToShow: 1,
	//       		slidesToScroll: 1
	//     		}
	//   	},
	//   	{
	//     		breakpoint: 480,
	//     		settings: {
	//       		slidesToShow: 1,
	//       		slidesToScroll: 1
	//     		}
	//   	}
	// 		// You can unslick at a given breakpoint now by adding:
	// 		// settings: "unslick"
	// 		// instead of a settings object
	// 	]
	// });

	// ScrollMagic

	// Init ScrollMagic
	var controller = new ScrollMagic.Controller(); // tells browser to use scroll bar and trigger animation

	// Build scene for animation
	var ourScene = new ScrollMagic.Scene({
		// Define options for the scene here
		triggerElement: '.nav-scroller', // this is the element where the scene is triggered
		// duration: 300 // ending after 300px from starting indicator
		// duration: '55%', // responsive duration
		triggerHook: 0, // puts the trigger at the top of the page. 1 is bottom of page
		reverse: false // animation happens once and not triggered in reverse scroll
	})
	.setClassToggle('#main-logo', 'fade-in') // this allows us to change a class in 'classtochange', 'classtochangeto'
	.addIndicators({
		name: 'fade scene',
		colorTrigger: 'yellow',
		// indent: 200,
		colorStart: 'pink',
		colorEnd: 'red'
	}) // requires addindicators plugin. inside curly braces are indicator options
	.addTo(controller); // adds scene to controller

	// Build scene2 for animation
	var ourScene2 = new ScrollMagic.Scene({
		// Define options for the scene here
		triggerElement: '#quicklook', // this is the element where the scene is triggered
		// duration: 300 // ending after 300px from starting indicator
		// duration: '55%', // responsive duration
		triggerHook: 0.9, // puts the trigger at the top of the page. 1 is bottom of page
		// reverse: false // animation happens once and not triggered in reverse scroll
	})
	.setClassToggle('.card', 'fade-in') // this allows us to change a class in 'classtochange', 'classtochangeto'
	.addIndicators({
		name: 'fade scene 2',
		colorTrigger: 'yellow',
		// indent: 200,
		colorStart: 'pink',
		colorEnd: 'red'
	}) // requires addindicators plugin. inside curly braces are indicator options
	.addTo(controller); // adds scene to controller

	// Build scene3 for animation
	var ourScene3 = new ScrollMagic.Scene({
		// Define options for the scene here
		triggerElement: '.mission-trigger', // this is the element where the scene is triggered
		// duration: 300 // ending after 300px from starting indicator
		// duration: '55%', // responsive duration
		triggerHook: 0.9, // puts the trigger at the top of the page. 1 is bottom of page
		// reverse: false // animation happens once and not triggered in reverse scroll
	})
	.setClassToggle('.mission', 'fade-in') // this allows us to change a class in 'classtochange', 'classtochangeto'
	.addIndicators({
		name: 'fade scene 3',
		colorTrigger: 'yellow',
		// indent: 200,
		colorStart: 'pink',
		colorEnd: 'red'
	}) // requires addindicators plugin. inside curly braces are indicator options
	.addTo(controller); // adds scene to controller

});
