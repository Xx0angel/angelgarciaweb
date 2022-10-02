<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informacion de contacto nuevo prospecto</h1>
    <p>Una persona esta interesada en ti y quiere que la contactes!!</p>

    <p><strong>Nombre:</strong>{{$contacto['nombre']}}</p>
    <p><strong>Correo:</strong>{{$contacto['email']}}</p>
    <p><strong>Telefono:</strong>{{$contacto['telefono']}}</p>
    <p><strong>Comentario:</strong>{{$contacto['comentario']}}</p>
</body>
</html>