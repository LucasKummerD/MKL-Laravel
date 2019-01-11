<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials.header')

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top" style="background-color: #338bca;">
            <div class="container">
                <a class="navbar-brand" style="color:white" href="{{ url('/home') }}">
                    <img class="navbar-brand" alt="Logo-MKL" src="{{ asset('img/assets/MKLNegro.png') }}">    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color:white" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" style="color:white" href="{{ route('register') }}">{{ __('Crear Cuenta') }}</a>
                                @endif
                            </li>           
                        @else 

                            @if (Auth::check() && Auth::user()->role == 'admin')
                            <ul>
                                <a class="nav-link text-right" style="color:lightgrey"  href="#" role="button" >(Administrador) {{ Auth::user()->name }}</a>
                                <div class="d-flex flex-row" style="background-color:#338bca">   
                                        <a style="color:white" class="px-2" href="/categories">Lineas</a>
                                        <a  style="color:white" class="px-2" href="/showProducts">Productos</a>
                                        <a  style="color:white" class="px-2" href="/showClients">Clientes</a>                                    
                                        <a  style="color:white" class="px-2" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar Sesion') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </ul>

                            @else             
                            <ul>
                            <div class="d-inline-block col-12">
                                <a href=""><i class="fa fas fa-shopping-cart d-inline-block" style="color:white"></i></a>
                                <a class="nav-link text-right d-inline-block" style="color:lightgrey"  href="#" role="button" >
                                    {{ Auth::user()->name }}</a>
                            </div>
                                <div class="d-flex flex-row" style="background-color:#338bca">   
                                        <a style="color:white" class="px-2" href="/categories">Lineas</a>
                                        <a  style="color:white" class="px-2" href="/showProducts">Productos</a>                                    
                                        <a  style="color:white" class="px-2" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar Sesion') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </ul>
                            @endif                       
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
