<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar libro</title>
    <!-- Enlace a Bootstrap desde CDN -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('Front/funciones.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
    <div class="container mt-5">
        <h2>Editar libro {{$libro->titulo}}</h2>

        <form action="{{route('libros.update', $libro->isbn) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Título -->
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{$libro->titulo}}" required>
            </div>

            <!-- Precio -->
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="{{$libro->precio}}" required>
            </div>

            <!-- Stock -->
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="{{$libro->stock}}" required>
            </div>

            <!-- Sinopsis -->
            <div class="mb-3">
                <label for="sinopsis" class="form-label">Sinopsis</label>
                <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3" required>{{$libro->sinopsis}}</textarea>
            </div>

            <!-- Portada -->
            <div class="mb-3">
                <label for="portada" class="form-label">Portada</label>
                <input type="file" class="form-control" id="portada" name="portada">
            </div>

            <!-- Fecha de Publicación -->
            <div class="mb-3">
                <label for="fecha_publicacion" class="form-label">Fecha de Publicación</label>
                <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" value="{{$libro->fecha_publicacion}}" required>
            </div>

            <!-- Tipo de Libro -->
            <div class="mb-3">
                <label for="id_tipo_libro" class="form-label">Tipo de Libro</label>
                <select class="form-select" id="id_tipo_libro" name="id_tipo_libro" required>
                    <option value="" disabled selected>Seleccionar tipo de libro</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id_tipo_libro }}" {{ $libro->id_tipo_libro == $tipo->id_tipo_libro ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Edición -->
            <div class="mb-3">
                <label for="id_edicion" class="form-label">Edición</label>
                <select class="form-select" id="id_edicion" name="id_edicion" required>
                    <option value="" disabled selected>Seleccionar edición</option>
                    @foreach($edicion as $ed)
                        <option value="{{ $ed->id_edicion }}" {{ $libro->id_edicion == $ed->id_edicion ? 'selected' : '' }}>{{ $ed->nombre }}</option>
                    @endforeach
                </select>
            </div>



            <!-- Botón para enviar -->
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Editar Libro</button>
            </div>
        </form>
    </div>

    <!-- Scripts -->
    <script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
</body>
</html>
