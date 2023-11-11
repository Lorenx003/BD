<?php

$correo = $_POST["correo"];
$nombre = $_POST["nombre"];
$contrasena = $_POST["contrasena"];

$servername = "localhost";
$username = "lorenx03";
$password = "0303";
$dbname = "usmfood";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM Usuarios WHERE ID = (SELECT MAX(ID) FROM Usuarios)";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$usuarioID = $row["ID"] + 1;

$sql = "INSERT INTO Usuarios (ID, Nombre, Correo, Contrasena, AlmuerzosDisponibles, UltimoInicioSesion, EstadoACT) VALUES ('$usuarioID', '$nombre', '$correo', '$contrasena', 0, '0', '0')";

//crear boton para volver a la pagina de inicio

if ($conn->query($sql) === TRUE) {
    echo "Usuario creado exitosamente";
    echo "<a href='login.php'>Iniciar Sesion</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
