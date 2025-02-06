// Home page Hero section
var swiper = new Swiper('.hero-swiper', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 0,
            allowTouchMove: true,
        },
        576: {
            slidesPerView: 1,
            allowTouchMove: false,
        }
    },
});

// Home Page 4 steps section
var swiper = new Swiper(".swiper-container.four-step-slider", {
    spaceBetween: 20,
    loop: false,
    breakpoints: {
        0: {
            slidesPerView: 1.3,
            allowTouchMove: true,
        },
        576: {
            slidesPerView: 2,
            allowTOuchMove: true,
        },
        992: {
            slidesPerView: 3,
            allowTOuchMove: true,
        },
        1200: {
            slidesPerView: 4,
            allowTOuchMove: false,
        }
    }
});