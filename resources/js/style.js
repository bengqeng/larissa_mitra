// add tooltips in pending request page
$(function () {
    $('[data-toggle2="tooltip"]').tooltip();
})

// add double click table in pending request page
$('tr.pendingRequest').dblclick(function () {
    $('#detailRequestModal').modal('show');
})
