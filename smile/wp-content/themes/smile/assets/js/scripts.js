$(document).ready(function(){

//Activate mobile nav
$('.mobile-masthead__nav-icon').click(function() {
	$(this).toggleClass('mobile-masthead__nav-icon--active');

	$('.masthead__nav').slideToggle();
})



// Remove nav style attr on window resize
$(window).resize(function (){
	if($(window).width() > 991) {
	$('.masthead__nav').removeAttr('style');
	}
});

// iPhone V Samsung
$('.toggle-icon').click(function() {
	$(this).toggleClass('toggle-icon--active');
	$('body').toggleClass('body--fixed');
	$('.phones-navigation').toggleClass('phones-navigation--active');
})
$('nav ul li').click(function() {
	$('.toggle-icon').removeClass('toggle-icon--active');
	$('.phones-navigation').removeClass('phones-navigation--active');
	$('body').removeClass('body--fixed');
})


});


