<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <h1 id="titulo-Envio" class="card-title text-center">Cargando...</h1>

            <p class="mt-3"><strong>metodo de envio:</strong> <span id="metodo-Envio"></span></p>
            <p class="mt-3"><strong>codigo de envio:</strong> <span id="codigo-Envio"></span></p>
            <p class="mt-3"><strong>fecha de envio:</strong> <span id="fecha-Envio"></span></p>
            <p class="mt-3"><strong>fecha de entrega estimada:</strong> <span id="entrega-Envio"></span></p>


            <a href="{{ route('principal') }}" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Captura el ID del autor desde la URL
        const urlParts = window.location.pathname.split("/");
        const envioId = urlParts[urlParts.length - 2]; // Captura el ID desde la URL

        fetch(`/envios/${envioId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data && data.data) {  // Aseguramos que 'data' y 'data.data' existan
                    const envio = data.data;  // Accedemos a los datos del objeto 'data'
                    document.getElementById("titulo-Envio").textContent = "Datos del envio " + envio.id;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("metodo-Envio").textContent = envio.nombre;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("codigo-Envio").textContent = envio.codigo;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("fecha-Envio").textContent = envio.fecha_envio;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("entrega-Envio").textContent = envio.fecha_entrega_estimada;  // Usamos 'Nombre' con mayúscula


                }
            })
            .catch(error => {
                console.error("Error al cargar los datos:", error);
            });
    });
</script>

</body>
</html>
