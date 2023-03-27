@extends('layouts.app')

@section('content')

<div class='contact-form-wrapper'>
    <h2>Contact</h2>
    <form action="#" method="post">
        <div class="form">
            <div class="form-item">
                <p class='label'>FullName</p>
                <input class='input' type="text" placeholder='FullName'>
            </div>
            <div class="form-item">
                <p class="label">Email</p>
                <input class="input" type="email" placeholder="Email">
            </div>
            <div class="form-item">
                <p class="label">Inquery</p>
                <textarea class=textarea name="textarea" cols="30" rows="10"></textarea>
            </div>
            <div class="form-item">
                <input type="submit" class="submit-btn" value="Send">    
            </div>
        </div>
    </form>
</div>

@endsection