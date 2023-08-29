//登録完了時着火js
$(function success() {
    window.onload = function reg() {
        //オーバーレイの表示
        $(this).on('blur', '');
        if ($("#overlay")[0]) $("#overlay").remove();
        $("#headmain").append('<div id = "overlay"></div>');//オーバレイを追加
        $("#overlay").fadeIn();
        $('#flashMessage').css('display', 'block').animate({ marginTop: 0, opacity: 1 }, 500);
        return false;
    };
    $('#headmain').on('click', function () {//.appendで追加してるため親要素指定
        $("#overlay").remove();
        $('#flashMessage').css('display', 'none').animate({ marginTop: 600, opacity: 0 }, 500);
    });
})
