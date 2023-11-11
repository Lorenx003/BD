<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "lorenx03";
$password = "0303";
$dbname = "usmfood";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

// Consulta SQL para verificar el inicio de sesión
$sql = "SELECT * FROM Usuarios WHERE Correo = '$correo' AND Contrasena = '$contrasena'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION["correo"] = $correo; // Guarda el correo en la sesión

    header("Location: inicio_exitoso.php"); // Redirecciona a una página de inicio exitoso
} else {
    // Inicio de sesión fallido
    header("Location: inicio_fallido.php"); // Redirecciona a una página de inicio fallido
}

$conn->close();
