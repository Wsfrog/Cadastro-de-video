<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "fallout";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['videoName'];
    $link = $_POST['videoLink'];

    parse_str(parse_url($link, PHP_URL_QUERY), $query);
    $videoId = $query['v'];
    $embedLink = "https://www.youtube.com/embed/" . $videoId;

    $sql = "INSERT INTO videos (nome, link) VALUES ('$nome', '$embedLink')";
    if ($conn->query($sql) === TRUE) {
        header("Location: videos.php");
        exit(); 
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
