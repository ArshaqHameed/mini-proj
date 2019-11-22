<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Flood Relief</title>

    <!-- Tab Icon

<link rel="shortcut icon" href="favicon.ico" type="image/img4.png">-->
<link rel="icon" href="img/img4.png">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="img/img4.png">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>





<div class="hero">
    <div class="skin ">
            <nav class="navbar navbar-expand-md navbar-dark bg-white shadow-sm bg-transparent py-5">
                    <div class="container">
                        <a class="navbar-brand " href="{{ url('/') }}">
                            <h4 class="h4">Flood Relief</h4>

                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item ">
                                            <div class="btn btn-primary btn-block btn-lg">
                                             <a class="nav-link text-dark" style="padding:0 " href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </div>


                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
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

            <div class="container justify-content-center align-items-center d-flex" style="height:100%;">
                    <div class="row py-5" style="height:auto;">
                        <div class="col-md-8 offset-md-2">
                                <div class="jumbotron bg-transparent text-center">
                                        <h1 class="display-4 text-light ">Let's Build Our Home Together.</h1>
                                        <p class="lead text-light">Kerala is again hit by another flood this year. While the state has been recovering from the 2018 flood, another deluge devastated Kerala. </p>
                                        <hr class="my-4 text-light">
                                      </div>
                        </div>
                    </div>
                </div>
    </div>

</body>
</html>



