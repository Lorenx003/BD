<?php
// Conexión a la base de datos (ajusta según tu configuración)
$servername = "localhost";
$username = "lorenx03";
$password = "0303";
$dbname = "usmfood";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener los nombres de las recetas
$sql = "SELECT Nombre FROM Recetas";
$result = $conn->query($sql);

$nombresRecetas = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombresRecetas[] = $row["Nombre"];
    }
}

$conn->close();

// Codificar a formato JSON para enviar a JavaScript
echo json_encode($nombresRecetas);
?>
