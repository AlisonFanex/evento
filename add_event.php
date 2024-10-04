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

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $importancia = $_POST['importancia'];

    // Insere o evento no banco de dados
    $sql = "INSERT INTO eventos (nome, data, importancia) VALUES ('$nome', '$data', '$importancia')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Evento adicionado com sucesso!";
        // Redireciona após adicionar
        header("Location: index.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
