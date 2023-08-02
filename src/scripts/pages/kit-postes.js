import gsap from 'gsap';
import $ from 'jquery'

import Swiper, { Pagination, Navigation } from 'swiper';

import Scroll from '../utils/scroll'

Swiper.use([Pagination]);
Swiper.use([Navigation]);

const pageurl = document.querySelector('body').id

if(pageurl == 'kit-postes'){
  const scroll = new Scroll()

  // gsap.ticker.add(() => { 
  //     gsap.to('h2', {
  //       y: -scroll.screenPosition/2,
  //       autoAlpha: scroll.screenPosition/500,
  //       ease: 'power2.out',
  //       duration: 1.6
  //     })
  // })

  gsap.ticker.add(() => { 
    if(scroll.screenPosition > 150){
        $('header').addClass('active')
    } else {
        $('header').removeClass('active')
    }
  })


  const bgLayer = document.querySelector(".layer");
  const buttonVerMais = document.querySelector(".ver-mais");
  const popup = document.querySelector("#popup");
  const header = document.querySelector('header');
  const closeMenuFiltros = document.querySelector('.close-menu-popup');
  const layer = document.querySelector('.layer');

  // $('.close-menu-popup').on('click', function(){
  //   $('.popup-content').css('display','none');
  //   $('.layer-popup').css('display','none');
  // })

  // $('buttonVermais').on('click', function(){
  //   $('.popup-content').css('display','block');
  //   $('.layer-popup').css('display','block');
  //   $('.layer').css('display','none');
  // })

  const swiperKitPostes = new Swiper('.swiper-produtos', {
    direction: 'horizontal',
    slidesPerView: 'auto',
    spaceBetween: 20,
    autoplay: {
      delay: 2000,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  const swiperPopUpImg = new Swiper('.swiper-popup-img', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
    },
    // autoplay: {
    //   delay: 2000,
    // },
  });

  $('.swiper-produtos .swiper-slide').on('click', function(){
    const modal = $(this).data('modal')

    $('.modal-'+modal).css('display', 'block');

    $('.layer-popup').css('display','block');
    $('header').css('display','none');
  });


  $('.close-menu-popup').on('click', function(){
    $('.popup').css('display','none');
    $('.layer-popup').css('display','none');
    $('header').css('display','block');
  });

}