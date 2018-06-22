$(document).ready(function(){

	$('.product-info__item-header, .product-info__desktop-nav-item').click(function() {
		
		var productInfoItem = $(this).attr('rel');
		var productInfoItemID = "#" + $(this).attr('rel');

		// check if clicked item is active
		if ( $(this).parent().hasClass('product-info__item--active')  ) {
			// if it is active then remove active class to hide it
			$(this).parent().removeClass('product-info__item--active')
		} 
		else {
				// hide all other items
				$('.product-info__item').removeClass('product-info__item--active');
				// make the clicked item active
				$(productInfoItemID).addClass('product-info__item--active');

				// Add active class to desktop prod desc menu items on click
			  $('.product-info__desktop-nav-item').removeClass('product-info__desktop-nav-item--active');
				$('.product-info__desktop-nav-item[rel="' + productInfoItem + '"]').addClass('product-info__desktop-nav-item--active');
				
				// if mobile scroll to active item
				if ( $(window).width() < 768 ) {
			    $('html, body').animate({
			        scrollTop: $(productInfoItemID).offset().top
			    }, 500);
			  }
			} // end else
			
		}); // end click function
		
	}); // end document ready

$(window).resize(function (){
	if ( $(window).width() > 767 ) {
			var productInfoItemDesktopNav = $('.product-info__desktop-nav-item--active').attr('rel');
			$('#' + productInfoItemDesktopNav).addClass('product-info__item--active');
		} 
});