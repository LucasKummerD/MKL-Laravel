<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.header')

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top" style="background-color: #338bca;">
            <div class="container">
                <a class="navbar-brand " style="color:white" href="{{ url('/') }}">
                    <img class="navbar-brand" alt="Logo-MKL" src="{{ asset('img/assets/MKLNegro.png') }}">    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <div class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <ul>
                            <li class="nav-item">
                                <a class="nav-link" style="color:white" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" style="color:white" href="{{ route('register') }}">{{ __('Crear Cuenta') }}</a>
                                @endif
                            </li>
                        </ul>
                        @else
                        <ul >
                            <li >
                                <a class="nav-link" style="color:white"  href="#" role="button" >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="d-flex flex-row justify-content-" style="background-color: #4a9ad3">
                                   
                                        <a style="color:white" href="">Datos Personales</a>
                                   
                                   
                                        <a  style="color:white" href="">Seguridad</a>
                                   
                                   
                                        <a  style="color:white" href="">Carrito</a>
                                   
                                    
                                        <a  style="color:white" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesion') }}
                                   
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>        
    </div>
    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
</body>
</html>
