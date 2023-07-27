@extends('site03.layouts.app')

@section('content')

<div class="hero-text">
   <h1>FUJIK TAKAG</h1>
   <p>FUJIK TAKAG is an Art Director/Designer based in Aichi.<br>We seeks and creates a more prominent design,<br>together with them proficient partners.</p>
</div>
<div class="content">
   <div class="item1">
      <a href="{{ route('index00') }}" target="blank"><img src="/img/site03/site00.jpg" alt="">
      <div class="mask">
         <div class="caption">PORTFOLIOSITE</div>
      </div></a>
   </div>
   <div class="item2">
      <a href="{{ route('index01') }}" target="blank"><img src="/img/site03/site01.jpg" alt="">
      <div class="mask">
         <div class="caption">CATHOLIC NAKAHIRA CHURCH</div>
      </div></a>
   </div>
   <div class="item3">
      <a href="{{ route('index02') }}" target="blank"><img src="/img/site03/03_site02.png" alt="">
      <div class="mask">
         <div class="caption">PORTFOLIOSITE</div>
      </div></a>
   </div>
   <div class="item4">
      <a href="{{ route('index03') }}" target="blank"><img src="/img/site03/site03.jpg" alt="">
      <div class="mask">
         <div class="caption">PORTFOLIOSITE</div>
      </div></a>
   </div>
   <div class="item5">
      <a href="{{ route('index04') }}" target="blank"><img src="/img/site03/site04.jpg" alt="">
      <div class="mask">
         <div class="caption">美文字練習帳</div>
      </div></a>
   </div>
</div>




@endsection