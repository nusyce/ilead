<div class="modal fade" id="edittask" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="exampleModalLabel">  <?php echo $title?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if (isset($task)) {
                    $id=$task->id;
                }
                else {
                    $id="";}?>
                <form role="form" autocomplete="off" accept-charset="utf-8" method="post" enctype="multipart/form-data" action="<?= base_url('task/save/'.$id) ?>" >
                    <label for="name"><?php echo $this->lang->line('nom_la_tache'); ?></label>
                    <input type="text" value="<?php if (isset($task)) echo $task->name; ?>" name="name" class="form-control" id="name"><br>

                    <input type="hidden" name="id" id="id" value="<?php if (isset($task)) echo $task->id; ?>">

                    <!--<div class="row">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-container">

                                            <div class="form-group">
                                                <button id="addEmail" class="btn btn-primary"><?php echo $this->lang->line('add_message'); ?></button>
                                                <button id="removeEmail" class="btn btn-warning"><?php echo $this->lang->line('delete_last_field_message'); ?>
                                                </button>
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('add_file_message'); ?></label>
                                                <input type="file" name="attachment[]" required
                                                       class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info"
                                                           disabled="" placeholder="<?php echo $this->lang->line('add_file_message'); ?>">
                                                    <span class="input-group-append">
												<button class="file-upload-browse btn btn-primary" type="button"><?php echo $this->lang->line('select_file_message'); ?></button>
											</span>
                                                </div>
                                            </div>
                                            <div id="more-email"></div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>-->


                    <div class="text-right">
                        <button type="button" class="btn btn-secondary "
                                data-dismiss="modal"><?php echo $this->lang->line('transaction_fermer_message'); ?></button>
                        <button type="submit"
                                class="btn btn-primary deleted"
                                data-message="Confirmez vous ce paiement?"><?php echo $this->lang->line('transaction_valider_message'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>