// by avavion.
// 19/01/2022

// import Swiper bundle with all modules installed
import Swiper, {Pagination} from 'swiper';

// import styles bundle
import 'swiper/css';

Swiper.use([Pagination]);

const DEBUG = false;

// Debug hepler function
const dd = (data) => DEBUG && console.log(data);

// Scroll
const scrollOn = () => document.body.style.overflow = '';
const scrollOff = () => document.body.style.overflow = 'hidden';

const getOffsetHeight = (el) => el.offsetHeight;

const video = () => {
    const videos = document.querySelectorAll('video');

    for (const video of videos) {
        video.setAttribute('loop', 'loop');
        video.setAttribute('autoplay', 'autoplay');
    }
    ;
}

const header = {
    sticky: () => {
        const $ = document.querySelector('header.header#header');

        if (!$) return false;

        const height = getOffsetHeight($) / 2;

        if (window.scrollY >= height) {
            $.classList.add('is--sticky');
        }

        window.addEventListener('scroll', () => {
            if (window.scrollY >= height) {
                $.classList.add('is--sticky');
            } else {
                $.classList.remove('is--sticky');
            }
        });
    },

    init: () => {
        header.sticky();
    }
}

const reviews = {
    selectors: {
        slider: '.js-slider',
        el: '.reviews'
    },
    config(options = {}) {
        const settings = {
            slidesPerView: 1,
            slidesPerGroup: 1,
            centeredSlides: true,
            slideActiveClass: "_active",
            loop: true,
            speed: 500,
            autoplay: {
                delay: 5000
            },
            spaceBetween: 30,
            direction: 'horizontal',
            effect: 'coverflow',
            coverflowEffect: {
                rotate: 0,
                modifer: 1,
                slideShadows: false,
                stretch: 0
            },
            breakpoints: {
                576: {
                    spaceBetween: 20,
                    slidesPerView: 2,
                    speed: 1000
                },
                768: {
                    spaceBetween: 60,
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 120
                },
                1400: {
                    slidesPerView: 3,
                    spaceBetween: 120
                },
            }
        };

        return Object.assign(settings, options);
    },
    slider(element, options) {
        return new Swiper(element, this.config(options));
    },
    init(...options) {
        const elements = document.querySelectorAll(`${this.selectors.el} ${this.selectors.slider}`);

        for (const element of elements) {
            const slider = this.slider(element, options);
        }
    }
};

const gallery = () => {
    const gallery = document.querySelector('#gallery');

    if (!gallery) return false;

    const settings = {
        slidesPerView: 1,
        slidesPerGroup: 1,
        centeredSlides: true,
        loop: true,
        speed: 500,
        autoplay: {
            delay: 5000
        },
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
    };

    const slider = new Swiper(gallery, settings);
}

// Init function
const init = () => {
    dd('init();');
    header.init();
    reviews.init();
    video();
    gallery();
}

document.addEventListener('DOMContentLoaded', init);
