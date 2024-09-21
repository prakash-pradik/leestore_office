/*
 *  Document   : tablesDatatables.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Tables Datatables page
 */

var TablesDatatables = function () {

    return {
        init: function () {
            /* Initialize Bootstrap Datatables Integration */
            App.datatables();

            /* Initialize Datatables */
            $('#example-datatable').dataTable({
                columnDefs: [{ orderable: false, targets: [1, 5] }],
                pageLength: 10,
                lengthMenu: [[10, 20, 30, -1], [10, 20, 30, 'All']]
            });

            $('#users-datatable').dataTable({
                columnDefs: [{ orderable: false, targets: [0, 1, 2] }],
                pageLength: 10,
                lengthMenu: [[10, 20, 30, -1], [10, 20, 30, 'All']]
            });

            $('#income-datatable').dataTable({
                columnDefs: [{ orderable: false, targets: [0, 1, 2, 3] }],
                pageLength: 10,
                lengthMenu: [[10, 20, 30, -1], [10, 20, 30, 'All']]
            });

            $('#outcome-datatable').dataTable({
                columnDefs: [{ orderable: false, targets: [0, 1, 2, 3] }],
                pageLength: 10,
                lengthMenu: [[10, 20, 30, -1], [10, 20, 30, 'All']]
            });

            $('#advance-datatable').dataTable({
                columnDefs: [{ orderable: false, targets: [1, 2, 3] }],
                pageLength: 5,
                lengthMenu: [[5, 10, 20, 30, -1], [5, 10, 20, 30, 'All']]
            });

            $('#sales-datatable').dataTable({
                columnDefs: [{ orderable: false, targets: [1, 2, 3] }],
                pageLength: 5,
                lengthMenu: [[5, 10, 20, 30, -1], [5, 10, 20, 30, 'All']]
            });

            /* Add placeholder attribute to the search input */
            $('.dataTables_filter input').attr('placeholder', 'Search');
        }
    };
}();