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

$('.delete').click(function () {
    var messages = $(this).data('message');
    return confirm(messages);
})

$(document).on('click', '.btn-add', function (e) {
    e.preventDefault();

    var dynaForm = $('.dynamic-wrap form:first'),
        currentEntry = $(this).parents('.entry:first'),
        newEntry = $(currentEntry.clone()).appendTo(dynaForm);

    newEntry.find('input').val('');
    dynaForm.find('.entry:not(:last) .btn-add')
        .removeClass('btn-add').addClass('btn-remove')
        .removeClass('btn-success').addClass('btn-danger')
        .html('<i class="btn-icon-prepend iconn" data-feather="minus"></i>');
}).on('click', '.btn-remove', function (e) {
    $(this).parents('.entry:first').remove();

    e.preventDefault();
    return false;
});