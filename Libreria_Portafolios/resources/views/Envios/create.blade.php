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

        <!-- metodo envoi -->
        <div class="mb-3">
            <label for="metodo_envio" class="form-label">Metodo de envio</label>
            <input type="text" class="form-control" id="metodo_envio" name="metodo_envio" required>

        </div>
        <!-- metodo envoi -->
        <div class="mb-3">
            <label for="codigo_seguimiento" class="form-label">COdigo de seguimiento</label>
            <input type="text" class="form-control" id="codigo_seguimiento" name="codigo_seguimiento" required>

        </div>

                <!-- Fecha de envio -->
                <div class="mb-3">
                    <label for="fecha_envio" class="form-label">Fecha de Envio</label>
                    <input type="date" class="form-control" id="fecha_envio" name="fecha_envio"  required>

                </div>
                <!-- Fecha de entrega -->
                <div class="mb-3">
                    <label for="fecha_entrega_estimada" class="form-label">Fecha de entrega estimada</label>
                    <input type="date" class="form-control" id="fecha_entrega_estimada" name="fecha_entrega_estimada"  required>

                </div>

                <!-- Tipo de usuario -->
                <div class="mb-3">
                    <label for="id_pedido" class="form-label">Codigo de pedido</label>
                    <select class="form-select" id="id_pedido" name="id_pedido" required>
                        <option value="" disabled selected>Seleccionar tipo de usuario</option>
                        @foreach($pedido as $ped)
                            <option value="{{ $ped->id_pedido }}">{{ $ped->id_pedido }}</option>
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
