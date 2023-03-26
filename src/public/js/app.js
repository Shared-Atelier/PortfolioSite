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


// Contact-form_modal

$(function(){

  $('#contact-show').click(function() {

    //body内の最後に<div id="modal-bg"></div>を挿入
    $("body").append('<div id ="modal-bg"></div>'); 
    
    //画面中央を計算する関数を実行
    modalResize(); 
    
    //モーダルウィンドウを表示
    $('#contact-modal').fadeIn('slow'); 

    //画面のどこかをクリックしたらモーダルを閉じる
    $("#modal-bg, #modal-close").click(function(){ 
      $("#contact-modal,#modal-bg").fadeOut("slow",function(){
    
          //挿入した<div id="modal-bg"></div>を削除
          $('#modal-bg').remove(); 
     });
    });

     //画面の左上からmodal-mainの横幅・高さを引き、その値を2で割ると画面中央の位置が計算できます
     $(window).resize(modalResize);
      function modalResize(){
 
          var w = $(window).width();
          var h = $(window).height();
 
          var cw = $("#modal").outerWidth();
          var ch = $("#modal").outerHeight();

           //取得した値をcssに追加する
           $(".modal").css({
            "left": ((w - cw)/2) + "px",
            "top": ((h - ch)/5) + "px"
      });
    }
  });

  // $('#modal-close').click(function() {
  //   $('#contact-modal').fadeOut('slow');
  // })  

  // jQ Ready Test
  // $(function() {
  //   alert('OK!');
  // });

});
