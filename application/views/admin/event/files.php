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