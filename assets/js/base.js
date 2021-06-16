//hamburger menu
$(function() {
    var $header = $('header');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 350) {
            $header.addClass('fixed');
        } else {
            $header.removeClass('fixed');
        }
    });
    $('.m-hm').click(function(){
    $header.toggleClass('open');
    });
});

// auto scroll
$(function(){
  $('a[href^="#"]').click(function() {
    var adjust = 0;
    var speed = 100;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top + adjust;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});