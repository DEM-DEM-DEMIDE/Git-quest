<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GITQUEST</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Caveat rel="stylesheet">
  




  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Evt-Garden | @yield('title', 'Home')</title>
  

  @if(app('env') == 'production')
  <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
@else
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endif
    </head>
    <body>


  <div id='app'>
      <div class="l-main"> 
      <img src="{{ asset('/images/top_img.jpeg') }}" alt="" class="p-top-img" > 

      <div>
      <div class="l-main-box"> 
      <button class="l-main-box__btn">basic</button>
      <button class="l-main-box__btn--ad">advance</button>
      </div>
      </div>
      </div>
  </div>


    <script src="{{ mix('js/app.js') }}"></script> 

    </body>
</html>
