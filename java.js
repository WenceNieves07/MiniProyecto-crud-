$(document).ready(function() {
    // Inicialmente ocultar la tabla usando visibility
    $('#tabla').hide();

    // Inicializar DataTables cuando la tabla se muestre
    var tableInitialized = false;

    // Mostrar/ocultar tabla con animación suave
    $('#toggleTabla').on('click', function() {
        if (!tableInitialized && $('#tabla').is(':hidden')) {
            // Si la tabla está oculta, inicializa DataTables y luego muestra la tabla
            $('#tabla').fadeIn('slow', function() {
                // Inicializa DataTables después de que se haya mostrado
                $('.table').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
                    },
                    "pageLength": 5, // Mostrar 5 registros al inicio
                    "lengthMenu": [5, 10, 25, 50] // Opciones de registros
                });
                tableInitialized = true; // Marcar que la tabla ya está inicializada
            });
        } else {
            // Si la tabla ya está inicializada, solo ocultar o mostrar sin volver a inicializar
            $('#tabla').fadeToggle('slow');
        }
    });
});
