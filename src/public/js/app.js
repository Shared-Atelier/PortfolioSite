// import './bootstrap';

// Works_carousel

// const swiper = new Swiper('.swiper-works', { //方言
let mySwiper = new Swiper ('.swiper-works',{
  loop: true,                       //ループ再生
  speed: 1000,
  effect: 'slide',
  slidesPerView: 'auto',
  spaceBetween: 20,
  pagination: {                     //ページネーション(プログレスバー)
    el: '.swiper-pagination',
    type: 'progressbar',
    clickable: true,                //クリック可
  },
  navigation: {                     //ナビゲーション(矢印)
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
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
