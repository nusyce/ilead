
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
                         <form action="#" class="dropzone dropzone-area" id="my-awesome-dropzone">
                            <div class="dz-message">Déposer les fichies à importer ici</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-margin" id="file_zone">
        <div class="row">
            <?php foreach ($files as $file){ ?>
            <div class="col-md-3 col-6">
                <div class="card border shadow-none mb-1 app-file-info">
                    <div class="card-content">
                        <div class="app-file-content-logo card-img-top">
                            <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                            <?php if (strpos($file['file_type'], 'image')!== false){?>
                            <img class="d-block mx-auto" src="<?= base_url('assets/images/icon/image.jpg')?>" height="38" width="30" alt="Card image cap">
                            <?php } ?>
                            <?php if (strpos($file['file_type'], 'pdf')!== false){?>
                                <img class="d-block mx-auto" src="<?= base_url('assets/images/icon/pdf.png')?>" height="38" width="30" alt="Card image cap">
                            <?php } ?>

                        </div>
                        <div class="card-body p-50">
                            <div class="app-file-details">
                                <div class="app-file-name font-size-small font-weight-bold" style="text-align: center"><?=$file['patch']?></div>
                                <?php if (strpos($file['file_type'], 'image')!== false){?>
                                    <img class="d-block mx-auto" src="<?= base_url('uploads/events/'.$event->id.'/'.$file['patch'])?>" height="70"  alt="Card image cap">
                                <?php } ?>
                                <div class="app-file-type font-size-small text-muted" style="text-align: center"><?=$file['file_type']?></div>
                               <p style="text-align: center"><a href="<?= base_url('event/delete_event_file/' .$file['id'].'/'.$event->id) ?>"
                                   class="delete text-danger">Supprimer</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
    <script src="<?= base_url('assets/js/drop/dropzone.js')?>"></script>
    <script>
        Dropzone.options.myAwesomeDropzone = {
            init: function() {

                this.on('complete', function () {
                    var id = "<?php echo $event->id ?>";
                        requestGet('event/get_file/'+id).done(function (response) {
                            $('#file_zone').html(response)
                        });

                });
            }
        };
    </script>
</div>




