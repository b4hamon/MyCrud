<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('vehicles.store') }}" method="post">
        @csrf
        <input type="text" name="color" placeholder="color">
        <input type="date" name="published_at" placeholder="Fecha de fabricacion">
        <button type="submit">Guardar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Color</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->id }}</td>
                    <td>{{ $vehicle->color }}</td>
                    <td>{{ $vehicle->published_at }}</td>
                    <td>
                        <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                        <a href="{{ route('vehicles.edit', $vehicle->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>