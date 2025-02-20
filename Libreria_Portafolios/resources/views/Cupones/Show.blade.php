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
            <h1 id="titulo-cupon" class="card-title text-center">Cargando...</h1>

            <p class="mt-3"><strong>Codigo:</strong> <span id="codigo-cupon"></span></p>
            <p><strong>Descuento:</strong> <span id="descuento-cupon"></span></p>
            <p><strong>Fecha de expiracion:</strong> <span id="fecha-cupon"></span></p>

            <a href="{{ route('principal') }}" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Captura el ID del autor desde la URL
        const urlParts = window.location.pathname.split("/");
        const cuponId = urlParts[urlParts.length - 2]; // Captura el ID desde la URL

        fetch(`/cupones/${cuponId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data && data.data) {  // Aseguramos que 'data' y 'data.data' existan
                    const cupon = data.data;  // Accedemos a los datos del objeto 'data'
                    document.getElementById("titulo-cupon").textContent = "Datos de cupon " + cupon.codigo;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("codigo-cupon").textContent = cupon.codigo;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("descuento-cupon").textContent = cupon.descuento;  // Usamos 'Biografia' con mayúscula
                    document.getElementById("fecha-cupon").textContent = cupon.fecha_expiracion;
                }
            })
            .catch(error => {
                console.error("Error al cargar los datos:", error);
            });
    });
</script>

</body>
</html>
