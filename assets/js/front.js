jQuery(document).ready(function($) {
  var $images = $('.mainvisual img');
  var currentIndex = 0;
  var fadeDuration = 1000; // フェードイン・フェードアウトの時間 (ミリ秒)
  var displayDuration = 3000; // 画像表示時間 (ミリ秒)

  // 初期状態として最初の画像を表示
  $images.hide().eq(currentIndex).show();

  setInterval(function() {
      var nextIndex = (currentIndex + 1) % $images.length;

      $images.eq(currentIndex).fadeOut(fadeDuration);
      $images.eq(nextIndex).fadeIn(fadeDuration);

      currentIndex = nextIndex;
  }, fadeDuration + displayDuration);
});