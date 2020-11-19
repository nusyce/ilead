<div class="page-content">

    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?=$user->firstname.' '.$user->lastname?></h6>
                    <div id="content">
                        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                            <li><a class="nav-link d-flex px-1" href="#orange" data-toggle="tab">Solde des comptes</a>
                            </li>
                            <li><a class="nav-link d-flex px-1" href="#yellow" data-toggle="tab">Liste des retraites</a>
                            </li>
                            <li><a class="nav-link d-flex px-1" href="#red" data-toggle="tab">Liste des transactions</a>
                            </li>

                        </ul>
                    </div>
                    <div id="my-tab-content" class="tab-content" style="margin-top: 20px">
                        <div class="tab-pane active" id="orange">
                            <section id="dashboard-analytics">
                                <div class="row">
                                    <div class="col-md-3 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                                    <h6 class=" mb-0">Gain sur les validations</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-12 col-xl-12">
                                                        <h4 class="mb-2 text-center"><?php
                                                            if(user_balance_validation($user->id))
                                                                echo __PRICE(user_balance_validation($user->id));
                                                            else echo __PRICE(0)
                                                            ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                                    <h6 class=" mb-0">Gain sur les filleuils</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-12 col-xl-12">
                                                        <h4 class="mb-2 text-center"><?php
                                                            if(user_balance_commission($user->id))
                                                                echo __PRICE(user_balance_commission($user->id));
                                                            else echo __PRICE(0)
                                                            ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                                    <h6 class=" mb-0">Gain sur les transferts</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-12 col-xl-12">
                                                        <h4 class="mb-2 text-center"><?php
                                                            if(user_balance_transfer($user->id))
                                                                echo __PRICE(user_balance_transfer($user->id));
                                                            else echo __PRICE(0)
                                                            ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-12 col-sm-12">
                                        <div class="row">
                                            <!-- Conversion Chart Starts-->
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane" id="yellow">
                            <h6 class="card-title"><?php echo $this->lang->line('liste_des_evenement'); ?>
                            </h6>
                            <?php $this->load->view('admin/includes/message.php') ?>
                            <div class="table-responsive">
                                <table id="databable" class="table">
                                    <thead>
                                    <tr>
                                        <th><?php echo $this->lang->line('position'); ?></th>
                                        <th><?php echo $this->lang->line('nom_evenement'); ?></th>
                                        <th><?php echo $this->lang->line('date_debut'); ?></th>
                                        <th><?php echo $this->lang->line('date_fin'); ?></th>
                                        <th><?php echo $this->lang->line('description'); ?></th>
                                        <th><?php echo $this->lang->line('status'); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($event as $dd):
                                        ?>
                                        <tr>
                                            <td>
                                                <div><?= $dd['id'] ?></div>
                                                <div class="detail-option">
                                                    <a href="#" onclick="edit(event,<?= $dd['id'] ?>)" class="">Modifier</a> |
                                                    <a href="<?= base_url('event/delete_event/' . $dd['id']) ?>"
                                                       class="delete text-danger">Supprimer</a>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="<?= base_url('event/event/' . $dd['id']) ?>">
                                                        <?= $dd['name'] ?>
                                                    </a>
                                                </div>
                                            </td>
                                            <td><?= formatted_date_time($dd['start_date']) ?></td>
                                            <td><?= formatted_date_time($dd['end_date']) ?></td>
                                            <td><?= $dd['description'] ?></td>
                                            <td><div><?php event_flag($dd['id']); ?></div></td>

                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>    </div>
                        <div class="tab-pane" id="red">
                            <h6 class="card-title"><?php echo $this->lang->line('asides_transaction_message'); ?></h6>
                            <div class="table-responsive">
                                <table id="databable" class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>N°<?php echo $this->lang->line('asides_transaction_message'); ?></th>
                                        <th><?php echo $this->lang->line('transaction_plan_message'); ?></th>
                                        <th><?php echo $this->lang->line('transaction_adherant_message'); ?></th>
                                        <th>Conctact</th>
                                        <th>Country</th>
                                        <th><?php echo $this->lang->line('transaction_message'); ?></th>
                                        <th><?php echo $this->lang->line('country_status_message'); ?></th>
                                        <th><?php echo $this->lang->line('transaction_date_message'); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($transaction as $dd): ?>
                                        <tr>
                                            <td><?= $dd['id'] ?></td>
                                            <td>#<?= $dd['num_trans'] ?>
                                                <?php if (get_user_role_id() == 2): ?>
                                                    <br>
                                                    <a href="<?= base_url('transactions/detail/') . $dd['id'] ?>"><?php echo $this->lang->line('transaction_detail_message'); ?></a>
                                                <?php endif; ?>
                                            </td>
                                            <td><?= $dd['plan'] ?></td>
                                            <td><?= $dd['lastname'] . ' ' . $dd['firstname'] ?></td>
                                            <td><?= $dd['phone'] ?></td>
                                            <td><?= $dd['country'] ?></td>
                                            <td><?= number_format($dd['amount'], 0, 0, ' ') ?> F CFA</td>
                                            <td>
                                                <?php
                                                if ((get_user_role_id() == 2 || get_user_role_id() == 3) && $dd['status'] != 'paie'):?>
                                                    <div class="dropdown">
                                                        <a class="badge badge-info dropdown-toggle" id="dropdownMenuButton"
                                                           data-toggle="dropdown" aria-haspopup="true" href="#"
                                                           aria-expanded="false">
                                                            <?= $dd['status'] ?>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" id="dopayer" data-id="<?= $dd['id'] ?>"
                                                               href="#"><?php echo $this->lang->line('transaction_payer_message'); ?></a>
                                                            <a class="dropdown-item" data-id="<?= $dd['id'] ?>"
                                                               href="<?=site_url('transactions/cancel/'.$dd['id']) ?>"><?php echo $this->lang->line('transaction_annuler_message'); ?></a>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <span class="badge badge-success">
                                                 <?php echo $this->lang->line('invoice_paid'); ?>
                                             </span>
                                                <?php endif; ?>
                                            </td>
                                            <td><?= _dd($dd['due']) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>    </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


























