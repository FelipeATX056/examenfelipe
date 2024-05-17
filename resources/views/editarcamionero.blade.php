<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('camionero.update',$camionero->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">
            <input type="text" name="dni" value="{{$camionero->dni}}">
        </label>
        <br>
        <label for="">
            <input type="text" name="nombre" value="{{$camionero->nombre}}">
        </label>
        <br>
        <label for="">
            <input type="text" name="telefono" value="{{$camionero->telefono}}">
        </label>
        <br>
        <label for="">
            <input type="text" name="direccion" value="{{$camionero->direccion}}">
        </label>
        <br>
        <label for="">
            <input type="number" name="salario" value="{{$camionero->salario}}">
        </label>
        <br>
        <label for="">
            <input type="text" name="poblacion" value="{{$camionero->poblacion}}">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>