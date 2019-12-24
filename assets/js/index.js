// jQuery(document).ready(function($) {
//     $('.blog__item-7').on("click", function(){
//         $(this).css('display', 'none');
//         console.log($(this).prevAll('blog__item'));
//         $(this).prevAll('blog__item').css('display', 'none');
//     })
// });


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
        $(this).prevAll('div').slice(7,15).removeClass('hide');
        $(this).prev(".blog__item-7").removeClass('hide');
    })

    //mobile nav 
    $('.nav__btn-phone').on('click', () => {
        $('.nav').toggleClass('unhide--flex-height');

        if ($('.nav').hasClass('unhide--flex-height')) {
            $('.nav').css('height', '60vh');
            $('.nav').css('transition', 'all .2s');
        } else {
            $(".nav").css("height", "0");
        }
    })
});
