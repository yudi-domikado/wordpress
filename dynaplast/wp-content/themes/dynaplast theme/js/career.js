$(document).ready(function() {
  $('.block-career1 a').click(function() {
    $('.infoblock-career1').stop().slideToggle('slow');
    $('.infoblock-career2').css('display', 'none');
  });

  $('.infoblock-career1 img.closeform').click(function() {
    $('.infoblock-career1').stop().slideToggle('slow');
  });

  $('.block-career2 a').click(function() {
    $('.infoblock-career2').stop().slideToggle('slow');
    $('.infoblock-career1').css('display', 'none');
  });

  $('.infoblock-career2 img.closeform').click(function() {
    $('.infoblock-career2').stop().slideToggle('slow');
  });

  $('.block-career3 a').click(function() {
    $('.infoblock-career3').stop().slideToggle('slow');
    $('.infoblock-career4').css('display', 'none');
  });

  $('.infoblock-career3 img.closeform').click(function() {
    $('.infoblock-career3').stop().slideToggle('slow');
  });

  $('.block-career4 a').click(function() {
    $('.infoblock-career4').stop().slideToggle('slow');
    $('.infoblock-career3').css('display', 'none');
  });

  $('.infoblock-career4 img.closeform').click(function() {
    $('.infoblock-career4').stop().slideToggle('slow');
  });
});