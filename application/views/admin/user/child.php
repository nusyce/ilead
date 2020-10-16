<div class="page-content">

    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('child_ajout_adherant_message'); ?></h6>
                    <form class="forms-sample" method="post" action="<?= base_url('auth/register')?>">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1"><?php echo $this->lang->line('register_name_message'); ?></label>
                                    <input name="name" type="text" class="form-control" id="exampleInputUsername1"
                                           autocomplete="name" placeholder="<?php echo $this->lang->line('register_name_message'); ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1"><?php echo $this->lang->line('register_lastname_message'); ?></label>
                                    <input name="lastname" type="text" class="form-control" id="exampleInputUsername1"
                                           autocomplete="name" placeholder="<?php echo $this->lang->line('register_lastname_message'); ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo $this->lang->line('register_mail_message'); ?></label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo $this->lang->line('register_whatapp_phone_message'); ?></label>
                                    <input name="whatsapp" type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="<?php echo $this->lang->line('register_whatapp_phone_message'); ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo $this->lang->line('register_country_message'); ?></label>
                                    <select style="color: black"  id="monselect" name="country">
                                        <?php foreach(countries() as $country) { ?>
                                            <option value="<?=$country['id'] ?>"><?=$country['name'] ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo $this->lang->line('register_cluster_message'); ?></label>
                                    <select style="color: black"  id="monselect" name="cluster">
                                        <?php foreach(clusters() as $cluster) { ?>
                                            <option  value="<?=$cluster['id'] ?>"><?=$cluster['name'] ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo $this->lang->line('register_sponsor_key_message'); ?></label>
                                    <input disabled name="sponsor" value="<?=get_user_cle()?>" id="sponsor" type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="<?php echo $this->lang->line('register_sponsor_key_message'); ?>">
                                    <span style="color: #727cf5;" id ="sponsor_name"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><?php echo $this->lang->line('password_message'); ?></label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                           placeholder="<?php echo $this->lang->line('password_message'); ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><?php echo $this->lang->line('register_sex_message'); ?></label>
                                    <select style="color: black"  id="monselect" name="sexe">

                                        <option value="Masculin"><?php echo $this->lang->line('register_masculin_message'); ?></option>
                                        <option value="Feminin"><?php echo $this->lang->line('register_feminin_message'); ?></option>


                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="mt-3">
                            <input style="    width: 150px;" class="btn btn-primary text-white mr-2 mb-2 mb-md-0" type="submit" value="<?php echo $this->lang->line('child_message'); ?>">

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>