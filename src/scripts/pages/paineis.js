import gsap from 'gsap';
import $ from 'jquery'
import Scroll from '../utils/scroll'
import Swiper, { Pagination } from 'swiper';

Swiper.use([Pagination]);

const pageurl = document.querySelector('body').id

if(pageurl == 'paineis'){
  const scroll = new Scroll()

  gsap.ticker.add(() => { 
    if(scroll.screenPosition > 150){
        $('header').addClass('active')
    } else {
        $('header').removeClass('active')
    }
  })

  $('.toggle-header').on('click', function(){
    $(this).parent().toggleClass('open-toggle');

    window.dispatchEvent(new Event('resize'));
  });

  const swiperCaixaMee = new Swiper('.swiper-caixa-mee', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
  });

  const swiperPainel2MedicoesVerticais = new Swiper('.swiper-painel-2-medicoes-verticais', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
  });

  const swiperPainel2MedicoesComum = new Swiper('.swiper-painel-2-medicoes-comum', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
  });

  const swiperPainel4Medicoes = new Swiper('.swiper-painel-4-medicoes', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
  });

  const swiperPainel6Medicoes = new Swiper('.swiper-painel-6-medicoes', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
  });

}