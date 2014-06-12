(function() {
  $(document).ready(function() {
    $('.imageBox').colorbox({
      'height': '90%',
      'rel': 'imageBox'
    });
    $("img.lazy-index-logo").lazyload();
    return $("img.lazy-index-image").lazyload();
  });

}).call(this);
