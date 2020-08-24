jQuery(document).ready(function($) {

	jQuery('.input-select-2').select2();

	jQuery('.input-range__input').jRange({
		from: 0,
		to: 100,
		step: 1,
		width: 180,
		showLabels: false,
		showScale: false,
	});

});