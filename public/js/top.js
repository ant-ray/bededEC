//ロゴのフェードイン
$(function logoFade() {
    $('.logo').fadeIn(1600);
});

//topに戻るボタン
$(function() {
    var btn = $('.button');
    $(window).on('load scroll', function(){
        if($(this).scrollTop() > 400) {
            btn.addClass('active');
        }else{
            btn.removeClass('active');
        }
    });
    btn.on('click',function () {
        $('body,html').animate({
            scrollTop: 0
        });
    });
});


//businessのフェードイン
$(function businessFade() {
    $(window).on('scroll load', function () {
        var scroll = $(this).scrollTop();
        var windowHeight = $(window).height();
        $('.business').each(function () {
            var cntPos = $(this).offset().top;
            if (scroll > cntPos - windowHeight + windowHeight / 3) {
                $(this).addClass('activeUp');
            }
        });
    });
    //スライダーの設定
    $('.slider').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 1600,
        autoplaySpeed: 10000,
        pauseOnHover: false,
        centerMode:true,        //追記
        centerPadding:"20%",    //追記
    });
});


//meのフェードイン
$(function meFade() {
    $(window).on('scroll load', function () {
        var scroll = $(this).scrollTop();
        var windowHeight = $(window).height();
        $('.me').each(function () {
            var cntPos = $(this).offset().top;
            if (scroll > cntPos - windowHeight + windowHeight / 3) {
                $(this).addClass('activeUp');
            }
        });
    });
});


//nextPageのフェードイン
$(function nextPageFade() {
    $(window).on('scroll load', function () {
        var scroll = $(this).scrollTop();
        var windowHeight = $(window).height();
        $('.nextPage').each(function () {
            var cntPos = $(this).offset().top;
            if (scroll > cntPos - windowHeight + windowHeight / 3) {
                $(this).addClass('activeImg');
            }
        });
    });
});
