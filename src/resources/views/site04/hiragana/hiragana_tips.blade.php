@extends('site04.layouts.app')

@section('content')

<div class="hiragana_tips_discription">
    <span class="box-title">ひらがなの元になった漢字の例</span>
    <img src="{{ asset('/img/site04/hiragana_tips.png') }}" alt="">
    <p>ひらがなは、漢字を元に作られた日本特有の文字です。<br>ひらがなは、文章全体の約70%を占めると言われています。そのために、ひらがなが美しく書けると、文章全体が整って見えます。<br>現在、一般によく使われているひらがなは、46文字です。いくつかのコツをつかんで練習することが、このわずか46文字のひらがなを美しく書く近道になります。</p>
</div>

<div class="hiragana_tips_contents">
    <h1>ひらがなを美しく書く3つのコツ</h1>
    <div class="hiragana_tips_contents_panel">
        <img src="{{ asset('/img/site04/コツ1.png') }}" alt="">
        <img src="{{ asset('/img/site04/コツ2.png') }}" alt="">
        <img src="{{ asset('/img/site04/コツ3.png') }}" alt="">
        <img src="{{ asset('/img/site04/ワンポイントレッスン1.png') }}" alt="">
        <img src="{{ asset('/img/site04/ワンポイントレッスン2.png') }}" alt="">
    </div>
</div>

@endsection