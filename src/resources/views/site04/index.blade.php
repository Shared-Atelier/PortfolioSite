@extends('site04.layouts.app')

@section('content')

<div class="hero_container">
  <img src="{{ asset('/img/Site04/hero.png') }}" alt="" class="hero">
  <img src="{{ asset('/img/site04/hero_sub.png') }}" alt="" class="hero_sub">
  <div class="circle"></div>
</div>

<div class="index_menu">
  <ul class="tab">
    <li><a href="#hiragana">ひらがな</a></li>
    <li><a href="#katakana">カタカナ</a></li>
    <li><a href="#kanji">漢字</a></li>
  </ul>

  <div id="hiragana" class="area">
    <div class="index_hiragana">
      
    </div>
    <h1>コツ1 コツ2 コツ3 <br>ワンポイントレッスン1 <br>ワンポイントレッスン2 <br>曲線を美しく書く <br>つながりを意識して書く <br>文字の外枠の形をイメージして書く</h1>   
  <!--/area--></div>
  <div id="katakana" class="area">
    <div class="index_katakana">
      <img src="{{ asset('/img/site04/ア.png') }}" alt="">
      <img src="{{ asset('/img/site04/イ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ウ.png') }}" alt="">
      <img src="{{ asset('/img/site04/エ.png') }}" alt="">
      <img src="{{ asset('/img/site04/オ.png') }}" alt="">
      <img src="{{ asset('/img/site04/カ.png') }}" alt="">
      <img src="{{ asset('/img/site04/キ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ク.png') }}" alt="">
      <img src="{{ asset('/img/site04/ケ.png') }}" alt="">
      <img src="{{ asset('/img/site04/コ.png') }}" alt="">
      <img src="{{ asset('/img/site04/サ.png') }}" alt="">
      <img src="{{ asset('/img/site04/シ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ス.png') }}" alt="">
      <img src="{{ asset('/img/site04/セ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ソ.png') }}" alt="">
      <img src="{{ asset('/img/site04/タ.png') }}" alt="">
      <img src="{{ asset('/img/site04/チ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ツ.png') }}" alt="">
      <img src="{{ asset('/img/site04/テ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ト.png') }}" alt="">
      <img src="{{ asset('/img/site04/ナ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ニ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ヌ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ネ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ノ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ハ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ヒ.png') }}" alt="">
      <img src="{{ asset('/img/site04/フ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ヘ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ホ.png') }}" alt="">
      <img src="{{ asset('/img/site04/マ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ミ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ム.png') }}" alt="">
      <img src="{{ asset('/img/site04/メ.png') }}" alt="">
      <img src="{{ asset('/img/site04/モ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ヤ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ユ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ヨ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ラ.png') }}" alt="">
      <img src="{{ asset('/img/site04/リ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ル.png') }}" alt="">
      <img src="{{ asset('/img/site04/レ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ロ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ワ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ヲ.png') }}" alt="">
      <img src="{{ asset('/img/site04/ン.png') }}" alt="">    
    </div>
  <!--/area--></div>
  <div id="kanji" class="area">
    <div class="index_kanji">
      <img src="{{ asset('/img/site04/ぎょうにんべん.png') }}" alt="">
      <img src="{{ asset('/img/site04/てへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/にんべん.png') }}" alt="">
      <img src="{{ asset('/img/site04/さんずい.png') }}" alt="">
      <img src="{{ asset('/img/site04/りっしんべん.png') }}" alt="">
      <img src="{{ asset('/img/site04/こざとへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/つちへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/おんなへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/やまへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/くちへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/ひへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/めへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/きへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/のぎへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/おうへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/しめすへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/ころもへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/いとへん.png') }}" alt="">
      <img src="{{ asset('/img/site04/ふしづくり.png') }}" alt="">
      <img src="{{ asset('/img/site04/おおざと.png') }}" alt="">
      <img src="{{ asset('/img/site04/ごんべん.png') }}" alt="">
      <img src="{{ asset('/img/site04/りっとう.png') }}" alt="">
      <img src="{{ asset('/img/site04/あくび.png') }}" alt="">
      <img src="{{ asset('/img/site04/おのづくり.png') }}" alt="">
      <img src="{{ asset('/img/site04/なべぶた.png') }}" alt="">
      <img src="{{ asset('/img/site04/たけかんむり.png') }}" alt="">
      <img src="{{ asset('/img/site04/こころ.png') }}" alt="">
      <img src="{{ asset('/img/site04/やまかんむり.png') }}" alt="">
      <img src="{{ asset('/img/site04/あめかんむり.png') }}" alt="">
      <img src="{{ asset('/img/site04/れっか.png') }}" alt="">
      <img src="{{ asset('/img/site04/さら.png') }}" alt="">
      <img src="{{ asset('/img/site04/がんだれ.png') }}" alt="">
      <img src="{{ asset('/img/site04/しかばね.png') }}" alt="">
      <img src="{{ asset('/img/site04/ころも.png') }}" alt="">
      <img src="{{ asset('/img/site04/まだれ.png') }}" alt="">
      <img src="{{ asset('/img/site04/やまいだれ.png') }}" alt="">
      <img src="{{ asset('/img/site04/くにがまえ.png') }}" alt="">
      <img src="{{ asset('/img/site04/もんがまえ.png') }}" alt="">
      <img src="{{ asset('/img/site04/えんにょう.png') }}" alt="">
      <img src="{{ asset('/img/site04/ぎょうがまえ.png') }}" alt="">
      <img src="{{ asset('/img/site04/しんにょう.png') }}" alt="">
      <img src="{{ asset('/img/site04/そうにょう.png') }}" alt="">
    </div>
  </div>

@endsection