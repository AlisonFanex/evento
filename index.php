<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Selecionar os eventos
$sql = "SELECT nome, data, importancia FROM eventos ORDER BY data";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário Escolar e Atividades</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link para o CSS -->
</head>
<body>
    <header>
        <h1>Calendário Escolar e Atividades</h1>
    </header>

    <section class="calendar-section">
        <h2>Datas Importantes</h2>
        <ul id="event-list">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . $row['nome'] . " - " . date('d/m/Y', strtotime($row['data'])) . " (" . $row['importancia'] . ")</li>";
                }
            } else {
                echo "<li>Não há eventos cadastrados</li>";
            }
            $conn->close();
            ?>
        </ul>
    </section>
</body>
</html>
