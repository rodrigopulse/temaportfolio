( function($) {
    $( document ).ready( function(){
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 7,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    } ); //document.ready
} )( jQuery );
