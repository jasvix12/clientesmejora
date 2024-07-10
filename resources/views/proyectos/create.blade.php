<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Proyecto</h1>
    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion">
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio" id="fecha_inicio">
        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" name="fecha_fin" id="fecha_fin">
        <label for="cuantia">Cuantía:</label>
        <input type="text" name="cuantia" id="cuantia">
        <button type="submit">Crear</button>
    </form>
</body>
</html>