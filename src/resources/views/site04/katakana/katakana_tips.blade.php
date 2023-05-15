@extends('site04.layouts.app')

@section('content')

<div class="tips_discription">
    <span class="box-title">カタカナの元になった漢字の例</span>
    <img src="{{ asset('/img/site04/katakana_tips.png') }}" alt="">
    <p>カタカナも、ひらがな同様に、漢字を元に作られた日本特有の文字です。<br>文章を書く上で、カタカナを使うことも多いですね。カタカナはひらがなに比べて形が単純なので、コツさえつかんで練習すれば、美しい文字を書くことができます。</p>
</div>

<div class="tips_contents">
    <h1>カタカナを美しく書く3つのコツ</h1>
    <div class="tips_contents_panel">
        <img src="{{ asset('/img/site04/コツ4.png') }}" alt="">
        <img src="{{ asset('/img/site04/コツ5.png') }}" alt="">
        <img src="{{ asset('/img/site04/コツ3.png') }}" alt="">
        <img src="{{ asset('/img/site04/ワンポイントレッスン1.png') }}" alt="">
    </div>
</div>

@endsection