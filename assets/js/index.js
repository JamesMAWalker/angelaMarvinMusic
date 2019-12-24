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
        $(this).prevAll(".blog__item").css('display', 'none');
        $(this).css('display', 'none');
        $(this).nextAll(".blog__item").slice(0,8).css('display', 'flex');

    })
    
    //back button
    $('.blog__item-8').on("click", function(){
        $(this).nextAll(".blog__item").css('display', 'none');
        $(this).css('display', 'none');
        $(this).prevAll(".blog__item").slice(0,8).css('display', 'flex');

    })
});