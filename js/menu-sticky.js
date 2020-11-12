$(document).ready(function(){
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0) {
			$('header').addClass('header-fixed');
		} else {
			$('header').removeClass('header-fixed');
		}
	});
});