<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?= base_url()?>assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url()?>assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?= base_url()?>assets/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= base_url()?>assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="" style="padding: 0">

        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-12" style="padding: 0">
                <div class="card">
                    <div class="row">
<div class="col-1"></div>
                        <div class="col-md-10 pl-md-0">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2">i<span>LEAD</span></a>
                                <h5 class="text-muted font-weight-normal mb-4"><?php echo $this->lang->line('register_message'); ?><?= $pack ?> PLAN</h5>
                                <form class="forms-sample" method="post" action="<?= base_url('auth/register')?>">
                                    <?php $this->load->view('admin/includes/message.php') ?>
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
                                               placeholder="<?php echo $this->lang->line('register_mail_message'); ?>">
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
                                        <input name="sponsor" id="sponsor" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="<?php echo $this->lang->line('register_sponsor_key_message'); ?>">
                                        <span style="color: #727cf5;" id ="sponsor_name"></span>
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
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Your Plan</label>
                                                <select style="color: black"  id="monselect" name="plan">
                                                    <?php foreach($plans as $plan) { ?>
                                                        <option <?=($plan['name']==$pack) ? 'selected':'' ?>  value="<?=$plan['id'] ?>"><?=$plan['name'] ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label class="checkbox">
                                            <input type="checkbox" class="">
                                            <?php echo $this->lang->line('remember_message'); ?>
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <input style="    width: 150px;" class="btn btn-primary text-white mr-2 mb-2 mb-md-0" type="submit" value="<?php echo $this->lang->line('register_sign_up_message'); ?>">

                                    </div>

                                    <a href="<?= base_url('auth/login')?>" class="d-block mt-3 text-muted"><?php echo $this->lang->line('register_already_message'); ?></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
        </div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="<?= base_url()?>assets/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url()?>assets/vendors/feather-icons/feather.min.js"></script>
	<script src="<?= base_url()?>assets/js/template.js"></script>
    <script>
        $(document).ready(function(){
            $("#sponsor").change(function(){

                $.get('<?=base_url("auth/get_sponsor_name")?>',
                    {
                        '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',
                        cle: $(this).val(),

                    },
                    function (data) {
                        $("#sponsor_name").html(data);

                    });
            });
        });

        </script>
	<!-- endinject -->
  <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>