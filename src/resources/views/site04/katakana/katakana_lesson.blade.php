@extends('site04.layouts.app')

@section('content')

<div class="lesson_discription">
    <span class="box-title">カタカナの練習</span>
    <img src="{{ asset('/img/site04/katakana_lesson.png') }}" alt="">
    <p>ここでは、カタカナを1文字ずつ練習します。カタカナを美しく書く3つのコツ「直線の長さや向きをバランスよく」「払い、はね、止めを意識する」「外枠の形をイメージする」に注意しながら、ゆっくり書いてみましょう。</p>
</div>

<div class="lesson_contents">
    <h1>カタカナ別 美しく書くコツ</h1>
    <div class="lesson_contents_panel">
      <a href="{{ route('katakana_lesson_contents','#katakana_a') }}"><img src="{{ asset('/img/site04/ア.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_i') }}"><img src="{{ asset('/img/site04/イ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_u') }}"><img src="{{ asset('/img/site04/ウ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_e') }}"><img src="{{ asset('/img/site04/エ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_o') }}"><img src="{{ asset('/img/site04/オ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ka') }}"><img src="{{ asset('/img/site04/カ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ki') }}"><img src="{{ asset('/img/site04/キ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ku') }}"><img src="{{ asset('/img/site04/ク.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ke') }}"><img src="{{ asset('/img/site04/ケ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ko') }}"><img src="{{ asset('/img/site04/コ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_sa') }}"><img src="{{ asset('/img/site04/サ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_si') }}"><img src="{{ asset('/img/site04/シ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_su') }}"><img src="{{ asset('/img/site04/ス.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_se') }}"><img src="{{ asset('/img/site04/セ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_so') }}"><img src="{{ asset('/img/site04/ソ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ta') }}"><img src="{{ asset('/img/site04/タ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ti') }}"><img src="{{ asset('/img/site04/チ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_tu') }}"><img src="{{ asset('/img/site04/ツ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_te') }}"><img src="{{ asset('/img/site04/テ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_to') }}"><img src="{{ asset('/img/site04/ト.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_na') }}"><img src="{{ asset('/img/site04/ナ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ni') }}"><img src="{{ asset('/img/site04/ニ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_nu') }}"><img src="{{ asset('/img/site04/ヌ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ne') }}"><img src="{{ asset('/img/site04/ネ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_no') }}"><img src="{{ asset('/img/site04/ノ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ha') }}"><img src="{{ asset('/img/site04/ハ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_hi') }}"><img src="{{ asset('/img/site04/ヒ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_hu') }}"><img src="{{ asset('/img/site04/フ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_he') }}"><img src="{{ asset('/img/site04/ヘ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ho') }}"><img src="{{ asset('/img/site04/ホ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ma') }}"><img src="{{ asset('/img/site04/マ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_mi') }}"><img src="{{ asset('/img/site04/ミ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_mu') }}"><img src="{{ asset('/img/site04/ム.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_me') }}"><img src="{{ asset('/img/site04/メ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_mo') }}"><img src="{{ asset('/img/site04/モ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ya') }}"><img src="{{ asset('/img/site04/ヤ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_yu') }}"><img src="{{ asset('/img/site04/ユ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_yo') }}"><img src="{{ asset('/img/site04/ヨ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ra') }}"><img src="{{ asset('/img/site04/ラ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ri') }}"><img src="{{ asset('/img/site04/リ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ru') }}"><img src="{{ asset('/img/site04/ル.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_re') }}"><img src="{{ asset('/img/site04/レ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_ro') }}"><img src="{{ asset('/img/site04/ロ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_wa') }}"><img src="{{ asset('/img/site04/ワ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_wo') }}"><img src="{{ asset('/img/site04/ヲ.png') }}" alt=""></a>
      <a href="{{ route('katakana_lesson_contents','#katakana_n') }}"><img src="{{ asset('/img/site04/ン.png') }}" alt=""></a>
    </div>
</div>

@endsection