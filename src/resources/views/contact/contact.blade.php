@extends('layouts.app')

@section('content')

<div class='contact-form-wrapper'>
    <h2>Contact</h2>
    <form action="#" method="post">
        <div class="form">
            <div class="form-item">
                <p class="label">お名前</p>
                <input class='input' type="text" placeholder='例)吉沢 亮'>
            </div>
            <div class="form-item">
                <p class="label">メールアドレス</p>
                <input class="input" type="email" placeholder="例)example@gmail.com">
            </div>
            <div class="form-item">
                <p class="label">お問い合わせ内容</p>
                <textarea class=textarea name="textarea" cols="30" rows="10"></textarea>
            </div>
            <div class="form-item">
                <input type="submit" class="submit-btn">    
            </div>
        </div>
    </form>
</div>

@endsection