@extends('layouts.app')


@section('content')

@section('title' ,'TOP')

<main>

  <div class="l-main"> 
    <img src="{{ asset('/images/top_img.jpeg') }}" alt="" class="p-top-img" > 
    
    
    <div class="l-main-box"> 
      <a href="{{route('sample')}}">
        
        <button class="l-main-box__btn">Quick Start</button>
      </a>
      <button class="l-main-box__btn">Sign Up</button>
      <button class="l-main-box__btn">Log In</button>
    </div>
    
    
  </div>
</main>

@endsection
