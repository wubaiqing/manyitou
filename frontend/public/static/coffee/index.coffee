# 点击图片
$(document).ready ->
  $('.imageBox').colorbox
    'height' : '90%',
    'rel' : 'imageBox'

  $("img.lazy-index-logo").lazyload();
  $("img.lazy-index-image").lazyload();

