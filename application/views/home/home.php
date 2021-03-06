<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iLEAD</title>
    <!-- core:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/demo_1/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png"/>
</head>
<body>
<div class="main-wrapper">
    <div class="page-wrapper full-page">
        <div class="">

            <div class="row w-100" style="padding: 0;padding: 0;
    margin-right: 0px;
    margin-left: 0px;">
                <div class="col-md-12" style="padding: 0">
                    <nav id="topmenu" class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="<?=base_url()?>">iLEAD</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                               <!-- <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>-->
                            </ul>
                            <div class="form-inline my-2 my-lg-0">
                                <?php if (get_user_lang() == 'english'): ?>
                                    <a href="<?= base_url('lang/?lang=fr&t=h') ?>" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="<?php echo $this->lang->line('asides_french_message'); ?>" id="fr"></i></a>
                                <?php else: ?>
                                    <a href="<?= base_url('lang/?lang=en&t=h') ?>" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="<?php echo $this->lang->line('asides_message'); ?>" id="en"></i></a>

                                <?php endif; ?>
                            </div>
                        </div>
                    </nav>
                    <h4 class="text-center mb-3 mt-4"><?php echo $this->lang->line('home_package'); ?></h4>
                    <p class="text-muted text-center mb-4 pb-2"><?php echo $this->lang->line('home_features'); ?><br>
                        <a style="" href="<?= base_url('auth/login')?>" class="d-block mt-3 text-muted"><?php echo $this->lang->line('register_already_message'); ?></a></p>

                    <div class="container">

                        <div class="row">
                            <?php foreach ($plans as $plan) { ?>
                                <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="text-center text-uppercase mt-3 mb-4"><?= $plan['name'] ?></h5>
                                            <i data-feather="award"
                                               class="text-primary icon-xxl d-block mx-auto my-3"></i>
                                            <h4 class="text-center font-weight-light"><?= __price($plan['price']) ?></h4>

                                            <h5 class="text-center font-weight-light"><?= __price($plan['price_dollard'],'DOLLARS') ?></h5>
                                            <h5 class="text-center font-weight-light"><?= __price($plan['price_euro'],'EURO') ?></h5>
                                            <!--<p class="text-muted text-center mb-4 font-weight-light">per month</p>-->
                                            <!--<h6 class="text-muted text-center mb-4 font-weight-normal">Up to 25 units</h6>-->
                                            <br>
                                            <?= $this->lang->line('desc_pack'.$plan['id']) ?>

                                            <a href="<?php echo base_url('auth/register?pack='.$plan['name'] ) ?>" class="btn btn-primary d-block mx-auto mt-4"><?php echo $this->lang->line('home_subscribe_message'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="<?= base_url() ?>assets/vendors/core/core.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url() ?>assets/vendors/feather-icons/feather.min.js"></script>
    <script src="<?= base_url() ?>assets/js/template.js"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <!-- end custom js for this page -->
</body>
</html>