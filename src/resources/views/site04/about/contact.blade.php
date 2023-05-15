@extends('site04.layouts.app')

@section('content')

<div class="tips_discription">
    <span class="box-title">お問い合わせ</span>
    <!-- <img src="{{ asset('/img/site04/kanji_tips.png') }}" alt=""> -->
    <form action="#">
        <input type="text" placeholder="お名前" name="name" required>
        <input type="text" placeholder="メールアドレス" name="email" required>
        <textarea placeholder="お問い合わせ内容" name="message" cols="30" rows="10"></textarea>
        <input type="submit" value="送　信">
    </form>
</div>

@endsection