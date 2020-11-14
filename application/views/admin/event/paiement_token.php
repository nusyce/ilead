<div class="page-content">
<div class="container ">
    <h3 class="text-center font-weight-light"><b><?= $event->name ?></b></h3>
    <div class="row d-flex align-items-center justify-content-center">
        <?php foreach ($modes as $mode) { ?>
            <?php if($mode['status'] ==1 ){?>
                <div class="col-md-3 stretch-card grid-margin grid-margin-md-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-center text-uppercase mt-3 mb-4"><?= $mode['nom'] ?></h5>
                            <i data-feather="award"
                               class="text-primary icon-xxl d-block mx-auto my-3"></i>
                            <h5 class="text-center font-weight-light"> <b><?= get_option('token_price')?>
                                FCFA</b></h5>


                            <!--<p class="text-muted text-center mb-4 font-weight-light">per month</p>-->
                            <!--<h6 class="text-muted text-center mb-4 font-weight-normal">Up to 25 units</h6>-->
                            <br>
                            <?php if($mode['id'] !=4 ){?>

                                <a  href="#" class="btn btn-primary d-block mx-auto mt-4"><?php echo $this->lang->line('paid_by'); ?> <?= $mode['nom'] ?></a>
                            <?php }?>
                            <?php if($mode['id'] ==4 ){?>
                            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="btn btn-primary d-block mx-auto mt-4">Call <?= $mode['nom'] ?></a>
                            <div class="collapse" id="collapseExample">
                                <?php foreach ($representates as $representate) { ?>
                                    <br>
                                    <h5 style="font-size: 15px;"><b><?= $representate['firstname'] ?></h5>
                                    <a href="mailto:<?=$representate['email'] ?>" ><?= $representate['email'] ?></a>
                                    <a href="tel:<?=$representate['whatsapp_phone'] ?>" ><?=$representate['whatsapp_phone'] ?></a>
                                    <?php if(isset($country->account_bank)){?>
                                        <br><br>
                                        <h5>BANK ACCOUNT</h5>
                                        <?php echo $country->account_bank ?>
                                    <?php }?>
                                <?php }?>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            <?php } ?>

        <?php } ?>
    </div>
</div>
</div>