import gsap from 'gsap';
import $ from 'jquery'

import Swiper, { Autoplay } from 'swiper';

import Scroll from '../utils/scroll'

Swiper.use([Autoplay]);

const pageurl = document.querySelector('body').id

if(pageurl == 'home'){
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

  const swiperBanner = new Swiper('.swiper-banner', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
      delay: 3000,
    },
  });

  const buttonVideo = document.querySelector('.bg-video');
  const popupVideo = document.querySelector('dialog');

  buttonVideo.onClick = function() {
    popupVideo.show()
  }

  $(window).scroll(function(){ scrollSite(); });
    scrollSite();

    function scrollSite(){
        if($(this).scrollTop() > 20){
            $('header').addClass('active');
        };
        if($(this).scrollTop() < 20){
            $('header').removeClass('active');
        };
    }

}