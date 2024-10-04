<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Professor</title>
</head>
<body>
    <h2>Painel de Controle - Professor</h2>
    <form action="adicionar_evento.php" method="POST">
        <label for="nome">Nome do Evento:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="data">Data do Evento:</label>
        <input type="date" id="data" name="data" required>

        <label for="importancia">Importância:</label>
        <select id="importancia" name="importancia">
            <option value="Alta">Alta</option>
            <option value="Média">Média</option>
            <option value="Baixa">Baixa</option>
        </select>

        <button type="submit">Adicionar Evento</button>
    </form>
</body>
</html>
