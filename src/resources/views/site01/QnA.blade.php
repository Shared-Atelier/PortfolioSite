@extends('site01.layouts.app')

@section('content')

<div class="hero">
    <img src="{{ asset('/img/site01/stendglass2.jpeg') }}" alt="" class="qna_hero">
</div>

<div class="headline">
    <h1>Q&A</h1>
    <p>カトリック教会に初めて訪れてみようとされる方が感じられる不安や疑問点、よく寄せられるご質問について、簡単にご説明いたします。<br>ここに書かれていないことでご質問なさりたい点や、さらに詳しくお聞きになりたいことがありましたら、「お問い合わせ」ページにある連絡先まで、お気軽にご質問をお寄せください。</p>
</div>

<div class="qna_text">
    <h2>教会ご訪問に関して</h2>
    <div qna_text>
        <div class="q">
            <img src="{{ asset('/img/site01/Question.png') }}" alt="" class="q">
            <p>お休みの日はありますか？</p>    
        </div>
        <div class="a">
            <img src="{{ asset('/img/site01/Answer.png') }}" alt="" class="a">
            <p>教会の聖堂は一年中毎日開いています。神父が不在のときも、担当の係が扉の開け閉めをしています。聖堂に入れる時間は、朝7時から夕方6時までです。</p>    
        </div>

    </div>
</div>
@endsection