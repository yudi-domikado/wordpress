$(document).ready(function(){

$('.listem:first-child').css('border', '0');
  
$('.slider').flexslider({
  animation: "slide",
  animationLoop: true,
  itemWidth: 175,
  itemMargin: 0
});

$('.wrapclient-slider').flexslider({
  animation: "slide",
  animationLoop: true,
  itemWidth: 216,
  itemMargin: 0
});

$(function() {
  $('#da-slider').cslider({
    autoplay : true,
    interval: 8000,
    bgincrement : 10
  });
});

$('.listem img').contenthover({
  overlay_background:'#868687',
  overlay_opacity: 0.9,
  effect:'slide',
  slide_direction:'top',
  overlay_x_position:'right',
  overlay_y_position:'center'
});

$('.listpro, .listclient').mouseover(function(){
  $(this).find("h3").stop().animate({color: "#01a9e8"}, 1000);
}).mouseout(function(){
  $(this).find("h3").stop().animate({color: "#666666"}, 1000);
  });

});