// Phone size breakpoint
const bpSmaller = window.matchMedia("(max-width: 700px");

jQuery(document).ready(function($) {

    // Forward button
    $('.blog__item-7').on("click", function(){
        $(this).prevAll(".blog__item").addClass('hide');
        $(this).addClass('hide');
        $(this).nextAll(".blog__item").slice(0,8).removeClass('hide');
    })
    
    // Back button
    $('.blog__item-8').on("click", function(){
        $(this).prevUntil(".blog__item-7").addClass('hide');
        $(this).addClass('hide');
        $(this).next(".blog__item-7").addClass('hide');
        $(this).prevAll('div').slice(6,15).removeClass('hide');
        $(this).prev(".blog__item-7").removeClass('hide');
    })

    // Mobile nav 
    $('.nav__btn-phone').on('click', () => {
        $('.nav').toggleClass('unhide--flex-height');

        if ($('.nav').hasClass('unhide--flex-height')) {
            $('.nav').attr('data-scroll', 'disabled');
        } else {
            $(".nav").attr("data-scroll", "out");
        }
    })

    // Mobile nav menu positioner
    if (bpSmaller.matches) {
      $(".nav").attr("data-scroll", "disabled");
      $('.nav').css("transform", "translateY(-88%)");

      $('.nav__item').on('click', () => {
          $(".nav").toggleClass("unhide--flex-height");
          $('.nav__checkbox').removeAttr('checked');
      })
    }

    // Fixes an issue created by a div element that contact forms plugin inserts into the HTML
    $('div.wpcf7').slice(0,1).addClass('wpcf7-form-wrapper-1');
    $('div.wpcf7').slice(1,2).addClass('wpcf7-form-wrapper-2');

    // Preparing variables needed for YouTube API functions
    urls = [];
    for (let i = 1; i < 5; i++) {
        if (window['vid_url_' + i]) {
            urls.push(window['vid_url_' + i]);
        } else {
            urls.push(null);
        }
    }
})

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

//YouTube API section

var player1;
var player2;
var player3;
var player4;
var players = [player1, player2, player3, player4];

function pauseOtherMedia(mediaNum) {
    for (let i = 1; i < 5; i ++ ) {
        if (i !== mediaNum) {
            if (typeof(players[i-1]) === 'object') {
                players[i-1].pauseVideo();     
            } else {  
                jQuery('.listen__exp-' + i).find('audio')[0].pause();
            }
        }
    }
}

function createMedia(num) {
    if (urls[num-1] !== null) {
        players[num-1] = new YT.Player('player' + num, {
            videoId: urls[num-1],
        });
        jQuery('.listen__item-'+num).click(function(){
            pauseOtherMedia(num);
            if (players[num-1].getPlayerState() === 1) {
                players[num-1].pauseVideo();
            } else {
                players[num-1].playVideo();
            }
        });
    } else {
        jQuery('.listen__item-' + num).click(function(){
            pauseOtherMedia(num);
            if (jQuery('.listen__exp-' + num).find('audio')[0].paused === false) {
                jQuery('.listen__exp-' + num).find('audio')[0].pause();
            } else {
                jQuery('.listen__exp-' + num).find('audio')[0].play();
            } 
        });
    }
}


// function togglePauseButton() {
//     // players.forEach( player => console.log(player))
//     setTimeout( () => {
//         console.log(players[0].getPlayerState())
//     }, 3000);
// };



function onYouTubeIframeAPIReady() {
    createMedia(1);
    createMedia(2);
    createMedia(3);
    createMedia(4);

    // togglePauseButton();
}