// script.js
document.getElementById('activity-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Captura os dados do formulário
    const name = document.getElementById('name').value;
    const activity = document.getElementById('activity').value;

    // Exibe a mensagem de confirmação
    const confirmationMessage = `Obrigado, ${name}! Você se inscreveu na atividade: ${activity}.`;
    document.getElementById('confirmation-message').textContent = confirmationMessage;
    document.getElementById('confirmation').classList.remove('hidden');

    // Limpa o formulário
    document.getElementById('activity-form').reset();
});
