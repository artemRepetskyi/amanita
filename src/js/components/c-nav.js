import Fancybox from '../utilities/Fancybox';





$(window).on('scroll load', function (e) {
	$('.c-nav').toggleClass('active', $(this).scrollTop() >= 1);
})

$('body').on('click', '.js-contacts', function(event) {
	event.preventDefault();
	new Fancybox().openModal('#contacts', 'awd');
});

$('a[href^="#"]').on('click',function (e) {
    e.preventDefault();
    let target = this.hash;
    let $target = $(target);
    $('html, body').stop().animate({
        'scrollTop':  $target.offset().top - $('.c-nav').height() - 30 //no need of parseInt here
    }, 900, 'swing', function () {
        // window.location.hash = target;
    });
});