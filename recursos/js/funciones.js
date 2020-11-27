function DatosTabla(nombre, page, nombrexls, orientacion) {
    return nombre.DataTable({
        dom: '<"top"lBf>rt<"bottom"ip><"clear">',
        destroy: true,
        language: {
            "emptyTable": "No hay datos disponibles en la tabla.",
            "lengthMenu": " _MENU_ ",
            "zeroRecords": "No se encontraron resultados",
            "info": "Del _START_ al _END_ de _TOTAL_ ",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "loadingRecords": "Cargando...",
            "sSearch": "Buscar",
            "searchPlaceholder": "Buscar Registro",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        },
        lengthMenu: [
            [5, 10, 20, 25, 50, -1],
            [5, 10, 25, 50, "Todos"]
        ],
        iDisplayLength: 5,
        bJQueryUI: false,
        buttons: [

            {
                extend: 'excelHtml5',
                text: '<button class="btn btn-success btn-sm"><i class="fas fa-file-excel"></i></button>',
                titleAttr: 'Exportar a Excel',
                title: nombrexls
            },
            {
                extend: 'pdfHtml5',
                text: '<button class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>',
                pageSize: page,
                orientation: orientacion,
                download: 'open'
            }
            
        ]
    });
    $('label').addClass('form-inline');
    $('select, input[type="search"]').addClass('form-control input-sm');
}