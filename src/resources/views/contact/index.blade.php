@extends('layouts.app')
 
@section('content')

<div class='contact-form-wrapper'>
    <h2>Contact</h2>
    <form method="POST" action="{{ route('contact.confirm') }}">
        @csrf
        <div class="form">
            <div class="form-item">
                <p class="label">メールアドレス</p>
                <input class="input" name="email" value="{{ old('email') }}" type="text">
                @if ($errors->has('email'))
                    <p class="error-message">{{ $errors->first('email') }}</p>
                @endif
            </div>
        
            <div class="form-item">            
                <p class="label">タイトル</p>
                <input class="input" name="title" value="{{ old('title') }}" type="text">
                @if ($errors->has('title'))
                    <p class="error-message">{{ $errors->first('title') }}</p>
                @endif
            </div>

            <div class="form-item">
                <p class="label">お問い合わせ内容</p>
                <textarea class="textarea" name="body" cols="30" rows="10">{{ old('body') }}</textarea>
                @if ($errors->has('body'))
                    <p class="error-message">{{ $errors->first('body') }}</p>
                @endif
            </div>

            <div class="form-item">
                <button type="submit" class="submit-btn">
                    入力内容確認
                </button>
            </div>
        </div>
    </form>
</div>
@endsection