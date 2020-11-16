<div class="page-content">
<?php
?>
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('edit_profile'); ?></h6>
                    <?php $this->load->view('admin/includes/message.php') ?>
                    <form action="<?= base_url('Users/profile')?>" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><?php echo $this->lang->line('register_name_message'); ?></label>
                                    <input required type="text" class="form-control" placeholder="<?php echo $this->lang->line('register_name_message'); ?>" name="firstname" value="<?=$data->firstname ?>">
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
                                    <input value="<?=$data->email ?>" name="email" type="email" class="form-control" placeholder="email">
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><?php echo $this->lang->line('child_profession_message'); ?></label>
                                    <input value="<?=$data->profession ?>" type="text" name="profession" class="form-control" placeholder="<?php echo $this->lang->line('child_profession_message'); ?>">
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label  for="exampleInputEmail1"><?php echo $this->lang->line('register_country_message'); ?></label>
                                    <select required style="color: black"  id="monselect" name="country_id">
                                        <?php



                                        foreach (countries() as $country) { ?>
                                            <option <?= $country['id'] == $data->country_id ? 'selected' : ''; ?>
                                                    value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
                                        <?php } ?>                                        </select>
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label"><?php echo $this->lang->line('register_whatapp_phone_message'); ?></label>
                                    <input value="<?=$data->whatsapp_phone ?>" required name="whatsapp_phone" type="text" class="form-control" placeholder="<?php echo $this->lang->line('register_whatapp_phone_message'); ?>">
                                </div>
                            </div><!-- Col -->
                           <!-- Col -->
                        </div><!-- Row -->
                        <input type="submit"  class="btn btn-primary submit" value=<?php echo $this->lang->line('child_save_message'); ?> />
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>