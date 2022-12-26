import gsap from 'gsap';
import $ from 'jquery'
import Scroll from '../utils/scroll'

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

}