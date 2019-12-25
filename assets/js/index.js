//forward button
jQuery(document).ready(function($) {
    $('.blog__item-7').on("click", function(){
        $(this).prevAll(".blog__item").addClass('hide');
        $(this).addClass('hide');
        $(this).nextAll(".blog__item").slice(0,8).removeClass('hide');
    })
    
    //back button
    $('.blog__item-8').on("click", function(){
        $(this).prevUntil(".blog__item-7").addClass('hide');
        $(this).addClass('hide');
        $(this).next(".blog__item-7").addClass('hide');
        $(this).prevAll('div').slice(6,15).removeClass('hide');
        $(this).prev(".blog__item-7").removeClass('hide');
    })

    //mobile nav 
    $('.nav__btn-phone').on('click', () => {
        $('.nav').toggleClass('unhide--flex-height');

        if ($('.nav').hasClass('unhide--flex-height')) {
            $('.nav').attr('data-scroll', 'disabled');
        } else {
            $(".nav").attr("data-scroll", "out");
        }
    })

    //fixes an issue created by a div element that contact forms plugin inserts into the HTML
    $('div.wpcf7').slice(0,1).addClass('wpcf7-form-wrapper-1');
    $('div.wpcf7').slice(1,2).addClass('wpcf7-form-wrapper-2');
});
