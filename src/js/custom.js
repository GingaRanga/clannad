$(document).ready(function(){

	//MOBILE NAV COLLAPSE ON CLICK

	$('.navbar-nav>a').on('click', function(){

		$('.navbar-collapse').collapse('hide');

	});

	//SLICK CAROUSEL 1

	$('.service-slide').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		dots: true,
		arrows: false,
		responsive: [
	  	{
	    		breakpoint: 1024,
	    		settings: {
	      		slidesToShow: 3,
	      		slidesToScroll: 3,
	      		infinite: true,
	      		dots: true
	    		}
	  	},
	  	{
	    		breakpoint: 600,
	    		settings: {
	      		slidesToShow: 1,
	      		slidesToScroll: 1
	    		}
	  	},
	  	{
	    		breakpoint: 480,
	    		settings: {
	      		slidesToShow: 1,
	      		slidesToScroll: 1
	    		}
	  	}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});

});
