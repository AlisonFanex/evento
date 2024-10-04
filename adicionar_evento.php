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

// Recebendo os dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $importancia = $_POST['importancia'];

    // Inserindo no banco de dados
    $sql = "INSERT INTO eventos (nome, data, importancia) VALUES ('$nome', '$data', '$importancia')";

    if ($conn->query($sql) === TRUE) {
        echo "Evento adicionado com sucesso!";
        header('Location: dashboard.php');
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
