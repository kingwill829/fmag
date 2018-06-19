$(document).ready(function(){

	$('.product-info__item-header, .product-info__desktop-nav-item').click(function() {
		var productInfoItem = "#" + $(this).attr('rel');

		var productInfoItemDetail = productInfoItem + " .product-info__item-detail";

		var productInfoItemIcon = productInfoItem + " .product-info__item-icon";

		if ( $(this).parent().hasClass('product-info__item--active')  ) {
			$(this).parent().removeClass('product-info__item--active')
		} 
			else {
					$('.product-info__item').removeClass('product-info__item--active');
					$(productInfoItem).addClass('product-info__item--active');

					// Add active class to desktop prod desc menu items on click
					if ($(this).hasClass('product-info__desktop-nav-item') ) {
						$('.product-info__desktop-nav-item').removeClass('product-info__desktop-nav-item--active');
						$(this).addClass('product-info__desktop-nav-item--active');			
						
					}
			};
		}); // end click function
		
	}); // end document ready

$(window).resize(function (){
	if ( $(window).width() > 767 ) {
		$('.product-info__item-detail').removeAttr('style');
		
		if (!$('.product-info__item').hasClass('product-info__item--active') ) {
			$('#product-description').addClass('product-info__item--active');		
				
		}

	} 

});
