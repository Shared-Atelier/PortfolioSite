@extends('site05.layouts.app')

@section('content')

<div class="main_container">
  <div class="title">
      <h1>banner</h1>
  </div>

  <div class="content">
      <div class="content__pic1">
          <img src="{{ asset('/img/site05/bnr1.jpg') }}" alt="">
          <div class="mask">
              <div class="caption">
                size : 500x500px<br>
                target : hogehoge<br>
                point : piyopiyo
              </div>
          </div>
      </div>
      <div class="content__pic2">
          <img src="{{ asset('/img/site05/bnr2.jpg') }}" alt="">
          <div class="mask">
              <div class="caption">
                size : 500x500px<br>
                target : hogehoge<br>
                point : piyopiyo
              </div>
          </div>
      </div>
      <div class="content__pic3">
          <img src="{{ asset('/img/site05/bnr3.jpg') }}" alt="">
          <div class="mask">
              <div class="caption">
                size : 500x500px<br>
                target : hogehoge<br>
                point : piyopiyo
              </div>
          </div>
      </div>
      <div class="content__pic4">
          <img src="{{ asset('/img/site05/bnr4.jpg') }}" alt="">
          <div class="mask">
              <div class="caption">
                size : 500x500px<br>
                target : hogehoge<br>
                point : piyopiyo
              </div>
          </div>
      </div>
      <div class="content__pic5">
          <img src="{{ asset('/img/site05/bnr5.jpg') }}" alt="">
          <div class="mask">
              <div class="caption">
                size : 500x500px<br>
                target : hogehoge<br>
                point : piyopiyo
              </div>
          </div>
      </div>
      <div class="content__pic6">
          <img src="{{ asset('/img/site05/bnr6.jpg') }}" alt="">
          <div class="mask">
              <div class="caption">
                size : 500x500px<br>
                target : hogehoge<br>
                point : piyopiyo
              </div>
          </div>
      </div>
  </div>

@endsection