import $ from "jquery";
import 'lightbox2';
import Swiper, { Navigation, Pagination, Lazy } from 'swiper';

window.$ = window.jQuery = $;

Swiper.use([Navigation, Pagination, Lazy]);

const documents = new Swiper('.documents-slider', {
  direction: 'horizontal',
  loop: true,

  slidesPerView: 2,
  spaceBetween: 5,
  breakpoints: {
    640: {
      slidesPerView: 3
    },
    768: {
      slidesPerView: 4
    }
  },
  pagination: {
    el: '.swiper-pagination'
  }
});

const gallery = new Swiper('.gallery-slider', {
  loop: true,
  preloadImages: false,
  lazy: true,
  slidesPerView: 3,
  spaceBetween: 5,
  breakpoints: {
    640: {
      slidesPerView: 4,
      spaceBetween: 15,
    }
  },

  pagination: {
    el: '.swiper-pagination',
  },
  
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

window.addEventListener('load', () => {
  const ham = document.querySelector('.hamburger');
  const menu = document.querySelector('.menu');
  const toggleMenu = () => {
    menu.classList.toggle('menu--show');
  }
  
  ham.addEventListener('click', e => {
    e.stopPropagation();
  
    toggleMenu();
  });

  document.addEventListener('click', e => {
    let target = e.target;
    let isMenu = target == menu || menu.contains(target);
    let isHam = target == ham;
    let isShowMenu = menu.classList.contains('menu--show');
    
    if (!isMenu && !isHam && isShowMenu) {
      toggleMenu();
    }
  });

  const anchors = [].slice.call(document.querySelectorAll('a[href*="#"]')),
  animationTime = 500,
  framesCount = 50;

  anchors.forEach(function(item) {
    item.addEventListener('click', function(e) {
    e.preventDefault();
    let coordY = document.querySelector(item.getAttribute('href')).getBoundingClientRect().top + window.pageYOffset;
    let scroller = setInterval(function() {
      let scrollBy = coordY / framesCount;  
        if(scrollBy > window.pageYOffset - coordY && window.innerHeight + window.pageYOffset < document.body.offsetHeight) {
          window.scrollBy(0, scrollBy);
          menu.classList.remove('menu--show');
        } else {
          window.scrollTo(0, coordY);
          clearInterval(scroller);
          menu.classList.remove('menu--show');
        }
      }, animationTime / framesCount);
    });
  });
});