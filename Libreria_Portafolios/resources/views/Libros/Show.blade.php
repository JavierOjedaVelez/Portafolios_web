<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $libro->titulo }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <h1 class="card-title text-center">{{ $libro->titulo }}</h1>

            <div class="text-center my-3">
                <img src="{{ asset('storage/img/libros/' . $libro->portada) }}"
                     alt="Portada de {{ $libro->titulo }}"
                     class="img-fluid rounded shadow"
                     style="max-width: 250px;">
            </div>

            <p class="mt-3"><strong>Sinopsis:</strong></p>
            <p>{{ $libro->sinopsis }}</p>

            <p><strong>Precio:</strong> ${{ number_format($libro->precio, 2) }}</p>

            <a href="{{ route('principal') }}" class="btn btn-secondary mt-3">Volver</a>
        </div>
    </div>
</div>

</body>
</html>
