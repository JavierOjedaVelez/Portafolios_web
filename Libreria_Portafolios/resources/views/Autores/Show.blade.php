<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <h1 id="titulo-autor" class="card-title text-center">Cargando...</h1>

            <p class="mt-3"><strong>Nombre:</strong> <span id="nombre-autor"></span></p>
            <p><strong>Biografía:</strong> <span id="biografia-autor"></span></p>
            <p><strong>Fecha de nacimiento:</strong> <span id="fecha-autor"></span></p>

            <a href="{{ route('principal') }}" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Captura el ID del autor desde la URL
        const urlParts = window.location.pathname.split("/");
        const autorId = urlParts[urlParts.length - 2]; // Captura el ID desde la URL

        fetch(`/autores/${autorId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data); // Verifica si los datos están llegando correctamente
                if (data && data.data) {  // Aseguramos que 'data' y 'data.data' existan
                    const autor = data.data;  // Accedemos a los datos del objeto 'data'
                    document.getElementById("titulo-autor").textContent = "Datos de " + autor.Nombre;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("nombre-autor").textContent = autor.Nombre;  // Usamos 'Nombre' con mayúscula
                    document.getElementById("biografia-autor").textContent = autor.Biografia;  // Usamos 'Biografia' con mayúscula
                    document.getElementById("fecha-autor").textContent = autor["Fecha de nacimiento"];
                }
            })
            .catch(error => {
                console.error("Error al cargar los datos:", error);
            });
    });
</script>

</body>
</html>
