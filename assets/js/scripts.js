( function($) {
    $( document ).ready( function(){
        //Menu
        $('.js-abrir-menu').on('click', function(){
            $('.menu').toggleClass('menu--aberto');
        });$('.js-fechar-menu').on('click', function(){
            $('.menu').toggleClass('menu--aberto');
        });
        //Swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 7,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            }
        });
    } ); //document.ready
} )( jQuery );
