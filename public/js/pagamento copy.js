window.addEventListener('load', function() {
    alert('uma mensagem');
    var rows = document.querySelectorAll('.pagamento-row');
    rows.forEach(function(row) {
        row.addEventListener('click', function() {
            var estadoPagamento = row.getAttribute('data-estado-pagamento');
            if (estadoPagamento === 'Não pago') {
                // Obter o ID do pagamento
                var pagamentoId = row.getAttribute('data-pagamento-id');

                // Lógica para mostrar o popup e realizar o pagamento

            }
        });
    });
});
