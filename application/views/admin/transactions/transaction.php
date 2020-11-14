<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body" id="detail-tra">
                    <h4 class="card-title text-center">Detail transaction : #<?= $data->num_trans ?></h4>

                    <div class="row">
                        <div class="col-md-6">
                            <h6>Date: <?= $data->due ?></h6>
                        </div>
                        <div class="col-md-6">
                            <h6>Pour : <?= $data->lastname . ' ' . $data->firstname ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Plan: <?= $data->plan ?></h6>
                        </div>
                        <div class="col-md-6">
                            <h6>
                                Prix : <?= __price($data->amount);?>

                            </h6></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Cluster: <?= $data->cluster ?></h6>
                        </div>
                        <div class="col-md-6">
                            <h6>Status : <?= $data->status ?></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h6>Pièces jointes</h6>
                        </div>
                        <div class="row pieces-jointes" style="width: 100%">
                            <?php foreach ($data->attachements as $attachement): ?>
                                <div class="col-md-3 text-center">
                                    <a href="<?= base_url('uploads/transactions/') . $data->id . '/' . $attachement['patch'] ?>"
                                       target="_blank">
                                        <img style="width: 250px; height: 120px"
                                             src="<?= base_url('uploads/transactions/') . $data->id . '/' . $attachement['patch'] ?>"
                                             alt="<?= $attachement['name'] ?>">
                                        <span><?= $attachement['name'] ?></span>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-secondary delete" data-message="Voulez vous générer celle facture?"
                               href="<?= base_url('transactions/create_inv/') . $data->id ?>">Génerer une facture</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Facturation</h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>N°<?php echo $this->lang->line('asides_transaction_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_plan_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_adherant_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_date_message'); ?></th>
                                <th>Généré par</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($factures as $dd): ?>
                                <tr>
                                    <td><?= $dd['id'] ?></td>
                                    <td>#<?= $dd['num_trans'] ?>
                                    </td>
                                    <td><?= $dd['plan'] ?></td>
                                    <td><?= $dd['user'] ?></td>
                                    <td>  <?= __price($data['amount']);?></td>
                                    <td><?= _dd($dd['due']) ?></td>
                                    <td><?= $dd['by_user'] ?></td>
                                    <td><a target="_blank" href="<?= base_url('transactions/print_inv/') . $dd['id'] ?>"><i
                                                    data-feather="file"></i></a></td>
                                                    <td><a target="_blank" href="<?= base_url('transactions/send_facture/') . $dd['id'] ?>"><i
                                                    data-feather="send"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    #detail-tra h6 {
        margin-bottom: 25px;
    }
</style>