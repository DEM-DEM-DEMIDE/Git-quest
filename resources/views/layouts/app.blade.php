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

    @yield('header')

    @yield('content')
    @yield('footer')

    @yield('error-page')
    
  </div>


    <script src="{{ mix('js/app.js') }}"></script> 


    @yield('js-area')

    </body>
</html>
