<div class="page-content">

    <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" id="detail-tra">
                        <h4 class="text-center mb-3 mt-4"><?php echo $this->lang->line('home_package'); ?></h4>

                        <div class="row">
                            <?php foreach ($plans as $plan) { ?>
                                <div class="col-md-4 stretch-card grid-margin grid-margin-md-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="text-center text-uppercase mt-3 mb-4"><?= $plan['name'] ?></h5>
                                            <i data-feather="award"
                                            class="text-primary icon-xxl d-block mx-auto my-3"></i>
                                            <h4 class="text-center font-weight-light"><?= number_format($plan['price']) ?>
                                                FCFA</h4>

                                            <h5 class="text-center font-weight-light"><?= number_format($plan['price_dollard']) ?>
                                                DOLLARS</h5>
                                            <h5 class="text-center font-weight-light"><?= number_format($plan['price_euro']) ?>
                                                EURO</h5>
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