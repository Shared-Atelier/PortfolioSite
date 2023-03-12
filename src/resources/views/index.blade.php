@extends('layouts.app')

@section('content')

<div class="container">
  <div class="carousel">
    <input type="radio" id="carousel-1" name="carousel[]" checked>
    <input type="radio" id="carousel-2" name="carousel[]">
    <input type="radio" id="carousel-3" name="carousel[]">
    <ul class="carousel__items">
      <li class="carousel__item"><img src="{{ asset('img/top_mv_1.jpeg') }}" alt=""></li>
      <li class="carousel__item"><img src="{{ asset('img/top_mv_2.jpeg') }}" alt=""></li>
      <li class="carousel__item"><img src="{{ asset('img/top_mv_3.jpeg') }}" alt=""></li>
    </ul>
     <div class="carousel__prev">
      <label for="carousel-1"></label>
      <label for="carousel-2"></label>
      <label for="carousel-3"></label>
     </div>
     <div class="carousel__next">
       <label for="carousel-1"></label>
       <label for="carousel-2"></label>
       <label for="carousel-3"></label>
     </div>
     <div class="carousel__nav">
       <label for="carousel-1"></label>
       <label for="carousel-2"></label>
       <label for="carousel-3"></label>
     </div>
   </div>
 </div>

@endsection