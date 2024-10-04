<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $class = htmlspecialchars($_POST['class']);
    $activity = htmlspecialchars($_POST['activity']);
    
    // Definindo o e-mail para o qual será enviado
    $to = "ryanalison2020@gmail.com";
    $subject = "Inscrição em Atividade Extracurricular";
    
    // Conteúdo do e-mail
    $message = "
    <html>
    <head>
        <title>Inscrição em Atividade Extracurricular</title>
    </head>
    <body>
        <h2>Nova Inscrição de Atividade Extracurricular</h2>
        <p><strong>Nome do Aluno:</strong> {$name}</p>
        <p><strong>Turma:</strong> {$class}</p>
        <p><strong>Atividade Selecionada:</strong> {$activity}</p>
    </body>
    </html>
    ";

    // Cabeçalhos do e-mail
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <nao-responda@escola.com>' . "\r\n";

    // Enviando o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Inscrição enviada com sucesso!";
    } else {
        echo "Erro ao enviar inscrição.";
    }
}
?>
