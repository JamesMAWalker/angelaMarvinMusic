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
        $(this).nextAll(".blog__item").addClass('hide');
        $(this).addClass('hide');
        $(this).prevAll(".blog__item").slice(0,8).removeClass('hide');

    })
});