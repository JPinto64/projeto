
$(document).ready(function() {
    $('.dataTable').DataTable({
    language: {
            search: 'Buscar:'
            , lengthMenu: 'Mostrar _MENU_ entradas'
            ,   emptyTable: 'Sem dados disponíveis'
            , info: 'Mostrando _START_ a _END_ de _TOTAL_ entradas'
             , paginate: {
                previous: 'Anterior',
                next: 'Próxima'
            }
        }
    });
});