@extends('layouts.app')

@section('content')

<div class="container">
  <div class="carousel">
    <input type="radio" id="carousel-1" name="carousel[]" checked>
    <input type="radio" id="carousel-2" name="carousel[]">
    <input type="radio" id="carousel-3" name="carousel[]">
    <ul class="carousel__items">
      <li class="carousel__item"><img src="{{ asset('img/top_mv_1.png') }}" alt=""></li>
      <li class="carousel__item"><img src="{{ asset('img/top_mv_2.png') }}" alt=""></li>
      <li class="carousel__item"><img src="{{ asset('img/top_mv_3.png') }}" alt=""></li>
    </ul>
     <div class="carousel__prev">
      <label for="carousel-1"></label>
      <label for="carousel-2"></label>
      <label for="carousel-3"></label>
     </div>
     <div class="carousel__next">
       <label for="carousel-1"></label>
       <label for="carousel-2"></label>
       <label for="carousel-3"></label>
     </div>
     <div class="carousel__nav">
       <label for="carousel-1"></label>
       <label for="carousel-2"></label>
       <label for="carousel-3"></label>
     </div>
   </div>
 </div>

 <div class="container-about" id="about">
  <h3>About</h3>
  <div class="wrapper-about">
    <p>About our skills.<br><br>
    Docker<br>
    Vagrant<br>
    VirtualBox<br>
    Apache<br>
    nginx<br>
    GitHub<br>
    SourceTree<br>
    FTP<br>
    HTML<br>
    CSS/Sass<br>
    JavaScript<br>
    PHP<br>
    Laravel<br>
    MySQL<br>
    Vim<br>
    Photoshop<br>
    Illustrator<br>
    Microsoft 365<br>
    VBA for Excel</p>
  </div>
 </div>

 <div class="container-works" id="works">
  <h3>Works</h3>
  <div id="carousel3d">
  <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000">
    <slide :index="0">
      <img src="{{ asset('img/top_works_1.png') }}" alt="">
    </slide>
    <slide :index="1">
        <img src="{{ asset('img/top_works_2.png') }}" alt="">
    </slide>
    <slide :index="2">
      <img src="{{ asset('img/top_works_3.png') }}" alt="">
    </slide>
    <slide :index="3">
      <img src="{{ asset('img/top_works_4.png') }}" alt="">
    </slide>
  </carousel-3d>
  </div>
 </div>

 <div class="container-contact" id="contact">
  <h3>Contact</h3>
  <button id='contact-show'>お問い合わせはこちら</button>
  <div class='contact-form-wrapper' id='contact-modal'>
    <div class='modal'>
      <div id='contact-form'>
        <button id='modal-close'>×</button>
        <h2>Contactフォーム</h2>
        <form action="#">
          <input class='form-control' type="email" placeholder='メールアドレス'>
          <input class='form-control' type="text" placeholder='お問合せ内容'>
          <div id='submit-btn'>送信</div>
        </form>
      </div>
    </div>

  </div>
 </div>
 

@endsection