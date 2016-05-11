$(window).scroll(function(){
    // Sticky Header
    if( $(this).scrollTop()>55 ){
        $('.container-fluid').addClass('sticky');
    }
    else {
        $('.container-fluid').removeClass('sticky');
    }
    //PageTop Fade/Hide 
    if( $(this).scrollTop()> 200 ){
        $('.pageTop').fadeIn(1000);
    } else {
        $('.pageTop').hide(100);
    }
});

$(document).ready(function (){
    // AutoHeight for Items
    var maxHeight = Math.max.apply(null, $(".horizSlider li").map(function (){
        return $(this).height();
    }).get());
    $('.horizSlider li').css('height', maxHeight+20 + 'px');
    // return false for the previous and next button
    $('.prev a, .next a').click(function(e){
        e.preventDefault(); 
    });
    // PageTop animate
    $('.pageTop a').click(function(e){
        e.preventDefault();
       $('html, body').animate({
           scrollTop: 0
       },500);
    });
     if (window.location.hash != '') {
         var target = window.location.hash;
         $('html, body').animate({      
         scrollTop : $(target).offset().top - 80
        },100);
     }
});
// resoponsive banner
$(window).resize(function() {
    var viewportWidth = $(window).width();
    $('.sliderImg').css('width',viewportWidth);
});
$(window).load(function(){
    $('.fade').animate({
        opacity: 1
    }, 500);
});