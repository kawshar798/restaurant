(function ($) {

    "use strict";

    // Document ready function 
    $(function () {
        /*-------------------------------------
        Booking dates and time
        -------------------------------------*/

        var timePicker = $('.rt-time');
        if (timePicker.length) {
            timePicker.datetimepicker({
                format: 'H:i',
                datepicker: false
            });
        }
    });



})(jQuery);