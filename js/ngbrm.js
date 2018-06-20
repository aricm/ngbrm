(function($) {

    $('.accordion-title').on('click',function() {
        var openAccordion = $('.accordion-content.open');
        var openAccordionClosed = $(openAccordion).prev('.accordion-title').children('i').attr('data-closed');
        var openAccordionOpen = $(openAccordion).prev('.accordion-title').children('i').attr('data-open');
        var closed = $(this).children('i').attr('data-closed');
        var open = $(this).children('i').attr('data-open');

        if($('.accordion-content.open').length > 0) {
            if($(this).next('.accordion-content').hasClass('open')) {
                $(this).next('.accordion-content').slideToggle().removeClass('open');
                $(this).children('i').removeClass('fa-'+open).addClass('fa-'+closed);
            }
            else {
                $(openAccordion).slideToggle().removeClass('open');
                $(openAccordion).prev('h3').children('i').removeClass('fa-'+openAccordionOpen).addClass('fa-'+openAccordionClosed);
                $(this).next('.accordion-content').addClass('open').slideToggle();
                $(this).children('i').removeClass('fa-'+closed).addClass('fa-'+open);
            }
        }
        else {
            $(this).children('i').removeClass('fa-'+closed).addClass('fa-'+open);
            $(this).next('.accordion-content').addClass('open').slideToggle();
        }

        // $('html, body').animate({
        //     scrollTop: $(this).offset().top - 125
        // }, 125);
    });

})(jQuery);
