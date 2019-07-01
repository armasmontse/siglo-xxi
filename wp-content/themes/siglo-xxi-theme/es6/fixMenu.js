const w = $(window)

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