//新規登録画面読み込み時出現
$(function look() {
    window.onload = function reg() {
        //オーバーレイの表示

        $('.detailBox img').animate({ marginTop: 0, opacity: 1 }, 500);
        return false;
    };
})

//新規登録画面
$(function reg() {
    $('.purchaseBtn').on('click', function () {
        alert('サンプルサイトのため購入は実際にできません。')
    });
})
