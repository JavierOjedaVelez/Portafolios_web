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
    <h2>Añadir nuevo libro</h2>

    <form action="#" method="POST" >
        @csrf



        <!-- precio unitario -->
        <div class="mb-3">
            <label for="precio_unitario" class="form-label">precio unitario</label>
            <input type="number" class="form-control" id="precio_unitario" name="precio_unitario"  required>

        </div>

        <!-- precio unitario -->
        <div class="mb-3">
            <label for="precio_unitario" class="form-label">precio unitario</label>
            <input type="number" class="form-control" id="precio_unitario" name="precio_unitario"  required>

        </div>



        <!-- Pedidos -->
        <div class="mb-3">
            <label for="id_pedido" class="form-label">Codigo del pedido</label>
            <select class="form-select" id="id_pedido" name="id_pedido" required>
                <option value="" disabled selected>Seleccionar tipo de libro</option>
                @foreach($pedido as $ped)
                    <option value="{{ $ped->id_pedido }}">{{ $ped->pedido }}</option>
                @endforeach
            </select>

        </div>

        <!-- Libros -->
        <div class="mb-3">
            <label for="isbn" class="form-label">isbn</label>
            <select class="form-select" id="isbn" name="isbn" required>
                <option value="" disabled selected>Seleccionar libro</option>
                @foreach($libro as $lib)
                    <option value="{{ $lib->isbn }}">{{ $lib->titulo }}</option>
                @endforeach
            </select>

        </div>



        <!-- Botón para enviar -->
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" >Añadir Detalles del pedido</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
