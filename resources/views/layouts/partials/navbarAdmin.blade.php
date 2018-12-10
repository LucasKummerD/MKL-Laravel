<nav class="navbar fixed-top navbar-expand-lg navbar-light fixed-top" style="background-color: #338bca;">
    <div class="container">
        <img class="navbar-brand" alt="Logo-MKL" src="{{ asset('img/assets/MKLNegro.png') }}">              
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="preg-frec.php"></a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: white" href="#" id="cuenta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cuenta</a>
                    <div class="dropdown-menu dropdown-menu-right" style="background-color: #4a9ad3" readonly aria-labelledby="lineas">
                        <a class="dropdown-item" style="color: white" href=""></a>
                        <a class="dropdown-item" style="color: white" href="/admin/create">Insertar Productos</a>
                        <a class="dropdown-item" style="color: white" href="/admin">Productos</a> 
                        <a class="dropdown-item" style="color: white" href="">Perfil</a>
                        <a class="dropdown-item" style="color: white" href="{{ route('master') }}">Cerrar Sesión</a>
                    </div>
            </li>                    
            </ul>
        </div>
    </div>
</nav>