<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalles del Proyecto</h1>
    <p>Descripción: {{ $proyecto->descripcion }}</p>
    <p>Fecha de Inicio: {{ $proyecto->fecha_inicio }}</p>
    <p>Fecha de Fin: {{ $proyecto->fecha_fin }}</p>
    <p>Cuantía: {{ $proyecto->cuantia }}</p>
    <a href="{{ route('proyectos.index') }}">Volver</a>
</body>
</html>