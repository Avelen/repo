(function ($) {
$('.slider-single-item').slick({
	 slidesToShow: 1,
	 slidesToScroll: 1,
	 arrows: true,
	 dots: true,
	 infinite: true
});

$('.header__top-panel__fast-panel__burger-menu').on('click', function(){
	$(this).toggleClass('active');
	$('.modal-menu').slideToggle();
})

	$('.callback.order-call').attr('href','#callback-form');
	$('.callback.order-call').addClass('fancybox-inline');

})(jQuery);