$(document).ready(function() {
	
	if ($('.slimbox').length)
    $('.slimbox').each(function() {
      $(this).slimbox();
    });
  
  // Уголки
  $('.rounded')
    .prepend('<span class="cn top"><i/><b/></span>')
    .append('<span class="cn bot"><i/><b/></span>');
  
  // Меню
  $('.nav li').each(function() {
    if ($(this).find('ul').length) {
      $(this)
        .children('ul')
          // .prepend('<li class="t" />')
          .append('<li class="b" />')
        .end()
        .hover(function() {
          $(this).addClass('hover');
        }, function() {
          $(this).removeClass('hover');
        });
    };
  });
  
  // Хинты
  $('input[title]').each(function() {
    
    var title = $(this).attr('title');
    $(this)
      .addClass('hinted')
      // .attr('title', '')
      .attr('value', title);

    $(this).focus(function() {
      if ($(this).attr('value') == title) {
        $(this)
          .removeClass('hinted')
          .attr('value', '');
      };
    });
    
    $(this).blur(function() {
      if ($(this).attr('value').length == 0) {
        $(this)
          .addClass('hinted')
          .attr('value', title);
      };
    });

  });
  
  // Карусель
  if ($('.carousel').length) {
    $('.carousel .init').jcarousel({
      scroll: 1
    });
    
    $('.carousel .init .rounded').each(function() {
      
      var num = $(this).parent().attr('class').match(/\bjcarousel-item-(\d)\b/)[1];
      
      $(this).hover(function() {
        $(this)
          .parents('.rounded-i')
            .find('.cur')
              .removeClass('cur')
            .end()
            .find('.tabs .item-' + num)
              .addClass('cur')
            .end()
          .end()
          .addClass('cur');

      });
    });
    
  };
  
});
