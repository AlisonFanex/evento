<?php
session_start(); // Inicia a sessão

// Verificação simples de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Substitua por sua lógica de autenticação
    if ($usuario === 'professor' && $senha === 'senha') { // Aqui você pode modificar para verificar com o banco de dados
        $_SESSION['loggedin'] = true; // Define a sessão
        header("Location: form_event.php"); // Redireciona para a página de adicionar eventos
        exit;
    } else {
        $error = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Professor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Login do Professor</h1>
    </header>

    <form action="" method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Entrar</button>
    </form>

    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
