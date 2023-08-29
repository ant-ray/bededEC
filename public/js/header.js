//サインイン画面
$(function sin() {
    $('#signin').on('click', function () {
        //オーバーレイの表示
        $(this).on('blur','');
        if ($("#overlay")[0]) $("#overlay").remove();
        $("#headmain").append('<div id = "overlay"></div>');//オーバレイを追加

        $("#overlay").fadeIn();
        $('#login').css('display', 'block').animate({ marginTop: 0, opacity: 1 }, 500);
        return false;
    });
    $('.sends').on('click', function () {
        $("#overlay").remove();
        $('#login').css('display', 'none').animate({ marginTop: 600, opacity: 0 }, 500);
    });
    $('#headmain').on('click', function () {//.appendで追加してるため親要素指定
        $("#overlay").remove();
        $('#login').css('display', 'none').animate({ marginTop: 600, opacity: 0 }, 500);
    });

})


//新規登録画面
$(function reg() {
    $('.registerLink').on('click', function () {
        //オーバーレイの表示
        $(this).on('blur','');
        if ($("#overlay")[0]) $("#overlay").remove();
        $("#headmain").append('<div id = "overlay"></div>');//オーバレイを追加
        $("#overlay").fadeIn();
        $('#register').css('display', 'block').animate({ marginTop: 0, opacity: 1 }, 500);
        return false;
    });
    $('.sends').on('click', function () {
        $("#overlay").remove();
        $('#register').css('display', 'none').animate({ marginTop: 600, opacity: 0 }, 500);
    });
    $('#headmain').on('click', function () {//.appendで追加してるため親要素指定
        $("#overlay").remove();
        $('#register').css('display', 'none').animate({ marginTop: 600, opacity: 0 }, 500);
    });
})

//ログアウトボタン
$(function logout() {
    $('#logout').on('click', function () {
        $(".outbox").toggle();
    });
})

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


