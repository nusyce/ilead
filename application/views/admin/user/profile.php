<div class="page-content">
<?php
?>
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('child_ajout_adherant_message'); ?></h6>
                    <form action="<?= base_url('Users/profile')?>" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><?php echo $this->lang->line('register_name_message'); ?></label>
                                    <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('register_name_message'); ?>" name="firstname" value="<?=$data->firstname ?>">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><?php echo $this->lang->line('register_lastname_message'); ?></label>
                                    <input type="text" class="form-control" name="lastname" placeholder="<?php echo $this->lang->line('register_lastname_message'); ?>" value="<?=$data->lastname ?>">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><?php echo $this->lang->line('register_mail_message'); ?></label>
                                    <input type="email" class="form-control" placeholder="email">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><?php echo $this->lang->line('child_profession_message'); ?></label>
                                    <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('child_profession_message'); ?>">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label"><?php echo $this->lang->line('child_ville_message'); ?></label>
                                    <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('child_ville_message'); ?>">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label"><?php echo $this->lang->line('child_etat_message'); ?></label>
                                    <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('child_etat_message'); ?>">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label"><?php echo $this->lang->line('child_zip_message'); ?></label>
                                    <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('child_zip_message'); ?>">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <input type="submit"  class="btn btn-primary submit" value=<?php echo $this->lang->line('child_save_message'); ?> />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>