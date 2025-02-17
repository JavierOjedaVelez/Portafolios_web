<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Librería</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="indexLibros()">Libros</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userOptions" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Opciones de usuario
                </a>
                <div class="dropdown-menu" aria-labelledby="userOptions">
                    <a class="dropdown-item" href="{{route('login')}}">Iniciar sesión</a>
                    <a class="dropdown-item" href="{{route('registrarse')}}">Registrarse</a>
                    <div class="dropdown-divider"></div>
                    @if(Session::has('nombre'))
                    <a class="dropdown-item" href="#">Perfil: {{Session::get('nombre')}}</a>
                    <a class="dropdown-item" href="#" onclick="logout()">Cerrar sesión</a>
                    @endif
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>
