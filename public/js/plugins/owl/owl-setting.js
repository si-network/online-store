$(document).ready(function() {

	$('#sales__carousel').owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplaySpeed: 500,
		autoplayHoverPause: false,
		slideTransition: 'ease-out',
		nav: false,
		dots: false,
		responsive: {
			0: {
				items: 2
			},
			270: {
		      	items: 3
			},
		    400: {
		      	items: 4
			},
		 	740: {
		 		items: 5
		 	},
		 	1050: {
		 		items: 7
		 	}
		}
	});

	$('.banner-block').owlCarousel({
		autoplayHoverPause:false,
		loop:true,
		margin:0,
		nav:false,
		dots: false,
		animateOut: 'fadeOut',
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:false,
		responsive: {
	    	1: {
	    		items:1
	    	}
		}
	});
});