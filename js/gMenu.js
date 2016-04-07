jQuery(function($) {
var nav    = $('#fixedBox'),
    offset = nav.offset();
var to_top = $('#to_top');
  
$(window).scroll(function () {
  if($(window).scrollTop() > offset.top) {
    nav.addClass('fixed');
    to_top.addClass('pageup');
  } else {
    nav.removeClass('fixed');
    to_top.removeClass('pageup');
  }
});
});