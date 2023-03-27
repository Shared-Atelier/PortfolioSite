// import './bootstrap';

// Works_carousel

// const swiper = new Swiper('.swiper-works', { //方言
let mySwiper = new Swiper ('.swiper',{
  speed: 500,
  effect: 'slide',
  slidesPerView: 'auto',
  spaceBetween: 20,
  grabCursor: 'true',
  scrollbar: {                     //スクロールバー
    el: '.swiper-scrollbar',
    dragable: 'true',                //ドラッグ可
  },
  navigation: {                     //ナビゲーション(矢印)
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});



  // jQ Ready Test
  // $(function() {
  //   alert('OK!');
  // });


