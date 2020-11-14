$('body').on('click', '#dopayer', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    $('#id_transaction').val(id)
    $('#addAttachment').modal('show');
})
var doUpload = function(event){

    var input = event.target;
    var reader = new FileReader();


    reader.onload = function(){
        var arrayBuffer = reader.result;
        var arrayBufferView = new Uint8Array( arrayBuffer );
        var blob = new Blob( [ arrayBufferView ], { type: input.files[0].type } );
        var urlCreator = window.URL || window.webkitURL;
        var imageUrl = urlCreator.createObjectURL( blob );

        $.ajax({
            url: "https://api-content.dropbox.com/1/files_put/auto/YourDirectory/" + input.files[0].name,
            headers: {
                'Authorization':'Bearer ',
                'Content-Length':input.files[0].size
            },
            crossDomain: true,
            crossOrigin: true,
            type: 'PUT',
            contentType: input.files[0].type,
            data: arrayBuffer,
            dataType: 'json',
            processData: false,
            xhr: function()
            {
                var xhr = new window.XMLHttpRequest();
                //Upload progress, litsens to the upload progress
                //and get the upload status
                xhr.upload.addEventListener("progress", function(evt){
                    if (evt.lengthComputable) {
                        var percentComplete = parseInt( parseFloat(evt.loaded / evt.total) * 100);
                        //Do something with upload progress
                        $('#uploadProgress').html(percentComplete);
                        $('#uploadProgressBar').css('width',percentComplete+'%');
                    }
                }, false);
            },
            beforeSend: function(){
                // Things you do before sending the file
                // like showing the loader GIF
            },
            success : function(result) {
                // Display the results from dropbox after upload
                // Other stuff on complete
            },

        });
    }
    reader.readAsArrayBuffer(input.files[0]);
}
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