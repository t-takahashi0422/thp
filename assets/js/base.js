//　hamburger menu
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
    $('.m-spNav__menuListItem a').click(function(){
        $header.removeClass('open');
    });
});

// auto scroll
$(function(){
  $('a[href^="#"]').click(function() {
    var adjust = 0;
    var speed = 200;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top + adjust;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});

// parallax
$(function(){
  
  var p1 = $('#may .m-parallaxItem').offset(),
      p2 = $('#question .m-parallaxItem').offset();
  
  $(window).on('scroll',function(){
    var scrollY = $(this).scrollTop();
    console.log(scrollY);
    
    $('#may .m-parallaxItem').css({
      'left': p1.left + scrollY / 10
    });
    $('#question .m-parallaxItem').css({
      'left': p2.left + scrollY / -15
    });
  });
});

// accordion
$(function(){
    $(".m-acc .m-accListQ").on("click", function() {
        $(this).next().slideToggle("fast");
        $(this).toggleClass('open');
    });
});

// float
$(function(){
    var scrollEnd = $('#cv').offset().top; //ページ上部からの距離を取得
    var windowHeight = $(window).height(); //ウインドウの高さを取得
    var distance = 0;
    
 
    $(document).scroll(function(){
        distance = $(this).scrollTop(); //スクロールした距離を取得
        if (scrollEnd <= distance + 900) { //スクロール距離がendの位置を超えたら
            $('.m-float').fadeOut(100); //フェードアウト
        } else{
            $('.m-float').fadeIn(100); //endより上部に戻ったらフェードイン
        }
    });
});