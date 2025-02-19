<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{asset('Front/funciones.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Librería</title>
</head>
<body>

    @include('Cabeceras.CabeceraCliente')

    <section id="principal">
        <div id="contenido">
            <!-- Contenido dinámico aquí -->
        </div>
    </section>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
