let isFrontPage = false;
let hamburger = document.querySelector('.header__hamburger');
let mobileMenu = document.querySelector('.mobile-menu');
let reverse = false;
let active = false;

window.addEventListener('load', function () {
    if (document.querySelector('.header').classList.contains('header_front') === true) {
        isFrontPage = true;
    }
    hamburger.addEventListener('click', function () {
        if (active === false) {
            active = true
            document.body.style.overflow = 'hidden';
            if (isFrontPage === true) {
                if (document.querySelector('.header').classList.contains('header_front') === true) {
                    document.querySelector('.header').classList.remove('header_front');
                    document.querySelectorAll('.hamburger__span').forEach(function (span) {
                        span.classList.remove('hamburger__span_front');
                    })
                    reverse = true;
                }
            }
        }
        else {
            active = false
            document.body.style.overflow = 'auto';
            if (isFrontPage === true) {
                if (document.querySelector('.header').classList.contains('header_front') === false && reverse === true) {
                    document.querySelector('.header').classList.add('header_front');
                    document.querySelectorAll('.hamburger__span').forEach(function (span) {
                        span.classList.add('hamburger__span_front');
                    })
                    reverse = false;
                }
            }
        }
        mobileMenu.classList.toggle('active');
    })
})