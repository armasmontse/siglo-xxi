const w = $(window)

var btnCerrar = $("#header-close_JS");
var menu = $("#header__items_JS");
var imgHidden = $(".header__logo-image");
var imgShown = $(".header__logo-image--mobil");
var open = false;

btnCerrar.on("click", function() {

  // Si está abierto hay que cerrarlo.
  if(open) {
    menu.removeClass('show');
    btnCerrar.html("menú");
    btnCerrar.removeClass('text-blue');
    imgHidden.show();
    imgShown.hide();
    open = false;
  }else {
    menu.addClass('show');
    btnCerrar.html("cerrar");
    btnCerrar.addClass('text-blue');
    imgHidden.hide();
    imgShown.show();
    open = true;
  }

})

/**/
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
  });
});


// Posicionar el header fixed, top 0 al hacer scroll
export default function() {
    var altura_del_header = $('.splash').outerHeight(true);
    var altura_del_menu = $('.header__JS').outerHeight(true);

    if (w.scrollTop() >= altura_del_header){
        $('.header__JS').addClass('header__fixed');
        $('.home__content').css('margin-top', '30px');
    } else {
        $('.header__JS').removeClass('header__fixed');
        $('.home__content').css('margin-top', '0');
    }
}
