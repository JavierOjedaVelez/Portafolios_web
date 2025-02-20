<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <h1 id="titulo-pedidos" class="card-title text-center">Cargando...</h1>

            <p class="mt-3"><strong>Total:</strong> <span id="total-pedidos"></span></p>
            <p class="mt-3"><strong>fecha de pedido:</strong> <span id="fecha-pedidos"></span></p>
            <p class="mt-3"><strong>estado:</strong> <span id="estado-pedidos"></span></p>


            <a href="{{ route('principal') }}" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Captura el ID del autor desde la URL
        const urlParts = window.location.pathname.split("/");
        const envioId = urlParts[urlParts.length - 2]; // Captura el ID desde la URL

        fetch(`/pedidos/${envioId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data && data.data) {  // Aseguramos que 'data' y 'data.data' existan
                    const pedidos = data.data;  // Accedemos a los datos del objeto 'data'
                    document.getElementById("titulo-pedidos").textContent = "Datos del envio " + pedidos.id;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("total-pedidos").textContent = pedidos.total;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("fecha-pedidos").textContent = pedidos.fecha_pedido;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("estado-pedidos").textContent = pedidos.estado;  // Usamos 'Nombre' con mayúscula


                }
            })
            .catch(error => {
                console.error("Error al cargar los datos:", error);
            });
    });
</script>

</body>
</html>
