<?php
session_start();
session_destroy(); // Destruye la sesión actual

$servername = "localhost";
$username = "lorenx03";
$password = "0303";
$dbname = "usmfood";

isset($_SESSION["correo"]) ? $correo = $_SESSION["correo"] : $correo = "";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT ID, EstadoACT FROM Usuarios WHERE Correo = '$correo'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$usuarioID = $row["ID"];

$sql_update = "UPDATE Usuarios SET EstadoACT = 0 WHERE ID = $usuarioID";
$conn->query($sql_update);

header("Location: login.php"); // Redirecciona al inicio de sesión
?>