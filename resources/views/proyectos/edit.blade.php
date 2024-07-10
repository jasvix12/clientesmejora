<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Proyecto</h1>
    <form action="{{ route('proyectos.update', $proyecto->codigo) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ $proyecto->descripcion }}">
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ $proyecto->fecha_inicio }}">
        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" name="fecha_fin" id="fecha_fin" value="{{ $proyecto->fecha_fin }}">
        <label for="cuantia">Cuantía:</label>
        <input type="text" name="cuantia" id="cuantia" value="{{ $proyecto->cuantia }}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>