jQuery(document).ready(function($) {

	var products_slider = jQuery('.products-slider__slider').flickity({
		prevNextButtons: false,
		wrapAround: false,
		pageDots: false,
		fade: true,
		lazyLoad: 2
	});

	jQuery('.products-slider__arrow--left').click(function(event) {
		products_slider.flickity('previous', true);
		return false;
	});

	jQuery('.products-slider__arrow--right').click(function(event) {
		products_slider.flickity('next', true);
		return false;
	});

});