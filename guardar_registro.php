<?php
// Configura los datos de conexión
$conexion = new mysqli("localhost", "root", "", "banda_itace");

if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
}

// Capturar datos del formulario
$nombre = $_POST['nombre'];
$grupo = $_POST['grupo'];
$especialidad = $_POST['especialidad'];

// Insertar datos
$sql = "INSERT INTO registros (nombre, grupo, especialidad) VALUES ('$nombre', '$grupo', '$especialidad')";

if ($conexion->query($sql) === TRUE) {
    echo "<h2 style='text-align:center;color:#7211b3;'>Registro guardado correctamente.</h2>";
    echo "<p style='text-align:center;'><a href='registro.html'>Volver al formulario</a></p>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
