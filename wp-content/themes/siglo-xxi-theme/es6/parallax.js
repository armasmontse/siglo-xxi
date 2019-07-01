export default function () {
  var scrollPos = $(this).scrollTop();
  $('.home__parallax').css({
    'background-position' : '10% ' + (-scrollPos/8)+"px"
  });
  $('.niveles__parallax').css({
    'background-position' : '10% ' + (-scrollPos/4)+"px"
  });
   $('.filosofia__parallax').css({
    'background-position' : '0% ' + (-scrollPos/0)+"px"
  });
  $('.servicios__parallax').css({
    'background-position' : '70% ' + (-scrollPos/16)+"px"
  });
}