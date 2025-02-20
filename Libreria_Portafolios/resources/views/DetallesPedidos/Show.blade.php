<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <h1 id="titulo-detalles" class="card-title text-center">Cargando...</h1>

            <p class="mt-3"><strong>Cantidad:</strong> <span id="cantidad-detalles"></span></p>
            <p><strong>Precio Unitario:</strong> <span id="precio-detalles"></span></p>

            <a href="{{ route('principal') }}" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Captura el ID del autor desde la URL
        const urlParts = window.location.pathname.split("/");
        const detalleId = urlParts[urlParts.length - 2]; // Captura el ID desde la URL

        fetch(`/detalles/${detalleId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data && data.data) {  // Aseguramos que 'data' y 'data.data' existan
                    const detalles = data.data;  // Accedemos a los datos del objeto 'data'
                    document.getElementById("titulo-detalles").textContent = "Datos de " + detalles.cantidad;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("cantidad-detalles").textContent = detalles.cantidad;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("precio-detalles").textContent = detalles.precio_unitario;  // Usamos 'Biografia' con mayúscula
                }
            })
            .catch(error => {
                console.error("Error al cargar los datos:", error);
            });
    });
</script>

</body>
</html>
