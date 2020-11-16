<?php $CI =& get_instance();
$CI->load->model('User_model');
$user = $CI->User_model->get_user_by_id(get_user_id()); ?>
<div class="page-content dashboard">
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center card-title justify-content-between align-items-baseline">
                                <h6 class="mb-0">MEMBRES INSCRIS</h6>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <h4 class="mb-2 text-center"><?php
                                        echo total_rows('tbl_users'); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                <h6 class=" mb-0">EVENEMENTS</h6>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <h4 class="mb-2 text-center"><?= total_rows('tbl_events'); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                <h6 class=" mb-0">Representants</h6>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <h4 class="mb-2 text-center"><?= total_rows('tbl_representates')?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <span class="opsof" data-placement="top" data-toggle="tooltip" data-original-title="Vous devez passez à PREMIUM pour bénéficier"><i class="link-icon" data-feather="award"></i></span>
                            <div class=" text-center card-title justify-content-between align-items-baseline">
                                <h6 class="mb-0">Mes gains</h6>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <h4 class="mb-2 text-center"><?= __price(user_balance()) ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>