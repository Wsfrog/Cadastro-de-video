<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fallout";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
$conn->close();
?>
