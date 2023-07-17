document.addEventListener('DOMContentLoaded', function() {
    const participarButtons = document.querySelectorAll('.participar-button');
    const popup = document.getElementById('popup');
    const participarButton = document.getElementById('participar-button');
    const cancelarButton = document.getElementById('cancelar-button');

    participarButtons.forEach(button => {
        button.addEventListener('click', function() {
            const competicaoId = button.getAttribute('data-competicao-id');
            // Defina a ação do botão "Participar" com base no competicaoId
        });
    });

    // Defina a ação do botão "Participar" e "Cancelar" no popup
    participarButton.addEventListener('click', function() {
        // Ação quando o usuário clica em "Participar"
    });

    cancelarButton.addEventListener('click', function() {
        // Ação quando o usuário clica em "Cancelar"
    });
});
