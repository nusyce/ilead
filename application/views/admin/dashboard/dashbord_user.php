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
                            <div class="text-center card-title  justify-content-between align-items-baseline">
                                <h6 class="mb-0 "><?php echo $this->lang->line('number_message'); ?></h6>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <h4 class="mb-2 text-center"><?php
                                        $user_clee = get_user_cle();
                                        echo total_rows('tbl_users', ['sponsor' => $user_clee]) ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                <h6 class=" mb-0">Ticket Bonus</h6>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <h4 class="mb-2 text-center">1</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                <h6 class=" mb-0">Ticket Bonus</h6>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <h4 class="mb-2 text-center">1</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class=" text-center card-title justify-content-between align-items-baseline">
                                <h6 class="mb-0">Mes gains</h6>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <h4 class="mb-2 text-center"><?= __price(25000) ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->

    <div class="row">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="row flex-grow">
                <div class="col-xl-8 col-12 dashboard-marketing-campaign">
                    <div class="card marketing-campaigns">
                        <div class="card-header d-flex justify-content-between align-items-center pb-1">
                            <h4 class="card-title">Mes Evenements à venir</h4>
                            <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                        </div>
                        <div class="table-responsive card-content ps ps--active-x">
                            <!-- table start -->
                            <table id="table-marketing-campaigns"
                                   class="table table-borderless table-marketing-campaigns mb-0">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th>Status</th>
                                    <th class="">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($myevent as $my_event) { ?>
                                    <tr>
                                        <td class="py-1 line-ellipsis">
                                            <?= $my_event['name'] ?>
                                        </td>
                                        <td class="py-1"><i
                                                    class="bx bx-trending-down text-danger align-middle mr-50"></i><span> <?= date('d/m/Y', strtotime($my_event['start_date'])) ?></span>
                                        </td>
                                        <td class="py-1"> <?= date('d/m/Y', strtotime($my_event['end_date'])) ?></td>
                                        <td class="py-1"> <?php event_flag($my_event['id']) ?></td>

                                        <td class="text-success py-1">
                                            <button class="btn btn-primary">Consulter</button>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <!-- table ends -->
                            <div class="ps__rail-x" style="width: 672px; left: 0px; bottom: 0px;">
                                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 652px;"></div>
                            </div>
                            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12 dashboard-marketing-campaign">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center pb-1">
                            <h4 class="card-title text-center">Acceder au live</h4>
                            <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                        </div>
                        <div class="card-content text-center">
                            <?php
                            $reunion_ID = get_option('link_telegram');
                            $password = get_option('password_meeting');
                            if ($reunion_ID && $password)
                                $link = 'https://zoom.us/j/' . $reunion_ID . '?pwd=' . $password . '#success';
                            else
                                $link = '#';
                            ?>
                            <a href="<?= $link ?>"><img src="<?= base_url(('assets/images/zoom-Logo.jpg')) ?>"
                                                        style="width: 120px"
                                                        alt="Zoom Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="row flex-grow">
                <div class="col-xl-8 col-12 dashboard-marketing-campaign">
                    <div class="card marketing-campaigns">
                        <div class="card-header d-flex justify-content-between align-items-center pb-1">
                            <h4 class="card-title">Les autres évènements</h4>
                            <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                        </div>
                        <div class="table-responsive card-content ps ps--active-x">
                            <!-- table start -->
                            <table id="table-marketing-campaigns"
                                   class="table table-borderless table-marketing-campaigns mb-0">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th>Status</th>
                                    <th class="">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($othe_event as $my_event) { ?>
                                    <?php $CI =& get_instance();
                                    $CI->db->where('event_id', $my_event['id']);
                                    $CI->db->where('user_id', get_user_id());
                                    $result = $CI->db->get('tbl_transactions')->result_array(); ?>
                                    <tr>
                                        <td class="py-1 line-ellipsis">
                                            <?= $my_event['name'] ?>
                                        </td>
                                        <td class="py-1"><i
                                                    class="bx bx-trending-down text-danger align-middle mr-50"></i><span> <?= date('d/m/Y', strtotime($my_event['start_date'])) ?></span>
                                        </td>
                                        <td class="py-1"> <?= date('d/m/Y', strtotime($my_event['end_date'])) ?></td>
                                        <td class="py-1"> <?php event_flag($my_event['id']) ?></td>
                                        <?php if (!$result) { ?>
                                            <td class="text-success py-1">
                                                <button <?php if (strtotime($user->expiration) < strtotime($my_event['end_date'])) echo "disabled"; ?>
                                                        onclick="buy_token(<?= $my_event['id'] ?>)"
                                                        class="btn btn-primary">Buy Token
                                                </button>
                                            </td>
                                        <?php } else { ?>
                                            <td class="text-success py-1"><a
                                                        href="<?= site_url('event/paie_token/' . $my_event['id']) ?>"
                                                        class="btn btn-primary">Make Paiement</a></td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="zone_modal"></div>
<script>
    function buy_token(id) {
        requestGet('event/buy_token/' + id).done(function (response) {
            $('#zone_modal').html(response)
            $('#buy_token_modal').modal('show')
        });
    }
</script>






