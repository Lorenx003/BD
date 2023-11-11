<!-- registro.php -->
<link rel="stylesheet" type="text/css" href="registro.css">

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
<h2>Registro de Usuario</h2>
<form action="procesar_registro.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" required><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required><br>

    <input type="submit" value="Registrarse">
</form>
</body>
</html>

