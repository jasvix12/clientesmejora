<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente->codigo) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="num_social">Número Social:</label>
        <input type="text" name="num_social" id="num_social" value="{{ $cliente->num_social }}">
        <label for="domicilio">Domicilio:</label>
        <input type="text" name="domicilio" id="domicilio" value="{{ $cliente->domicilio }}">
        <label for="tfno">Teléfono:</label>
        <input type="text" name="tfno" id="tfno" value="{{ $cliente->tfno }}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>