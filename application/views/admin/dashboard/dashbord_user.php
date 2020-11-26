<?php $CI =& get_instance();
$CI->load->model('User_model');
$user = $CI->User_model->get_user_by_id(get_user_id());
$CI->load->model('Plans_model');
$plan = $CI->Plans_model->get_plan_by_id($user->plan_id);
?>
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
                                        echo total_rows('tbl_users', ['sponsor' => $user_clee]); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                <h6 class=" mb-0"><?php echo $this->lang->line('ticket_bonus'); ?></h6>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <h4 class="mb-2 text-center"><?= user_free_ticket() ?></h4>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: <?= ($abonne*100)/20?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?= ($abonne*100)/20?>%</div>
                            </div>
                            <p> Il vous reste <?= 20 - $abonne ?> parrainage(s) pour votre prochain ticket gratuit</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                <h6 class=" mb-0"><?php echo $this->lang->line('conference_suivi'); ?></h6>
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
                            <span class="opsof" data-placement="top" data-toggle="tooltip"><?php if(get_user_plan_id()!=3){ ?><i class="link-icon" data-feather="award"><?php } ?></i></span>
                            <div class=" text-center card-title justify-content-between align-items-baseline">
                                <h6 class="mb-0"><?php echo $this->lang->line('mes_gains'); ?></h6>
                            </div>
                            <div class="row">
                               <?php if(get_user_role_id() !=1){

                                ?>
                                <div class="col-md-6">
                                    <span class="mb-2 text-center">Validation</span>
                                </div>
                                <?php } ?>
                                <div class="col-md-6">
                                    <span class="mb-2 text-center">Parainage</span>
                                </div>
                            </div>
                            <div class="row">
                                <?php if(get_user_role_id() !=1){

                                ?>
                                <div class="col-md-6">
                                    <h7 class="text-center"><?= __price(user_balance_validation()) ?></h7>
                                </div>
                                <?php } ?>
                                <div class="col-md-6">
                                    <h7 class="text-center"><?= __price(user_balance_commission()) ?></h7>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <a data-toggle="modal" data-target="#change_pays" class="mb-1 mb-md-0 text-center" id="addRespons"
                                       href="#" style="font-size: 10px">
                                        <?php echo $this->lang->line('Demander_retrait'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->
    <div class="row">
        <div class="col-md-8 stretch-card">
            <div class="row flex-grow">
                <div class="col-xl-12 grid-margin  col-12 dashboard-marketing-campaign">
                    <div class="card marketing-campaigns">
                        <div class="card-header d-flex justify-content-between align-items-center pb-1">
                            <h4 class="card-title"><?php echo $this->lang->line('evenement_a_venir'); ?></h4>
                            <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                        </div>
                        <div class="table-responsive card-content ps ps--active-x">
                            <!-- table start -->
                            <table id="table-marketing-campaigns"
                                   class="table table-borderless table-marketing-campaigns mb-0">
                                <thead>
                                <tr>
                                    <th><?php echo $this->lang->line('register_name_message'); ?></th>
                                    <th><?php echo $this->lang->line('user_start_date_message'); ?></th>
                                    <th><?php echo $this->lang->line('date_fin'); ?></th>
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
                                            <button class="btn btn-primary"><?php echo $this->lang->line('consulter'); ?></button>
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
                <div class="col-xl-12 grid-margin  col-12 dashboard-marketing-campaign">
                    <div class="card marketing-campaigns">
                        <div class="card-header d-flex justify-content-between align-items-center pb-1">
                            <h4 class="card-title"><?php echo $this->lang->line('autre_evenement'); ?></h4>
                            <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                        </div>
                        <div class="table-responsive card-content ps ps--active-x">
                            <!-- table start -->
                            <table id="table-marketing-campaigns"
                                   class="table table-borderless table-marketing-campaigns mb-0">
                                <thead>
                                <tr>
                                    <th><?php echo $this->lang->line('register_name_message'); ?></th>
                                    <th><?php echo $this->lang->line('user_start_date_message'); ?></th>
                                    <th><?php echo $this->lang->line('date_fin'); ?></th>
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
                                                <button data-toggle="tooltip" data-placement="top"
                                                        title="Frais d'expéditions des documments de formation de cette retraite" <?php if (strtotime($user->expiration) < strtotime($my_event['end_date'])) echo "disabled"; ?>
                                                        onclick="buy_token(<?= $my_event['id'] ?>)"
                                                        class="btn btn-primary">Payer le token
                                                </button>
                                            </td>
                                        <?php } else { ?>
                                            <td class="text-success py-1"><a
                                                        href="<?= site_url('event/paie_token/' . $my_event['id']) ?>"
                                                        class="btn btn-primary"><?php echo $this->lang->line('finaliser_paiement'); ?></a></td>
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
        <div class="col-md-4 grid-margin stretch-card">
            <div class="row flex-grow">
                <div class="col-xl-12 col-12 dashboard-marketing-campaign">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center pb-1">
                            <h4 class="card-title text-center"><?php echo $this->lang->line('acceder_live'); ?></h4>
                            <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                        </div>
                        <div class="card-content text-center">
                            <?php
                            $reunion_ID = get_option('link_zoo');
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
</div>
<div class="modal fade" id="change_pays" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="exampleModalLabel">  <?php echo $this->lang->line('Demander_retrait')?></h5>
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
                <form  method="post"  action="<?= base_url('withdrawal/add') ?>" >
                    <div class="form-group">
                        <span id="txt_verification"></span>
                        <label  for="exampleInputEmail1"><?php echo $this->lang->line('choisir_type_compte'); ?></label>
                        <select required style="color: black"  id="monselect" name="account_type">
                            <option disabled selected>Selectionner un compte</option>
                            <?php if(get_user_plan_id()==3){

                            ?>
                            <option value="balance">Gain sur les filleuils</option>
                            <?php } ?>
                            <?php if(get_user_role_id() !=1){

                            ?>
                            <option value="balance_validation">Gain sur les validations</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary "
                                data-dismiss="modal"><?php echo $this->lang->line('transaction_fermer_message'); ?></button>
                        <button disabled id="validate_btn" type="submit"
                                class="btn btn-primary deleted"
                                data-message="Confirmez vous ce paiement?"><?php echo $this->lang->line('transaction_valider_message'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="zone_modal"></div>
<script>
    document.getElementById("monselect").onchange = function(){
        if($(this).val()!= null && $(this).val() !="")
        {
            requestGet('withdrawal/verify_balance/' + $(this).val()).done(function (response) {
               if(response > 0)
               {
                   document.getElementById("validate_btn").disabled = false;
               }
            });
        }else {
            document.getElementById("validate_btn").disabled = true;
        }
    };

    function buy_token(id) {
        requestGet('event/buy_token/' + id).done(function (response) {
            $('#zone_modal').html(response)
            $('#buy_token_modal').modal('show')
        });
    }
</script>






