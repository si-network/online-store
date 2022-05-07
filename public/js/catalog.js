$(document).ready(function() {

	let categories = $('.category_wrapper_link');

	categories.each(function() {
		if ($(this).attr('parent_id')) {
			let pid = $(this).attr('parent_id');
			$(this).appendTo($('.childs[id="'+ pid +'"]'));
		}
	});


	$(".category_wrapper_link").hover(function() {
		if ( $(window).width() > 450 ) {
			$('.childs[id="'+ $(this).attr('id') +'"]').css({'display':'flex'});
			$('.child_category[parent_id="'+ $(this).attr('id') +'"]').css('display','block');
		}
	}, function(){ 

	    let id = $(this).attr('id');
	    $('.child_category[parent_id="'+ id +'"]').css('display','none');
	    $('.childs[id="'+ id +'"]').css({'display':'none'});
	});




	// product categories swapper

	$('.categories_swapper').click(function() {
		$('.cc').css({'display':$('.cc').css('display') == 'none' ? 'flex' : 'none'});
	});



	// product category filters and products

	let filterKeys = new Map();

	let url = decodeURIComponent(window.location.toString());
	if (url.slice(-1) == '/') {
		url = url.substring(0, url.length - 1);
	}
	let filters;
	let filtersString = url.split('/f/')[1];
	if (filtersString) {
		filters = filtersString.split('/');
	}

	$.each(filters,function(index,value) {
		let fil = value.split('=');
		filterKeys.set(fil[0], fil[1]);
	});

	for (key of filterKeys) {
	  $('.filter_checkbox[name="'+key[0]+'"][value="'+key[1]+'"]').prop('checked', true);
	}

	$('.filter_checkbox').click(function() {
		
		if ($(this).is(':checked')) {
			if (filterKeys.size == 0) {
				url = url+'/f/'+$(this).attr('name')+'='+$(this).attr('value');
			} else {
				url = url+'/'+$(this).attr('name')+'='+$(this).attr('value');
			}
			window.history.pushState({path:url},'',url);
			filterKeys.set($(this).attr('name'), $(this).attr('value'));
			$(this).prop('checked', true);
		} else {
			$(this).prop('checked', false);
			filterKeys.delete($(this).attr('name'));
			url = url.replace('/'+$(this).attr('name')+'='+$(this).attr('value'),'');
			if (filterKeys.size == 0) {
				url = url.replace('/f','');
			}
			window.history.pushState({path:url},'',url);
		}


	$.ajax({
		method: "GET",
		url: url
	})
	.done(function(e) {    
	 	$('body').html(e);
	});

	});
});