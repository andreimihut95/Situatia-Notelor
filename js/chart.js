setTimeout(function() {

  $('.bar').each(function(i) {

    var $bar = $(this);
    setTimeout(function() {
      $bar.css('width', $bar.attr('data-percent'));
    }, i * 100);
  });

}, 1000)