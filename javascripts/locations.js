jQuery(document).ready(function($) {

	jQuery('.locations-bar__checkbox').prop('checked','');

	jQuery('.locations-bar').click(function(event) {
		if ( jQuery(this).hasClass('locations-bar--open') )
		{
			jQuery(this).removeClass('locations-bar--open');
			jQuery('.locations-bar__checkbox').prop('checked','');
			jQuery('.locations-content').removeClass('locations-content--open');
		}
		else
		{
			jQuery(this).addClass('locations-bar--open');
			jQuery('.locations-bar__checkbox').prop('checked','checked');
			jQuery('.locations-content').addClass('locations-content--open');
		}
		return false;
	});

	var map = new google.maps.Map(document.getElementById('locations-map'), {
	  center: {lat: -34.397, lng: 150.644},
	  zoom: 8
	});


});