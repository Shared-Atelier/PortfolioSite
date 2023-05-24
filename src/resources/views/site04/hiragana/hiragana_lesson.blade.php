@extends('site04.layouts.app')

@section('content')

<div class="lesson_discription">
    <span class="box-title">ひらがなの練習</span>
    <img src="{{ asset('/img/site04/hiragana_lesson.png') }}" alt="">
    <p>ここでは、ひらがなを1文字ずつ練習します。ひらがなを美しく書く3つのコツ「曲線を美しく」「つながりを意識する」「外枠の形をイメージする」に注意しながら、ゆっくり書いてみましょう。</p>
</div>

<div class="lesson_contents">
    <h1>ひらがな別 美しく書くコツ</h1>
    <div class="lesson_contents_panel">
      <a href="{{ route('hiragana_lesson_contents','#hiragana_a') }}"><img src="{{ asset('/img/site04/あ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_i') }}"><img src="{{ asset('/img/site04/い.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_u') }}"><img src="{{ asset('/img/site04/う.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_e') }}"><img src="{{ asset('/img/site04/え.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_o') }}"><img src="{{ asset('/img/site04/お.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ka') }}"><img src="{{ asset('/img/site04/か.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ki') }}"><img src="{{ asset('/img/site04/き.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ku') }}"><img src="{{ asset('/img/site04/く.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ke') }}"><img src="{{ asset('/img/site04/け.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ko') }}"><img src="{{ asset('/img/site04/こ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_sa') }}"><img src="{{ asset('/img/site04/さ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_si') }}"><img src="{{ asset('/img/site04/し.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_su') }}"><img src="{{ asset('/img/site04/す.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_se') }}"><img src="{{ asset('/img/site04/せ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_so') }}"><img src="{{ asset('/img/site04/そ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ta') }}"><img src="{{ asset('/img/site04/た.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ti') }}"><img src="{{ asset('/img/site04/ち.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_tu') }}"><img src="{{ asset('/img/site04/つ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_te') }}"><img src="{{ asset('/img/site04/て.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_to') }}"><img src="{{ asset('/img/site04/と.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_na') }}"><img src="{{ asset('/img/site04/な.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ni') }}"><img src="{{ asset('/img/site04/に.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_nu') }}"><img src="{{ asset('/img/site04/ぬ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ne') }}"><img src="{{ asset('/img/site04/ね.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_no') }}"><img src="{{ asset('/img/site04/の.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ha') }}"><img src="{{ asset('/img/site04/は.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_hi') }}"><img src="{{ asset('/img/site04/ひ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_hu') }}"><img src="{{ asset('/img/site04/ふ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_he') }}"><img src="{{ asset('/img/site04/へ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ho') }}"><img src="{{ asset('/img/site04/ほ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ma') }}"><img src="{{ asset('/img/site04/ま.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_mi') }}"><img src="{{ asset('/img/site04/み.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_mu') }}"><img src="{{ asset('/img/site04/む.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_me') }}"><img src="{{ asset('/img/site04/め.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_mo') }}"><img src="{{ asset('/img/site04/も.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ya') }}"><img src="{{ asset('/img/site04/や.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_yu') }}"><img src="{{ asset('/img/site04/ゆ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_yo') }}"><img src="{{ asset('/img/site04/よ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ra') }}"><img src="{{ asset('/img/site04/ら.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ri') }}"><img src="{{ asset('/img/site04/り.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ru') }}"><img src="{{ asset('/img/site04/る.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_re') }}"><img src="{{ asset('/img/site04/れ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_ro') }}"><img src="{{ asset('/img/site04/ろ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_wa') }}"><img src="{{ asset('/img/site04/わ.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_wo') }}"><img src="{{ asset('/img/site04/を.png') }}" alt=""></a>
      <a href="{{ route('hiragana_lesson_contents','#hiragana_n') }}"><img src="{{ asset('/img/site04/ん.png') }}" alt=""></a>
    </div>
</div>

@endsection