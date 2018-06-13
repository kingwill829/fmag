$(document).ready(function(){

	$('.product-info__item-header, .product-info__desktop-nav-item').click(function() {
		var productInfoItem = "#" + $(this).attr('rel');

		var productInfoItemDetail = productInfoItem + " .product-info__item-detail";

		var productInfoItemIcon = productInfoItem + " .product-info__item-header span";


		if ($(window).width() < 768) {
			$(productInfoItemDetail).slideToggle();

			if ($(productInfoItemIcon).hasClass("fa-plus") ) {
				$(productInfoItemIcon).removeClass("fa-plus");
				$(productInfoItemIcon).addClass("fa-minus");
			} else {
				$(productInfoItemIcon).removeClass("fa-minus");
				$(productInfoItemIcon).addClass("fa-plus");			
			}
		}

		$('.product-info__item').removeClass('product-info__item--active');
		$(productInfoItem).addClass('product-info__item--active');

		





	})


});



$(window).resize(function (){
	if ( $(window).width() > 767 ) {
		$('.product-info__item-detail').removeAttr('style');
	}
});