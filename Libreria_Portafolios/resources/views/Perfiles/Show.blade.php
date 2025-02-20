<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <h1 id="titulo-perfil" class="card-title text-center">Cargando...</h1>

            <p class="mt-3"><strong>Nombre:</strong> <span id="nombre-perfil"></span></p>
            <p><strong>Dirección:</strong> <span id="direccion-perfil"></span></p>
            <p><strong>Teléfono:</strong> <span id="telefono-perfil"></span></p>
            <p><strong>Foto de Perfil:</strong> <img id="foto-perfil" src="" alt="Foto de perfil" class="img-fluid" style="width: 100px; height: 100px;"></p>

            <a href="{{ route('principal') }}" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Captura el ID del perfil desde la URL
        const urlParts = window.location.pathname.split("/");
        const perfilId = urlParts[urlParts.length - 2]; // Captura el ID desde la URL

        fetch(`/perfiles/${perfilId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data); // Verifica si los datos están llegando correctamente
                if (data && data.data) {  // Aseguramos que 'data' y 'data.data' existan
                    const perfil = data.data;  // Accedemos a los datos del objeto 'data'
                    document.getElementById("titulo-perfil").textContent = "Datos de " + perfil.nombre;
                    document.getElementById("nombre-perfil").textContent = perfil.nombre;
                    document.getElementById("direccion-perfil").textContent = perfil.direccion;
                    document.getElementById("telefono-perfil").textContent = perfil.telefono;
                    document.getElementById("foto-perfil").src = perfil.foto_perfil;  // Asignamos la URL de la foto
                }
            })
            .catch(error => {
                console.error("Error al cargar los datos:", error);
            });
    });
</script>

</body>
</html>
