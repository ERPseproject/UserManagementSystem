<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ERP</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <style>
    body
 {
 height: auto;
 margin:  0;
 padding: 0;
 }

 footer
 {
   background-color: #8B0000;
   color: white;
   padding: 15px;
   bottom: 0;
   margin-bottom: 0%;
   width: 100%;
   position: fixed;

 }
#btnhome:active{
    line-height : 25px;
}
#btnhome {  
    margin-left: 121px;
    margin-top: 1px;
    width: 84px;
    height: 45px;   
    background: transparent;
    border: none;
    color: white;   
    font-size:14px;
    font-weight:700;
}#logo{
    position: absolute;
    width: 320px;
    height: 100px;
    top: 60px;
    left: -10px;
}
</style>

</head>

<body>
<div id="app">
<nav class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-color:#800000;">
<div class="container-fluid">
               
                <a class="navbar-brand" href="{{ url('/home') }}"><img src="pic/Gears-PNG-Clipart.png" width="50" height="50">ERP</a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="active"><a href="./home">Home</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                            <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(auth()->user()->avatar)
                                <img src="{{ auth()->user()->avatar }}" alt="avatar" width="40" height="40" style="margin-right: 10px;">
                                @endif
                                {{ auth()->user()->name }} <span class="caret"></span>
                            </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="container-fluid text-center">
        @yield('footer')
        <h6>KU SRC</h6>
    </footer>
    </div>
</body>

</html>
