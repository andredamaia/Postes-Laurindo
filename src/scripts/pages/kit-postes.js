import gsap from 'gsap';
import $ from 'jquery'

import Swiper, { Pagination } from 'swiper';

import Scroll from '../utils/scroll'

Swiper.use([Pagination]);

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

  buttonVerMais.addEventListener('click', function() {
    popup.style.display = "block";
  });

  const swiperKitPostes = new Swiper('.swiper-produtos', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 20,
    // autoplay: {
    //   delay: 2000,
    // },
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

  const closeMenuFiltros = document.querySelector('.close-menu');
  const popupContent = document.querySelector('.popup-content');

	closeMenuFiltros.addEventListener('click', () => {
		popup.style.display = 'none';
	});

  
  

  $('.swiper-produtos .swiper-slide').on('click', function(){
    const modal = $(this).data('modal')

    $('.modal-'+modal).css('display', 'flex');

    $(bgLayer).css('display', 'block');
    $(header).css('display', 'none');
    // $(bgLayer).css('display', 'block');
  })

}