// import './bootstrap';

// Works_carousel

// const swiper = new Swiper('.swiper-works', { //方言
let mySwiper = new Swiper ('.swiper-works',{
  loop: true,                       //ループ再生
  autoplay: {                       //自動再生
    delay: 5000,
  },
  pagination: {                     //ページネーション(プログレスバー)
    el: '.swiper-pagination',
    type: 'progressbar',
    clickable: true,                //クリック可
  },
  navigation: {                     //ナビゲーション(矢印)
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  speed: 1000,
  effect: 'slide',
  slidesPerView: 2.5,
  spaceBetween: 40,
});


// Contact-form_modal

$(function(){

  $('#contact-show').click(function() {
    $('#contact-modal').fadeIn('slow');
  });

  $('#modal-close').click(function() {
    $('#contact-modal').fadeOut('slow');
  })  

  // jQ Ready Test
  // $(function() {
  //   alert('OK!');
  // });

});
