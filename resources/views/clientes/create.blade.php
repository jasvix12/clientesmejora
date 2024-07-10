<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <label for="num_social">Número Social:</label>
        <input type="text" name="num_social" id="num_social">
        <label for="domicilio">Domicilio:</label>
        <input type="text" name="domicilio" id="domicilio">
        <label for="tfno">Teléfono:</label>
        <input type="text" name="tfno" id="tfno">
        <button type="submit">Crear</button>
    </form>
</body>
</html>