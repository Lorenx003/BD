<?php

$correo = $_POST["usuario"];
$contraseña = $_POST["contraseña"];


$servername = "localhost";
$username = "lorenx03";
$password = "0303";
$dbname = "usmfood";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE FROM Usuarios WHERE Correo = '$correo'";
$conn->query($sql);

//crear boton para volver a la pagina de inicio

if ($conn->query($sql) === TRUE) {
    echo "Usuario borrado exitosamente     ";
    echo "<a href='login.php'>Volver a la pagina de inicio</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
