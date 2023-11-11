<!-- login.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles.css"> <!-- Vincula tu archivo CSS -->
</head>
<body>
<div class="container">
    <h1>Iniciar Sesión</h1>
    <form action="verificar_login.php" method="post">
        <label for="correo">Correo Electrónico:</label>
        <input type="text" name="correo" id="correo"><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena"><br>

        <input type="submit" value="Iniciar Sesión">

        <a href="registro.php">Registrarse</a>

    </form>

</div>
</body>
</html>