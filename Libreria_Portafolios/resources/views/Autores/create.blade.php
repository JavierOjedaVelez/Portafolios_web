<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir libro</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="{{asset("Front/funciones.js")}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Añadir nuevo Autor</h2>

    <form action="@" method="POST" >
        @csrf

        <!-- Nombre -->
        <div class="mb-3">
            <label for="titulo" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>

        </div>

        <!-- Biografia -->
        <div class="mb-3">
            <label for="precio" class="form-label">Biografia</label>
            <textarea class="form-control" id="biografia" name="biografia" required >
        </div>


        <!-- Fecha de Nacimiento -->
        <div class="mb-3">
            <label for="fecha_publicacion" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"  required>

        </div>


        <!-- Botón para enviar -->
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Añadir Autor</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
