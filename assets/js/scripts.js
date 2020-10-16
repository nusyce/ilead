$('body').on('click', '#dopayer', function (e) {
    e.preventDefault();
    $('#addAttachment').modal('show');
})

$('body').on('click', '#addRespons', function (e) {
    e.preventDefault();
    $('#modal-responsable').modal('show');
})

if ($(".country").length) {
    $(".country").select2();
}

if ($(".member").length) {
    $(".member").select2();
}