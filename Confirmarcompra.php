<?php

session_start();

$servername = "localhost";
$username = "lorenx03";
$password = "0303";
$dbname = "usmfood";

$conn = new mysqli($servername, $username, $password, $dbname);

isset($_SESSION["correo"]) ? $correo = $_SESSION["correo"] : $correo = "";

$comprar = $_POST["comprar"];
$comprar = $comprar + $_SESSION["AlmuerzosDisponibles"];
$ID = $_SESSION["ID"];

echo $comprar;

$sql_update = "UPDATE Usuarios SET AlmuerzosDisponibles = $comprar  WHERE ID = $ID";
$conn->query($sql_update);

//crear boton para volver a la pagina de inicio

if ($conn->query($sql_update) === TRUE) {
    echo " Almuerzos Comprados con exito     ";
    echo "<a href='inicio_exitoso.php'>Volver a la pagina de inicio</a>";
} else {
    echo "Error: " . $sql_update . "<br>" . $conn->error;
}

?>