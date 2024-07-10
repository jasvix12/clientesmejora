<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Proyectos</h1>
    <a href="{{ route('proyectos.create') }}">Crear Proyecto</a>
    <ul>
        @foreach ($proyectos as $proyecto)
            <li>
                <a href="{{ route('proyectos.show', $proyecto->codigo) }}">{{ $proyecto->descripcion }}</a>
                <a href="{{ route('proyectos.edit', $proyecto->codigo) }}">Editar</a>
                <form action="{{ route('proyectos.destroy', $proyecto->codigo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>