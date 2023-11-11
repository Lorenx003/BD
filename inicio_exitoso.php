<link rel="stylesheet" type="text/css" href="inicio_exitoso.css">

<?php
session_start();
if (isset($_SESSION["correo"])) {

    $correo = $_SESSION["correo"];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "lorenx03";
    $password = "0303";
    $dbname = "usmfood";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta SQL para obtener más información del usuario
    $sql = "SELECT Nombre, AlmuerzosDisponibles, UltimoInicioSesion, ID, EstadoACT FROM Usuarios WHERE Correo = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $usuarioID = $row["ID"];

        $sql_update = "UPDATE Usuarios SET EstadoACT = 1 WHERE ID = $usuarioID";
        $conn->query($sql_update);

        $nombreCompleto = $row["Nombre"];
        $Almuerzosd = $row["AlmuerzosDisponibles"];
        $ultimasecion = $row["UltimoInicioSesion"];

        $_SESSION["AlmuerzosDisponibles"] = $Almuerzosd;
        $_SESSION["ID"] = $usuarioID;

        $sql_update = "UPDATE Usuarios SET UltimoInicioSesion = NOW() WHERE ID = $usuarioID";
        $conn->query($sql_update);

        $sql = "SELECT EstadoACT FROM Usuarios WHERE Correo = '$correo'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if($row["EstadoACT"] == 1 or $row["EstadoACT"] == "1"){
            $estado = "Activo";}
        else{
            $estado = "Inactivo";
        }
        // Muestra la información obtenida
        echo "<h1>Bienvenido, $nombreCompleto</h1>";
        echo "<p>Tu correo electrónico es: $correo</p>";
        echo "<p>Almuerzos disponibles: $Almuerzosd</p>";
        echo "<p>Ultimo inicio de sesion: $ultimasecion</p>";
        echo "<p>Estado del usuario: $estado</p>";
        echo "<a href='cerrar_sesion.php'>Cerrar Sesión</a>";
        echo " ";
        echo "<a href='borrar.php'>Borrar un usuario</a>";
        echo " ";
        echo "<a href='Comprar.php'>Comprar almuerzos</a>";
        echo " ";
        echo "<a href='Recetas.php'>Recetas</a>";
    } else {
        echo "No se encontró información adicional del usuario.";
    }

    $conn->close();
} else {
    header("Location: login.php");
}
?>
<title>Lobby</title>








