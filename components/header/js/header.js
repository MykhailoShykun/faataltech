let header = document.querySelector('.header');
let spans = document.querySelectorAll('.hamburger__span');
let navLinks = document.querySelectorAll('.nav__link');
let sliderHeight = document.querySelector('.image-slider').offsetHeight;

window.addEventListener('load', function () {
    if (window.pageYOffset + 15 > sliderHeight) {
        header.classList.remove('header_front');
        spans.forEach(function (span) {
            span.classList.remove('hamburger__span_front');
        });
        navLinks.forEach(function (link) {
            link.classList.remove('nav__link_front');
        });
    }
    window.addEventListener('scroll', function () {
        if (window.pageYOffset + 15 > sliderHeight) {
            header.classList.remove('header_front');
            spans.forEach(function (span) {
                span.classList.remove('hamburger__span_front');
            });
            navLinks.forEach(function (link) {
                link.classList.remove('nav__link_front');
            });
        } else {
            if (header.classList.contains('header_front') === false) {
                header.classList.add('header_front');
                spans.forEach(function (span) {
                    span.classList.add('hamburger__span_front');
                });
                navLinks.forEach(function (link) {
                    link.classList.add('nav__link_front');
                });
            }
        }
    })
})