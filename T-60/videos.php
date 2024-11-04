<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Vídeos Cadastrados</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="index.html">Home</a>
                <a class="nav-item nav-link active" href="videos.php">Vídeos</a>
                <a class="nav-item nav-link" href="formulario.html">Cadastrar Vídeo</a>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        <h2>Vídeos Cadastrados</h2>
        <div class="row">
            <?php
            $servername = "localhost"; 
            $username = "root"; 
            $password = ""; 
            $dbname = "fallout"; 

           
            $conn = new mysqli($servername, $username, $password, $dbname);

          
            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

         
            $sql = "SELECT nome, link FROM videos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-4'>";
                    echo "<div class='card bg-dark text-white mb-3'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . htmlspecialchars($row['nome']) . "</h5>";
                    echo "<iframe src='" . htmlspecialchars($row['link']) . "' frameborder='0' allowfullscreen style='width: 100%; height: 200px;'></iframe>";
                    echo "</div></div></div>";
                }
            } else {
                echo "<p>Nenhum vídeo cadastrado.</p>";
            }

            
            $conn->close();
            ?>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
