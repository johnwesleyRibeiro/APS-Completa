<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Aps-Laravel</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .rod{
    position:static;
    bottom: 0 ;
    left: 10%;  
    background-color:black;
    height:120px;
    border-radius: 15px;
    text-align: center;
    width: 100%;
    font-size: 15pt;
    color: aquamarine;
}
            #navbar1{
                background-color:lightseagreen;
                color: #5555;
                
            }
            .fundo {
                background-color: lightgrey;
                border-radius: 5px;
            }  
            #bd{
                background-color: lightseagreen;
            } 
        </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="navbar1">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container navbar1">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Pagina Inicial
                </a><ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="navbar-brand navbar" href="{{ url('/home') }}">
                    Home
                </a></li>
                @if (!Auth::guest())
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="navbar-brand navbar" href="{{ url('/cursos') }}">
                    Cursos
                </a></li>
                <li class="nav-item">
                <a class="navbar-brand navbar" href="{{ url('/empresas') }}">
                    Empresas
                </a></li>
                <li class="nav-item">
                <a class="navbar-brand navbar" href="{{ url('/estagiarios') }}">
                    Estagiarios
                </a></li>
                <li class="nav-item">
                <a class="navbar-brand navbar" href="{{ url('/estagios') }}">
                    Estagios
                </a></li>
                <li class="nav-item">
                <a class="navbar-brand navbar" href="{{ url('/professores') }}">
                    Professores
                </a>
                </li>
                @endif
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </ul>
                    <ul class="navbar-nav ml-auto">
                       
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar-se ') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     Administração <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.index') }}">
                                        Usuarios            
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}<span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                </nav>
            </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
