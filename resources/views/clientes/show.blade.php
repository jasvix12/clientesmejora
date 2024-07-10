<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalles del Cliente</h1>
    <p>Número Social: {{ $cliente->num_social }}</p>
    <p>Domicilio: {{ $cliente->domicilio }}</p>
    <p>Teléfono: {{ $cliente->tfno }}</p>
    <a href="{{ route('clientes.index') }}">Volver</a>
</body>
</html>