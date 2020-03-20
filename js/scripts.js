(function( $ ) {

    $('.download-BTN').on('click', function(event) {
        

        if($('.terms-conditions-CB').is(':checked')) { 
            console.log ('it worked')
        } else {
            console.log('keep trying')
            event.preventDefault();
        }
    });



})( jQuery );