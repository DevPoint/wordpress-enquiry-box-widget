// add your custom scripts here
// as the page loads, call these scripts
jQuery(function($) {

    $('.enquiry-box-widget').each(function() {
        var $widget = $(this),
            $arrival = $widget.find('input[name=arrival]'),
            $departure = $widget.find('input[name=departure]');

        $arrival.pickadate({
        });

        $departure.pickadate({
        });
    });

});

