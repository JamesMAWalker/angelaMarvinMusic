jQuery(document).ready(function($) {
    $('.blog__item-7').on("click", function(){
        alert('test');
        $(this).nextAll('blog__item-7').slice(0,4).css('display', 'flex');
    })
  })