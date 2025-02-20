<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipo usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <h1 id="titulo-tipo" class="card-title text-center">Cargando...</h1>

            <p class="mt-3"><strong>Nombre:</strong> <span id="nombre-tipo"></span></p>

            <a href="{{ route('principal') }}" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const urlParts = window.location.pathname.split("/");
    const tipoId = urlParts[urlParts.length - 2]; // Captura el ID desde la URL

    fetch(`/tipousuarios/${tipoId}`)
        .then(response => response.json())
        .then(data => {
            console.log(data); // Verifica si los datos están llegando correctamente
            if (data && data.data) {  // Aseguramos que 'data' y 'data.data' existan
                const tipo = data.data;  // Accedemos a los datos del objeto 'data'
                document.getElementById("titulo-tipo").textContent = "Datos de " + tipo.nombre;
                document.getElementById("nombre-tipo").textContent = tipo.nombre;
            }
        })
        .catch(error => {
            console.error("Error al cargar los datos:", error);
        });
});

</script>

</body>
</html>
