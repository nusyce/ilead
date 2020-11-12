<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>iLead Globe</title>
	<!-- core:css -->
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
			<div class="page-content d-flex align-items-center justify-content-center">

        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-6 mx-auto">
                <div class="card">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2">i<span>LEAD</span></a>
                                <h5 class="text-muted font-weight-normal mb-4"> <?php echo $this->lang->line('welcome_message'); ?> </h5>
                                <form class="forms-sample" action="<?= base_url('auth/login')?>" method="post">
                                    <?php $this->load->view('admin/includes/message.php') ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('key_message'); ?></label>
                                        <input name="key" type="text" class="form-control" id="exampleInputEmail1"
                                               placeholder="<?php echo $this->lang->line('key_message'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"><?php echo $this->lang->line('password_message'); ?></label>
                                        <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                                               autocomplete="current-password" placeholder="<?php echo $this->lang->line('password_message'); ?>">
                                    </div>
                                    <div class="form-check form-check-flat form-check-primary">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                            <?php echo $this->lang->line('remember_message'); ?>
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <input class="btn btn-primary text-white mr-2 mb-2 mb-md-0" type="submit" value="<?php echo $this->lang->line('sign_message'); ?>">

                                    </div>
                                    <a href="<?= base_url('auth/register')?>" class="d-block mt-3 text-muted"><?php echo $this->lang->line('not_user_message'); ?></a>
                                    <a href="<?= base_url('auth/login_key')?>" class="d-block mt-3 text-muted"><?php echo $this->lang->line('register_with_key'); ?></a>
                                </form>
                            </div>
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
	<!-- endinject -->
  <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>