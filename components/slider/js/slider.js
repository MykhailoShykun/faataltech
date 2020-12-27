new Swiper('.image-slider', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    initialSlide: 1,
    loop: true,
    grabCursor: true,
    autoplay: {
        delay: 5000,
    },
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
});
