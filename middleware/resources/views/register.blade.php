<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Registro</h1>
    <form method="POST" action="/register">
        <!-- genera un token para evitar que el middleware VerifyCsrfToken que hay por defecto en el post cause un error /vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php -->
        @csrf
        <div>
            <label>Nombre:</label>
            <input type="text" name="name" required>
        </div><br>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div><br>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div><br>
        <button type="submit">Registrarse</button>
    </form>
    <br>
    <a href="/">Inicia sesión</a>
</body>
</html>
