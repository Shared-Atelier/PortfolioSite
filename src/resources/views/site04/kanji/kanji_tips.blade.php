@extends('site04.layouts.app')

@section('content')

<div class="kanji_tips_discription">
    <span class="box-title">基本の点画をマスターする</span>
    <img src="{{ asset('/img/site04/kanji_tips.png') }}" alt="">
    <p>ひらがなやカタカナに比べて、漢字を美しく書くのは難しいように思われますが、漢字にもいくつかのコツをつかんで練習することで、効率よく上達することができます。<br>漢字の楷書体は、いくつかの点画で構成されています。そのうち例のような代表的な基本の点画をマスターすることが、きれいな漢字を書くための重要なポイントになります。</p>
</div>

<div class="kanji_tips_contents">
    <h1>ひらがなを美しく書く3つのコツ</h1>
    <div class="kanji_tips_contents_panel">
        <img src="{{ asset('/img/site04/コツ6.png') }}" alt="">
        <img src="{{ asset('/img/site04/コツ7.png') }}" alt="">
        <img src="{{ asset('/img/site04/コツ8.png') }}" alt="">
        <img src="{{ asset('/img/site04/ワンポイントレッスン1.png') }}" alt="">
    </div>
</div>

@endsection