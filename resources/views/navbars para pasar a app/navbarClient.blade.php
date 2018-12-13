<nav class="navbar fixed-top navbar-expand-lg navbar-light fixed-top" style="background-color: #338bca;">
    <div class="container">
        <img class="navbar-brand" alt="Logo-MKL" src="{{ asset('img/assets/MKLblanco-01.png') }}">                
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="">Perfil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: white" href="#" id="lineas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lineas</a>
                <div class="dropdown-menu dropdown-menu-right" style="background-color: #4a9ad3" readonly aria-labelledby="lineas">
                    <a class="dropdown-item" style="color:white" href="">Catering</a>
                    <a class="dropdown-item" style="color:white" href="">Hotel</a>
                    <a class="dropdown-item" style="color:white" href="">Cotillon</a>
                    <a class="dropdown-item" style="color:white" href="">Barra</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: white" href="#" id="cuenta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cuenta</a>
                <div class="dropdown-menu dropdown-menu-right" style="background-color: #4a9ad3" readonly aria-labelledby="lineas">
                    <a class="dropdown-item" style="color:white" href=""></a>
                    <a class="dropdown-item" style="color:white" href="">Datos Personales</a>
                    <a class="dropdown-item" style="color:white" href="">Carrito</a>
                    <a class="dropdown-item" style="color:white" href="{{ route('master') }}">Cerrar Sesion</a>
                </div>
            </li>                
            </ul>
        </div>
    </div>
</nav>