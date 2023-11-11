<!-- borrar.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar sesión</title>
    <link rel="stylesheet" href="styles.css"> <!-- Vincula tu archivo CSS -->
</head>
<body>
<div class="container">
    <h1>Borrar Sesión</h1>
    <form action="confirmarborrado.php" method="post">

        <label for="usuario">Ingrese el correo que decea borrar:</label>
        <input type="text" name="usuario" id="usuario"><br>

        <label for="contraseña">Contraseña:</label>
        <input type="text" name="contraseña" id="contraseña"><br>

        <input type="submit" value="Borrar cuenta">

    </form>

</div>
</body>
</html>
