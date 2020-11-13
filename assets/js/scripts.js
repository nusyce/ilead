$('body').on('click', '#dopayer', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    $('#id_transaction').val(id)
    $('#addAttachment').modal('show');
})

$('body').on('click', '#addRespons', function (e) {
    e.preventDefault();
    $('#modal-responsable').modal('show');
})
function requestGet(uri, params) {
    params = typeof (params) == 'undefined' ? {} : params;
    var options = {
        type: 'GET',
        url: uri.indexOf(admin_url) > -1 ? uri : admin_url + uri
    };
    return $.ajax($.extend({}, options, params));
}

if ($(".country").length) {
    $(".country").select2();
}

if ($(".member").length) {
    $(".member").select2();
}
$('body').on('click', '.file-upload-browse', function (e) {
    var file = $(this).parent().parent().parent().find('.file-upload-default');
    file.trigger('click');
});
$('body').on('change', '.file-upload-default', function (e) {
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});

$('.delete').click(function () {
    var message = 'Confirm';

    return confirm(message);
})

$(document).ready(function () {
    $("#addEmail").on("click", function (e) {
        e.preventDefault();
        $("#more-email").append("<div class=\"form-group\">\n" +
            "                                                    <label>Ajouter une pièce</label>\n" +
            "                                                    <input type=\"file\" name=\"attachment[]\" class=\"file-upload-default\">\n" +
            "                                                    <div class=\"input-group col-xs-12\">\n" +
            "                                                        <input type=\"text\" class=\"form-control file-upload-info\"\n" +
            "                                                               disabled=\"\" placeholder=\"Ajouter une pièce jointe\">\n" +
            "                                                        <span class=\"input-group-append\">\n" +
            "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"file-upload-browse btn btn-primary\" type=\"button\">Selectionner</button>\n" +
            "\t\t\t\t\t\t\t\t\t\t\t</span>\n" +
            "                                                    </div>\n" +
            "                                                </div>");
    });
    $("#removeEmail").on("click", function (e) {
        e.preventDefault();
        $("#more-email").children().last().remove();
    });
});