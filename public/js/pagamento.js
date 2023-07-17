window.addEventListener('load', function() {
    var rows = document.querySelectorAll('.btn-pagar');
    rows.forEach(function(row) {
        row.addEventListener('click', function() {
            var divPopup=document.getElementById('id-popup');
            divPopup.style.display = 'block';

            var valorReferencia=document.getElementById('referencia');
            valorReferencia.innerText= row.getAttribute('data-referencia');

            var valorUserID=document.getElementById('id-userid');
            valorUserID.value= row.getAttribute('data-referencia');

            var estadoPagamento = row.getAttribute('data-referencia');
            if (estadoPagamento === 'Não pago') {
                // Obter o ID do pagamento
                var pagamentoId = row.getAttribute('data-pagamento-id');
            }
        });
    });
    var rows = document.querySelectorAll('.cancelar');
    rows.forEach(function(row) {
        row.addEventListener('click', function() {
            var divPopup=document.getElementById('id-popup');
            divPopup.style.display = 'none';
        });
    });
});
