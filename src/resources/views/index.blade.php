@extends('layouts.app')

@section('content')

 <div class="container-top">
  <img src="{{ asset('/img/top_mv_1.png') }}" alt="">
 </div>

 <div class="scrolldown"><span>Scroll</span></div>

 <div class="container-about" id="about">
  <h3>About</h3>
  <div class="wrapper-about">
    <p>ー About our skills. ー<br>
    <br>
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
    jQuery<br>
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
  <div class='swiper-wrap'>
    <!-- swiper start -->
    <div class='swiper'>  
      <div class='swiper-wrapper'>
        <div class='swiper-slide'><img src="{{ asset('/img/top_works_1.jpg') }}" alt=""></div>
        <div class='swiper-slide'><img src="{{ asset('/img/top_works_2.jpg') }}" alt=""></div>
        <div class='swiper-slide'><img src="{{ asset('/img/top_works_3.jpg') }}" alt=""></div>
        <div class='swiper-slide'><img src="{{ asset('/img/top_works_4.jpg') }}" alt=""></div>
        <div class='swiper-slide'><img src="{{ asset('/img/top_works_5.jpg') }}" alt=""></div>
        <div class='swiper-slide'><img src="{{ asset('/img/top_works_6.jpg') }}" alt=""></div>
      </div>     
    </div>
    <img class='swiper-scrollbar_no_1' src="{{ asset('/img/scrollbar_no_1.png') }}" alt="">
    <img class='swiper-scrollbar_no_6' src="{{ asset('/img/scrollbar_no_6.png') }}" alt="">
    <div class='swiper-scrollbar swiper-scrollbar-horizontal'></div>
    <div class='swiper-button-prev'></div>
    <div class='swiper-button-next'></div>
    <!-- swiper end -->
  </div>
 </div>

 <div class="container-contact" id="contact">
  <h3>Contact</h3>
  <button onclick="location.href='{{ route('contact') }}'">お問い合わせはこちら</button>
 </div> 

@endsection