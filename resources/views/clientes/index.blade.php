<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Clientes</h1>
    <a href="{{ route('clientes.create') }}">Crear Cliente</a>
    <ul>
        @foreach ($clientes as $cliente)
            <li>
                <a href="{{ route('clientes.show', $cliente->codigo) }}">{{ $cliente->num_social }}</a>
                <a href="{{ route('clientes.edit', $cliente->codigo) }}">Editar</a>
                <form action="{{ route('clientes.destroy', $cliente->codigo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>