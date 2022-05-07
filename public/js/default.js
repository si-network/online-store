$(document).ready(function() {


	// Mobile navigation settings

	$('body').css('visibility', 'visible');
	$('.navbar ul').clone().appendTo($('.navbar-nav'));
	$('.navbar-nav a').css('color','#fff').hover(function(a) {
			$(this).css('color',a.type === "mouseenter" ? "#D6569B" : "#FFF");
	});

	$('.navbar-nav').hide();
	$('.bar').click(function() {
			$('.navbar-nav').toggle();
	});


	// Scroll settings for header

	$(function() {
		$(window).scroll(function() {
   			if($(this).scrollTop() > 1) {
    			$('header').addClass('header_fixed');
    			$('.navbar-nav').addClass('navbar-nav_fixed');
    			$('.content_wrapper').css('margin-top', '60px');
   			} else {
    			$('header').removeClass('header_fixed');
    			$('.navbar-nav').removeClass('navbar-nav_fixed');
    			$('.content_wrapper').css('margin-top', '0');
   			}
 		});
	});


	// AJAX get products

	$('.show_more').click(function() {
		var from = Number($('.show_more').attr('count-products'));
		$.ajax({
 			method: "GET",
 			url: "/d/showProducts=" + (from+1)
		})
  		.done(function(e) {    
  			$(e).appendTo('.showcase-grid');
  			if (e != '') {
  				$('.show_more').attr('count-products', from + 10);
  			}
  		});
	});
});