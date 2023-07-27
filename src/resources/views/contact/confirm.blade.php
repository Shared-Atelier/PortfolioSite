@extends('layouts.app')

@section('content')

<div class="confirm" style="width: 50%; margin: 100px auto 300px auto;">

    <form method="POST" action="{{ route('contact.send') }}">
        @csrf

        <div class="form-item" style="padding:30px;">
            <label>メールアドレス：</label>
            {{ $inputs['email'] }}
            <input name="email" value="{{ $inputs['email'] }}" type="hidden">
        </div>

        <div class="form-item" style="padding:30px;">
            <label>タイトル：</label>
            {{ $inputs['title'] }}
            <input name="title" value="{{ $inputs['title'] }}" type="hidden">
        </div>

        <div class="form-item" style="padding:30px;">
            <label>お問い合わせ内容：</label>
            {!! nl2br(e($inputs['body'])) !!}
            <input name="body" value="{{ $inputs['body'] }}" type="hidden">
        </div>

        <div class="form-item" style="padding:30px; text-align:center;">
            <button type="submit" name="action" value="back" style="margin: 50px auto 0 auto; width: 150px; font-size: 16px; text-align: center; padding: 10px; background: gray; color: white; line-height: 1rem; border: none; border-radius: 20px;">
                入力内容修正
            </button>
        
            <button type="submit" name="action" value="submit" style="margin: 50px auto 0 auto; width: 150px; font-size: 16px; text-align: center; padding: 10px; background: red; color: white; line-height: 1rem; border: none; border-radius: 20px;">
                送信する
            </button>
        </div>
    </form>

</div>

@endsection