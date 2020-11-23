<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iLead Globe</title>
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

            <div class="row w-100">
                <div class="col-md-12">
                    <nav id="topmenu" class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">iLEAD</a>
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
                    <h4 class="text-center mb-3 mt-4"><?php echo $this->lang->line('choose_method'); ?></h4>


                    <div class="container ">

                        <div class="row d-flex align-items-center justify-content-center">
                            <?php foreach ($modes as $mode) { ?>
                            <?php if($mode['status'] ==1 ){?>
                                <div class="col-md-3 stretch-card grid-margin grid-margin-md-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="text-center text-uppercase mt-3 mb-4"><?= $mode['nom'] ?></h5>
                                            <i data-feather="award"
                                               class="text-primary icon-xxl d-block mx-auto my-3"></i>
                                            <h5 class="text-center font-weight-light"><?= $transation->plan ?> <br> <?= number_format($transation->price) ?>
                                                FCFA</h5>
                                                <h5 class="text-center font-weight-light"><?= number_format($transation->price_dollard) ?>
                                                DOLLARS</h5>
                                            <h5 class="text-center font-weight-light"><?= number_format($transation->price_euro) ?>
                                                EURO</h5>
                                                  
                                            <!--<p class="text-muted text-center mb-4 font-weight-light">per month</p>-->
                                            <!--<h6 class="text-muted text-center mb-4 font-weight-normal">Up to 25 units</h6>-->
                                            <br>
                                            <?php if($mode['id'] !=4 ){?>

                                            <a href="#" class="btn btn-primary d-block mx-auto mt-4"><?php echo $this->lang->line('paid_by'); ?> <?= $mode['nom'] ?></a>
                                            <?php }?>
                                            <?php if($mode['id'] ==4 ){?>
                                            <?php foreach ($representates as $representate) { ?>
                                                <h5><b><?= $representate['firstname'] ?></h5>
                                                <a href="mailto:<?=$representate['email'] ?>" ><?= $representate['email'] ?></a>
                                                <a href="tel:<?=$representate['whatsapp_phone'] ?>" ><?=$representate['whatsapp_phone'] ?></a>
                                                <?php if(isset($country->account_bank)){?>
                                                <br><br>
                                                <h5>BANK ACCOUNT</h5>
                                             <?php echo $country->account_bank ?>
                                             <?php }?>
                                            <?php }?>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <?php } ?>
                        </div>
                        <br><br>
                        <p style="text-align: center">

                            <a data-toggle="modal" data-target="#change_pays" class="btn btn-primary btn-icon-text mb-1 mb-md-0" id="addRespons"
                               href="#">
                                <i class="btn-icon-prepend" data-feather="plus"></i>
                                <?php echo $this->lang->line('changer_de_pays'); ?>
                            </a></p>

                        <p style="text-align: center"><a href="<?= base_url('auth/login')?>" class="d-block mt-3 text-muted"><?php echo $this->lang->line('re_auth'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="change_pays" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"
                        id="exampleModalLabel">  <?php echo $this->lang->line('changer_de_pays?')?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if (isset($event)) {
                        $id=$event->id;
                    }
                    else {
                        $id="";}?>
                    <form role="form" autocomplete="off" accept-charset="utf-8" method="post" enctype="multipart/form-data" action="<?= base_url('paid/modal') ?>" >
                        <div class="form-group">
                            <label  for="exampleInputEmail1"><?php echo $this->lang->line('register_country_message'); ?></label>
                            <select required style="color: black"  id="monselect" name="country_id">
                                <?php

                                $countryCode = ip_info("Visitor", "Country Code"); // IN
                                $iso = get_country_by_iso($countryCode)->iso;

                                foreach (countries() as $country) { ?>
                                    <option <?= $country['iso'] == $iso ? 'selected' : ''; ?>
                                            value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
                                <?php } ?>                                        </select>
                        </div>
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
    <script>
        function edit(e) {
            e.preventDefault();
            requestGet('paid/modal').done(function (response) {
                $('#edit_zone').html(response)
                $('#editevent').modal('show')
            });
        }

        function UpdateStatus(id) {
            var Status = $(this).val();

            $(function () {
                $.ajax({
                    url: 'Ajax/StatusUpdate.php?Status='.Status, data: "", dataType: 'json'
                });

            });
        }
    </script>
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