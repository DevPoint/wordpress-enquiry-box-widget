// add your custom scripts here
// as the page loads, call these scripts
jQuery(function($) {

    $('.enquiry-box-widget').each(function() {
        var $widget = $(this),
            $arrival = $widget.find('input[name=arrival]'),
            $departure = $widget.find('input[name=departure]');

        $arrival.pickadate({
	        format: $arrival.data('format'),
	        formatSubmit: $arrival.data('submit-format'),
	        hiddenName: true,
        });

        $departure.pickadate({
	        format: $departure.data('format'),
	        formatSubmit: $departure.data('submit-format'),
	        hiddenName: true,
        });
    });

});

