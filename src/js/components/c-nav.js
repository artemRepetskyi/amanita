


$(window).on('scroll', function (e) {
	$('.c-nav').toggleClass('active', $(this).scrollTop() >= 1);
})