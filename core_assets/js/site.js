$(document).ready(function()
{
	
  $('.slider').slick({
	  infinite: 			false,
	  slidesToShow: 	2.5,
	  prevArrow:			'<div class="slick-arrow--prev"><span class="fa fa-chevron-left"></span></div>',
	  nextArrow:			'<div class="slick-arrow--next"><span class="fa fa-chevron-right"></span></div>',
	  mobileFirst:		true,
	  responsive: [
	  {
	  	breakpoint: 	768,
	  	settings:  {
	  		slidesToShow: 4.5
	  	}
	  }
	  ]
  });	
	



	
// New Nav Code
	if($(".primary-nav").length>0){



	
		// Open mobile menu
		$('#mobileMenuIcon').click(function() {
			// Show background 
			showOverlay();
			// pull in mobile nav
			$('.primary-nav').css({"transform":"translateX(0px)"});
			$('.primary-nav__close').css({"transform":"translateX(250px)"});
			
			// Prevents the rest of the page scrolling when browsing the nav 
			$('body').css({"overflow":"hidden","position":"fixed","width":"100%"});
		});
	
		// Close mobile nav
		$('#mobileMenuIconClose').click(function() {
			closePrimaryNav();
		});	

		
		// The following controls the opening of nav drop-downs / sub-menus depending on whether the user clicks, touches, hovers etc
		$('.primary-nav__item').on({
			click: function(event) {
				
				if (getScreenScale() < 2) {
					
					event.preventDefault();
					
					var subMenuID = "#" + $(this).attr('data-sub-menu');
					
					// pulls in the sub menu
					$(subMenuID).css({"transform":"translateX(0px)"});
					$('.primary-nav__sub').css({"transform":"translateX(0px)"});
					
					// hides primary nav
					$('.primary-nav-wrap').css({"visibility":"hidden","opacity":"0"});
					$(subMenuID).css({"display":"block"});			
			
					// scrolls user to the top so that they can see the whole sub menu
					$('.primary-nav').animate({ scrollTop: 0 });		
				} else if (getScreenScale() > 2) {
				
					showOverlay();
					$('.primary-nav__item').removeClass("primary-nav__item--active");
					$('.primary-nav__sub-item').removeClass('primary-nav__sub--active');	
												
					activeMenu = '#' + $(this).attr('data-sub-menu');
					$(activeMenu).addClass("primary-nav__sub--active");	
					$(this).addClass("primary-nav__item--active");			
				}
			},
			touchstart: function(event) {
				if (getScreenScale() > 1) {
					if (!$(this).hasClass('primary-nav__item--home')) {
						event.preventDefault();
					}	
					
					showOverlay();
					$('.primary-nav__item').removeClass("primary-nav__item--active");
					$('.primary-nav__sub-item').removeClass('primary-nav__sub--active');	
												
					activeMenu = '#' + $(this).attr('data-sub-menu');
					$(activeMenu).addClass("primary-nav__sub--active");	
					$(this).addClass("primary-nav__item--active");
				}		
			},
			mouseenter: function(event) {
				if (getScreenScale() > 1) {
					showOverlay();
				
					activeMenu = '#' + $(this).attr('data-sub-menu');
					$(activeMenu).addClass("primary-nav__sub--active");	
					$(this).addClass("primary-nav__item--active");
					
					
				}
			},
			mouseleave: function(event) {
				if (getScreenScale() > 1) {
					
					$(activeMenu).removeClass("primary-nav__sub--active");
					$(this).removeClass("primary-nav__item--active");
				}		
			}	
		});	

		// highlight active nav tab on desktop hover
		$('.primary-nav__sub-item').hover(function() {
			var menuHoverID = "." + $(this).attr('id');
			$(menuHoverID).toggleClass("primary-nav__item--active");	
		});	

		//Close mobile sub-menu
		$('.primary-nav__sub-close').click(function() {
			// pushes the sub menu out of view
			$(this).closest('.primary-nav__sub').css({"transform":"translateX(250px)"});
			$(this).closest('.primary-nav__sub-item').css({"transform":"translateX(250px)"});
			// the time delay below makes the user see the slide out, but then sets the sub menu to display none. This is because if it's display: block then the height affects the primary nav
			setTimeout(
				function() {
					$('.primary-nav__sub-item').css({"display":"none"});
				},100);
			
			// Makes primary nav display again
			$('.primary-nav-wrap').css({"visibility":"visible","opacity":"1"});
		});	
		
		// Click on overlay to close nav
		$(document).on("touchend click", "#overlay", function(event) {
				event.preventDefault();
		    closePrimaryNav();
		});

		// creates the overlay effect when users hover on the nav on desktop
			$('nav').hover(function(){
				if (getScreenScale() > 1) {
					showOverlayDelay();
				}
			},function(){
				if (getScreenScale() > 1) {
					delay(function(){hideOverlay();},10);		/* Delay function used to fix issue with menu closing in Edge */
				}
			});

		
	}

	function closePrimaryNav() {
		
		$('.primary-nav').css({"transform":"translateX(-250px)"});
		$('.primary-nav__close').css({"transform":"translateX(-50px)"});
		
		$('.primary-nav__item').removeClass("primary-nav__item--active");
		$('.primary-nav__sub-item').removeClass('primary-nav__sub--active');
		
    $('body, .primary-nav__sub, .primary-nav__mobile-background, .primary-nav__sub-item, .primary-nav, .primary-nav-wrap, .primary-nav__close').removeAttr("style");
    
		hideOverlay();
	}
	
	// removes mobile / desktop inline styles when viewport width changes
	$(window).resize(function() {
	  if ($(window).width() > 991) {
	     $('body, .primary-nav__sub, .primary-nav__mobile-background, .primary-nav__sub-item, .primary-nav, .primary-nav-wrap, .primary-nav__close').removeAttr("style");
	  }	
	});	

	/////// End Navigation		
	
	
$('#revealPayment').click(function() {
	$('.credit-card--hidden').slideToggle();
});



// Order Cancellation

	$('.order-history__order-show').click(function() {
		$(this).siblings('.order-history__order-details').slideToggle();
		$(this).children('.order-history__order-show-icon').toggleClass('order-history__order-show-icon--active');
	});	
	
	$(document).on("click", ".lightbox-button", function() {
		var lightboxOption = "#" + $(this).attr('data-lightbox-option');
		
		$('.orders-lightbox__option--active').removeClass('orders-lightbox__option--active');		
		$(lightboxOption).addClass('orders-lightbox__option--active');
	});
	
	$(document).on("click", ".order-lightbox__back", function() {
		$('.orders-lightbox__option--active').removeClass('orders-lightbox__option--active');		
		$('#orders-lightbox-default').addClass('orders-lightbox__option--active');
	});
	
});







// stuff from main site
var delay = (function(){
//Allows a $j command to be run after a set period of time eg. $j(window).resize(function() {delay(function(){alert(1);});
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();

function getScreenScale() {
	/*
	Returns the number of px right padding on the @ symbol at the bottom of the screen
	This gives us a marker as to what size (width) screen the user currently has and which rule in the style sheet are being applied
	Written By: RG 15/04/2014
		Note: Fix to a bug when the padding becomes a decimal (eg. 2.9323564654556px)

	Returns (integer):
		0/1/2/3			- 0 < 480px, 1 < 767px, 2 < 960px, 3 >= 960px
	*/
	try{
		if($(".svr").length>0){
			return Math.round($(".svr").css('padding-right').replace(/[^\d.-]/g,""));
		}else{
			return 3;
		}
	}catch(e){
		return 3;
	}
}

var overlayTimer				= 0;
function showOverlay() {
	if ($('#overlay').length <= 0) {
		$('<div id="overlay"> </div>').appendTo(document.body);
	}
}

function showOverlayDelay() {
		overlayTimer			= setTimeout(showOverlay, 120);
}

function hideOverlay(objOptions) {
	clearTimeout(overlayTimer);
	$("#overlay").remove();
}

