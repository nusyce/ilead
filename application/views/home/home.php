<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
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
        <div class="page-content d-flex align-items-center justify-content-center" style="padding: 0">

            <div class="row w-100 mx-0 auth-page">
                <div class="col-md-12" style="padding: 0">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center mb-3 mt-4">Choose a plan</h4>
                            <p class="text-muted text-center mb-4 pb-2">Choose the features and functionality your team need today. Easily upgrade as your company grows.</p>
                            <div class="container">
                                <div class="row">
                                    <?php foreach($plans as $plan) { ?>
                                    <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="text-center text-uppercase mt-3 mb-4"><?= $plan['name'] ?></h5>
                                                <i data-feather="award" class="text-primary icon-xxl d-block mx-auto my-3"></i>
                                                <h3 class="text-center font-weight-light"><?= number_format($plan['price'])  ?> FCFA</h3>
                                                <!--<p class="text-muted text-center mb-4 font-weight-light">per month</p>-->
                                                <!--<h6 class="text-muted text-center mb-4 font-weight-normal">Up to 25 units</h6>-->
                                                <?= $plan['description']  ?>


                                                <a href="<?php echo base_url('auth/register?pack='.$plan['name'] ) ?>" class="btn btn-primary d-block mx-auto mt-4">Subscribe</a>
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