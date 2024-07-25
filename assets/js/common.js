jQuery(document).ready(function($) {
  var menuVisible = false; // メニューが表示されているかどうかを追跡

  $(".header__sp--menu").click(function() {
    if (menuVisible) {
      // メニューが表示されている場合は隠す
      $(".header__pc--nav").animate({ top: -305 }, 500);
    } else {
      // メニューが隠れている場合は表示する
      $(".header__pc--nav").animate({ top: 0 }, 500);
    }
    menuVisible = !menuVisible; // 状態を反転
  });
});