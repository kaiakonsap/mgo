jQuery( document ).ready(function() {

    jQuery('#navbar-toggle').click(function (event) {
        event.preventDefault();
        if(jQuery( window ).width()<=1080){
            if(!jQuery('.main-menu').is(':visible')) {
                jQuery('.main-menu').slideDown('fast');
                jQuery('.main-menu').css('display','block');
            } else {
                jQuery('.main-menu').slideUp('fast');
            }}
        else{
            jQuery('.main-menu').css('display','block');
        }
    });

jQuery(window).resize(function() {
  
    if(jQuery(window).width()>1080){
         jQuery('.main-menu').css('display','inline-block');
    }
    else
    {
         if(jQuery('.main-menu').is(':visible')) {
      jQuery('.main-menu').css('display','block');
  }
    }

});

});

