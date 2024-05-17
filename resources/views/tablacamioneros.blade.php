<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="{{ route('camionero.create') }}">Crear camionero</a>
    <table>
        <thead>
            <tr>
                <th>Dni</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Salario</th>
                <th>Población</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($camioneros as $camionero)
                <!-- Modal -->
                <div class="modal fade" id="modal{{ $camionero->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('camionero.destroy', $camionero->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <p>¿Estás seguro que deseas eliminar el dni: {{ $camionero->dni }}?</p>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <tr>
                    <td>{{ $camionero->dni }}</td>
                    <td>{{ $camionero->nombre }}</td>
                    <td>{{ $camionero->telefono }}</td>
                    <td>{{ $camionero->direccion }}</td>
                    <td>{{ $camionero->salario }}</td>
                    <td>{{ $camionero->poblacion }}</td>
                    <td>
                        <a href="{{ route('camionero.edit', $camionero->id) }}">Editar</a>
                        <button data-bs-toggle="modal" data-bs-target="#modal{{ $camionero->id }}">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
