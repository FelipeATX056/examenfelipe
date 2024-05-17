<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('camionero.store')}}" method="POST">
        @csrf
        <label for="">
            <input type="text" placeholder="dni" name="dni">
        </label>
        <br>
        <label for="">
            <input type="text" placeholder="nombre" name="nombre">
        </label>
        <br>
        <label for="">
            <input type="text" placeholder="telefono" name="telefono">
        </label>
        <br>
        <label for="">
            <input type="text" placeholder="dirección" name="direccion">
        </label>
        <br>
        <label for="">
            <input type="number" placeholder="salario" name="salario">
        </label>
        <br>
        <label for="">
            <input type="text" placeholder="población" name="poblacion">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>