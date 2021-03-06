<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <style>
        html, body{
            min-height: 100%;
        }
        body, #nav-login{
            /*background-image: linear-gradient(to top, #11998e 80%, #38ef7d 100%);*/
            background-size: cover;
            background-repeat: no-repeat;
        }

        #botoes a:hover{
            color: white;
        }
    </style> 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel mt-2" style="background-color: transparent;border:none;">
            <div class="container mt-5">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="{{asset('img/logos.png')}}" alt="Logo da Página" style="width: 100%">
                </a>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
            <nav class="navbar navbar-expand-md fixed-top" style="background-color: rgb(32,176,181);">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link mr-2" href="{{asset('/')}}"><img src="{{asset('img/logobola3.png')}}" alt=""></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn btn-outline-dark mr-2" target="_blank" href="http://portal.ifpe.edu.br/"><strong>Portal IFPE</strong></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn btn-outline-dark mr-2" target="_blank" href="https://portal.ifpe.edu.br/estudante"><strong>Portal Estudante</strong></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link btn btn-outline-dark mr-2" target="_blank" href="https://portal.ifpe.edu.br/servidor"><strong>Portal Servidor</strong></a>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto order-0">
                    <a class="navbar-brand mx-auto" href="#" style="color:black;">Menu Principal</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2" style="background-color: transparent; ">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item active">
                            <a class="nav-link btn btn-outline-dark mr-2" href="{{ url('/home') }}"><strong>Formulários</strong></a>
                        </li>   
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-outline-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn btn-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @else
                        <li class="nav-item active">
                            <a class="nav-link btn btn-outline-dark mr-2" href="{{ route('login') }}"><strong>Entrar</strong></a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item active">
                            <a class="nav-link btn btn-outline-dark mr-2" href="{{ route('register') }}"><strong>Cadastro</strong></a>
                        </li>
                        @endif
                        @endauth
                            </div>
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <nav class="fixed-bottom text-dark" style="background-color: rgb(32,176,181);">
        <div class="text-center py-3">Monitoramento Estudantil © 2019</div>
    </nav>      
</body>
</html>
