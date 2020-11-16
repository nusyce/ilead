
<div class="page-content app-file-content ">
    <?php $this->load->view('admin/event/nav'); ?>
    <div class="row grid-margin" >
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Liste des fichiers à utiliser pendant la retraite</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                         <form action="#" class="dropzone dropzone-area" id="dpz-remove-all-thumb">
                            <div class="dz-message">Déposer les fichies à importer ici</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-margin">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="card border shadow-none mb-1 app-file-info">
                    <div class="card-content">
                        <div class="app-file-content-logo card-img-top">
                            <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                            <img class="d-block mx-auto" src="<?= base_url('assets/images/icon/psd.png')?>" height="38" width="30" alt="Card image cap">
                        </div>
                        <div class="card-body p-50">
                            <div class="app-file-details">
                                <div class="app-file-name font-size-small font-weight-bold">Logo.psd</div>
                                <div class="app-file-size font-size-small text-muted mb-25">10.6kb</div>
                                <div class="app-file-type font-size-small text-muted">Photoshop File</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border shadow-none mb-1 app-file-info">
                    <div class="card-content">
                        <div class="app-file-content-logo card-img-top">
                            <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                            <img class="d-block mx-auto" src="<?= base_url('assets/images/icon/sketch.png')?>" height="38" width="30" alt="Card image cap">
                        </div>
                        <div class="card-body p-50">
                            <div class="app-file-details">
                                <div class="app-file-name font-size-small font-weight-bold">Logo_Design.sketch</div>
                                <div class="app-file-size font-size-small text-muted mb-25">256.5kb</div>
                                <div class="app-file-type font-size-small text-muted">Sketch File</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border shadow-none mb-1 app-file-info">
                    <div class="card-content">
                        <div class="app-file-content-logo card-img-top">
                            <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                            <img class="d-block mx-auto" src="<?= base_url('assets/images/icon/doc.png')?>" height="38" width="30" alt="Card image cap">
                        </div>
                        <div class="card-body p-50">
                            <div class="app-file-details">
                                <div class="app-file-name font-size-small font-weight-bold">Bootstrap.xyz</div>
                                <div class="app-file-size font-size-small text-muted mb-25">0.0kb</div>
                                <div class="app-file-type font-size-small text-muted">Unknown File</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border shadow-none mb-1 app-file-info">
                    <div class="card-content">
                        <div class="app-file-content-logo card-img-top">
                            <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                            <img class="d-block mx-auto" src="<?= base_url('assets/images/icon/pdf.png')?>" height="38" width="30" alt="Card image cap">
                        </div>
                        <div class="card-body p-50">
                            <div class="app-file-details">
                                <div class="app-file-name font-size-small font-weight-bold">Read_Me.pdf</div>
                                <div class="app-file-size font-size-small text-muted mb-25">10.5kb</div>
                                <div class="app-file-type font-size-small text-muted">PDF File</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/vendors/js/extensions/dropzone.min.js')?>"></script>
    <script>

        /************************************************
         *               Remove Thumbnail                *
         ************************************************/
        Dropzone.options.dpzRemoveThumb = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 1, // MB
            addRemoveLinks: true,
            dictRemoveFile: " Trash"
        }
    </script>
</div>




