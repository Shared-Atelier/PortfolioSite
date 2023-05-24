@extends('site04.layouts.app')

@section('content')

<div class="lesson_discription">
    <span class="box-title">漢字の練習</span>
    <img src="{{ asset('/img/site04/kanji_lesson.png') }}" alt="">
    <p>ここでは、漢字を部首/部分別に練習します。漢字を美しく書く3つのコツ「基本の点画をマスターする」「部首・部分の書き方をマスターする」「外枠イメージと点画のバランスをつかむ」に注意しながら、ゆっくり書いてみましょう。</p>
</div>

<div class="lesson_contents">
    <h1 class="rei">部首・部分別 美しく書くコツ</h1>
    <div class="lesson_contents_panel">
      <a href="{{ route('kanji_lesson_contents','#kanji_ninben') }}"><img src="{{ asset('/img/site04/にんべん.png') }}" alt=""></a>  
      <a href="{{ route('kanji_lesson_contents','#kanji_gyoninben') }}"><img src="{{ asset('/img/site04/ぎょうにんべん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_tehen') }}"><img src="{{ asset('/img/site04/てへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_sanzui') }}"><img src="{{ asset('/img/site04/さんずい.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_rissinben') }}"><img src="{{ asset('/img/site04/りっしんべん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_kozatohen') }}"><img src="{{ asset('/img/site04/こざとへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_tutihen') }}"><img src="{{ asset('/img/site04/つちへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_onnahen') }}"><img src="{{ asset('/img/site04/おんなへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_yamahen') }}"><img src="{{ asset('/img/site04/やまへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_kutihen') }}"><img src="{{ asset('/img/site04/くちへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_hihen') }}"><img src="{{ asset('/img/site04/ひへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_mehen') }}"><img src="{{ asset('/img/site04/めへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_kihen') }}"><img src="{{ asset('/img/site04/きへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_nogihen') }}"><img src="{{ asset('/img/site04/のぎへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_ouhen') }}"><img src="{{ asset('/img/site04/おうへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_simesuhen') }}"><img src="{{ asset('/img/site04/しめすへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_koromohen') }}"><img src="{{ asset('/img/site04/ころもへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_itohen') }}"><img src="{{ asset('/img/site04/いとへん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_husidukuri') }}"><img src="{{ asset('/img/site04/ふしづくり.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_oozato') }}"><img src="{{ asset('/img/site04/おおざと.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_gonben') }}"><img src="{{ asset('/img/site04/ごんべん.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_rittou') }}"><img src="{{ asset('/img/site04/りっとう.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_akubi') }}"><img src="{{ asset('/img/site04/あくび.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_onodukuri') }}"><img src="{{ asset('/img/site04/おのづくり.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_nabebuta') }}"><img src="{{ asset('/img/site04/なべぶた.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_takekanmuri') }}"><img src="{{ asset('/img/site04/たけかんむり.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_kokoro') }}"><img src="{{ asset('/img/site04/こころ.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_yamakanmuri') }}"><img src="{{ asset('/img/site04/やまかんむり.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_amekanmuri') }}"><img src="{{ asset('/img/site04/あめかんむり.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_rekka') }}"><img src="{{ asset('/img/site04/れっか.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_sara') }}"><img src="{{ asset('/img/site04/さら.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_gandare') }}"><img src="{{ asset('/img/site04/がんだれ.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_sikabane') }}"><img src="{{ asset('/img/site04/しかばね.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_koromo') }}"><img src="{{ asset('/img/site04/ころも.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_madare') }}"><img src="{{ asset('/img/site04/まだれ.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_yamaidare') }}"><img src="{{ asset('/img/site04/やまいだれ.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_kunigamae') }}"><img src="{{ asset('/img/site04/くにがまえ.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_mongamae') }}"><img src="{{ asset('/img/site04/もんがまえ.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_ennyou') }}"><img src="{{ asset('/img/site04/えんにょう.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_gyougamae') }}"><img src="{{ asset('/img/site04/ぎょうがまえ.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_sinnyou') }}"><img src="{{ asset('/img/site04/しんにょう.png') }}" alt=""></a>
      <a href="{{ route('kanji_lesson_contents','#kanji_sounyou') }}"><img src="{{ asset('/img/site04/そうにょう.png') }}" alt=""></a>
    </div>
</div>

@endsection