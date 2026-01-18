<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <p>Has iniciado sesión correctamente.</p>
    <p>Bienvenido {{ Auth::user()->name }}</p>
    <a href="/logout">Cerrar Sesión</a><br>
</body>
</html>
