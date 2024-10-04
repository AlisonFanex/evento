<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php"); // Redireciona para a página de login se não estiver logado
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Evento</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Adicionar Evento</h1>
    </header>

    <form action="add_event.php" method="POST">
        <label for="nome">Nome do Evento:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required>
        
        <label for="importancia">Importância:</label>
        <select id="importancia" name="importancia" required>
            <option value="Alta">Alta</option>
            <option value="Média">Média</option>
            <option value="Baixa">Baixa</option>
        </select>

        <button type="submit">Adicionar Evento</button>
    </form>

    <a href="logout.php">Sair</a> <!-- Link para logout -->
</body>
</html>
