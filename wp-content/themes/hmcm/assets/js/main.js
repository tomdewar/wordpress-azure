'use strict'; // SVG
svg4everybody();

/**
                  * STICKY HEADER
                  */
$('.nav-container').sticky({
	topSpacing: 0,
	className: 'nav-sticky' });


/**
                              * RWD NAVIGATION
                              */
$(".navigation__header-responsive-collapse").on("show.bs.collapse", function () {
	$("body").on('click', function () {
		$(".navigation__header-responsive-collapse").collapse("hide");
	});
});

/**
     * RWD NAVIGATION COLLAPSE
     */
// $('.navigation__header-responsive-collapse .menu-item-has-children > a').addClass('submenu-toggle');
// $('.navigation__header-responsive-collapse .sub-menu').addClass('hidden');
// $('.submenu-toggle').on( 'click touchend', function(e) {
// 	e.preventDefault();
// 	var $submenu = $(this).next('.sub-menu');

// 	if ( $submenu.hasClass('hidden') ) {
// 		$submenu.hide().removeClass('hidden').slideDown(350);
// 	} else {
// 		$submenu.stop().slideUp(350, function() {
// 			$(this).addClass('hidden');
// 		});
// 	}
// });

/**
 * COLLAPSE SIDEBAR
 */
if ($(window).width() < 768) {
	$('.sidebar-widget--title-collapse').on('click', function () {
		var id_collapse = $(this).data('sidebar--collapse');

		$(this).toggleClass('active');
		$('#' + id_collapse).slideToggle();
	});
}

/**
   * SLIDER
   */
// BRAND SLIDER
var brandSlider = $('.brand-slider__wrapper .brand-sliders');
var brandSliderPrev = $('.brand-slider__wrapper .custom-nav .custom-nav__prev');
var brandSliderNext = $('.brand-slider__wrapper .custom-nav .custom-nav__next');
brandSlider.slick({
	dots: false,
	cssEase: 'linear',
	infinite: true,
	speed: 500,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
	{
		breakpoint: 995,
		settings: {
			slidesToShow: 3 } },


	{
		breakpoint: 768,
		settings: {
			slidesToShow: 2 } },


	{
		breakpoint: 520,
		settings: {
			slidesToShow: 1,
			fade: true } }] });





brandSliderPrev.on('click', function () {
	brandSlider.slick('slickPrev');
});

brandSliderNext.on('click', function () {
	brandSlider.slick('slickNext');
});

// TESTIMONIAL SLIDER
var testimonialSlider = $('.testimonial-slider__wrapper .testimonial-slider');
var testimonialSliderPrev = $('.testimonial-slider__wrapper .custom-nav .custom-nav__prev');
var testimonialSliderNext = $('.testimonial-slider__wrapper .custom-nav .custom-nav__next');
testimonialSlider.slick({
	dots: false,
	cssEase: 'linear',
	fade: true,
	speed: 500,
	infinite: false,
	slidesToShow: 1,
	slidesToScroll: 1 });


testimonialSliderPrev.on('click', function () {
	testimonialSlider.slick('slickPrev');
});
testimonialSliderNext.on('click', function () {
	testimonialSlider.slick('slickNext');
});