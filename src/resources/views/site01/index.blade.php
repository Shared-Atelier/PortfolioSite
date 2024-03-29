@extends('site01.layouts.app')

@section('content')

<div class="hero_container">
   <video src="{{ asset('/img/site01/Site01_hero.mp4') }}" class="hero_mov" autoplay loop muted playsinline></video>
   <img src="{{ asset('/img/site01/hero_logo.png') }}" alt="" class="hero_logo">
</div>

<div class="container_howto fadeUpTrigger">
   <div class="howto_discription">
      <h1>初めての教会</h1>
      <p>主イエス・キリストの教えに興味がある。<br>教会に行ったことはないけれども、一度行ってみたい。<br>知り合いがいなくて行きづらい。そのような方へのご案内です。<br><br>People who are interested in the teachings of the Lord Jesus Christ. People who have never been to church but would like to try it. People who have difficulty going to church because they don't know anyone. This is a guide for such people.</p>
   </div>
   <div class="howto_pic">
      <div class="content_pic">
         <a href="{{ route('howto') }}"><img src="{{ asset('/img/site01/howto.jpg') }}" alt="">
         <div class="mask">
            <div class="caption">詳しく見る</div>
         </div></a>
      </div>
   </div>
</div>

<div class="container_profile fadeUpTrigger">
   <div class="profile_discription">
      <h1>プロフィールと歴史</h1>
      <p>「カトリック中平教会」は、日本26聖人殉教者記念教会として1979年に創設されました。京都から長崎までの苦難の道のりを歩み殉職された「日本二十六聖人殉教者」に捧げられた教会です。<br><br>"Nakadaira Catholic Church" was founded in 1979 as the Church of the 26 Martyrs of Japan.The church is dedicated to the "26 Martyrs of Japan" who were martyred on the arduous journey from Kyoto to Nagasaki.</p>
   </div>
   <div class="profile_pic">
      <div class="content_pic">
         <a href="{{ route('profile') }}"><img src="{{ asset('/img/site01/profile.jpg') }}" alt="">
         <div class="mask">
            <div class="caption">詳しく見る</div>
         </div></a>
      </div>
   </div>
</div>

<div class="container_misa fadeUpTrigger">
   <div class="misa_discription">
      <h1>ミサのご案内</h1>
      <p>ミサの時間・アクセス<br>主日のミサ：日曜日の午前９時半<br>初金ミサ：第一金曜日の午前９時半<br>〒468-0014 名古屋市天白区2-1705<br><br>Mass times and access<br>Sunday Mass: 9:30 a.m. Sunday<br>First Friday Mass: 9:30 a.m.<br>〒468-0014 2-1705 Tenpaku-ku, Nagoya City</p>
   </div>
   <div class="misa_pic">
      <div class="content_pic">
         <a href="{{ route('misa') }}"><img src="{{ asset('/img/site01/misa.jpg') }}" alt="" class="content_pic">
         <div class="mask">
            <div class="caption">詳しく見る</div>
         </div></a>
      </div>
   </div>
</div>

<div class="container_qna fadeUpTrigger">
   <div class="qna1">
      <a href="{{ route('QnA') }}">
         <img src="{{ asset('/img/site01/stendglass.jpeg') }}" alt="">
         <h1>Q & A</h1>
      </a>
   </div>
   <div class="qna2">
      <a href="{{ route('choir') }}">
         <img src="{{ asset('/img/site01/choir.jpeg') }}" alt="">
         <h1>主日のお知らせ</h1>
      </a>
   </div>
   <div class="qna3">
      <a href="{{ route('saishi') }}">
         <img src="{{ asset('/img/site01/saishi.jpeg') }}" alt="">
         <h1>祭司紹介</h1>
      </a>
   </div>
</div>




@endsection