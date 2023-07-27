@extends('site04.layouts.app')

@section('content')

<div class="hero_container">
  <img src="{{ asset('/img/site04/hero.png') }}" alt="" class="hero">
  <img src="{{ asset('/img/site04/hero_.png') }}" alt="" class="hero_sub">
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
  <!--/area--></div>
  <div id="katakana" class="area">
    <div class="index_katakana">
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
  <!--/area--></div>
  <div id="kanji" class="area">
    <div class="index_kanji">
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