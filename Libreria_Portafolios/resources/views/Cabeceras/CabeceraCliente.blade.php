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


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userOptions" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Añadir...
                </a>
                <div class="dropdown-menu" aria-labelledby="userOptions">
                    <a class="dropdown-item" href="{{route('libros.create')}}">añadir libro</a>
                    <a class="dropdown-item" href="{{route('tipolibros.create')}}">añadir tipo libro</a>
                    <a class="dropdown-item" href="{{route('tipousuarios.create')}}">añadir tipo usuarios</a>
                    <a class="dropdown-item" href="{{route('usuarios.create')}}">añadir usuario</a>
                    <a class="dropdown-item" href="{{route('reseñas.create')}}">añadir reseña</a>
                    <a class="dropdown-item" href="{{route('perfiles.create')}}">añadir perfiles</a>
                    <a class="dropdown-item" href="{{route('pedidos.create')}}">añadir pedido</a>
                    <a class="dropdown-item" href="{{route('librosguardados.create')}}">añadir libro guardado</a>
                    <a class="dropdown-item" href="{{route('generos.create')}}">añadir genero</a>
                    <a class="dropdown-item" href="{{route('envios.create')}}">añadir envio</a>
                    <a class="dropdown-item" href="{{route('ediciones.create')}}">añadir edicion</a>
                    <a class="dropdown-item" href="{{route('detalles.create')}}">añadir detalles de pedido</a>
                    <a class="dropdown-item" href="{{route('cupones.create')}}">añadir cupon</a>
                    <a class="dropdown-item" href="{{route('autores.create')}}">añadir autores</a>














                </div>


            </li>



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userOptions" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Listar...
                </a>
                <div class="dropdown-menu" aria-labelledby="userOptions">
                    <a class="dropdown-item" onclick="indexTipolibros()">Listar tipos de libros</a>
                    <a class="dropdown-item" onclick="indexTipousuarios()">Listar tipos de usuarios</a>
                    <a class="dropdown-item" onclick="indexUsuarios()">Listar usuarios</a>
                    <a class="dropdown-item" onclick="indexEdicion()">Listar ediciones</a>
                    <a class="dropdown-item" onclick="indexGenero()">Listar generos</a>
                    <a class="dropdown-item" onclick="indexPerfiles()">Listar perfiles</a>
                    <a class="dropdown-item" onclick="indexAutores()">Listar autores</a>
                    <a class="dropdown-item" onclick="indexPedidos()">Listar pedidos</a>
                    <a class="dropdown-item" onclick="indexCupones()">Listar cupones</a>
                    <a class="dropdown-item" onclick="indexDetalles()">Listar detalles de pedidos</a>
                    <a class="dropdown-item" onclick="indexReseña()">Listar reseñas</a>
                    <a class="dropdown-item" onclick="indexLibrosguardados()">Listar libros guardados por los usuarios</a>
                    <a class="dropdown-item" onclick="indexEnvios()">Listar envios</a>





                </div>


            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>
