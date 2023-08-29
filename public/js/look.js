//lookForのフェードイン
$(function logoFade() {
    $('.lookFor').fadeIn(1500);
});

// bedBoxのフェードイン
$(function bedBoxFade() {
    $(window).on('scroll load', function () {
        var scroll = $(this).scrollTop();
        var windowHeight = $(window).height();
        $('.bedBox').each(function () {
            var cntPos = $(this).offset().top;
            if (scroll > cntPos - windowHeight + windowHeight / 3) {
                $(this).addClass('activeBedBoxUp');
            }
        });
    });
});

// bedBoxのフェードイン
$(function pillowBoxFade() {
    $(window).on('scroll load', function () {
        var scroll = $(this).scrollTop();
        var windowHeight = $(window).height();
        $('.pillowBox').each(function () {
            var cntPos = $(this).offset().top;
            if (scroll > cntPos - windowHeight + windowHeight / 3) {
                $(this).addClass('activePillowBoxUp');
            }
        });
    });
});

// lightBoxのフェードイン
$(function lightBoxFade() {
    $(window).on('scroll load', function () {
        var scroll = $(this).scrollTop();
        var windowHeight = $(window).height();
        $('.lightBox').each(function () {
            var cntPos = $(this).offset().top;
            if (scroll > cntPos - windowHeight + windowHeight / 3) {
                $(this).addClass('activeLightBoxUp');
            }
        });
    });
});
