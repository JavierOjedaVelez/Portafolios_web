<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir tipo de libro</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="{{asset("Front/funciones.js")}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2>Añadir nuevo tipo de libro</h2>

    <form action="@" method="POST" >
        @csrf

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>

        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" required>

        </div>

                <!-- Tipo de usuario -->
                <div class="mb-3">
                    <label for="id_pedido" class="form-label">Tipo de usuarioT</label>
                    <select class="form-select" id="id_pedido" name="id_pedido" required>
                        <option value="" disabled selected>Seleccionar tipo de usuario</option>
                        @foreach($tipousuario as $tipo)
                            <option value="{{ $tipo->id_tipo_usuario }}">{{ $tipo->nombre }}</option>
                        @endforeach
                    </select>

                </div>








        <!-- Botón para enviar -->
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Añadir Usuario</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
