<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('asides_transaction_message'); ?></h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>N°<?php echo $this->lang->line('asides_transaction_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_plan_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_adherant_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_message'); ?></th>
                                <th><?php echo $this->lang->line('country_status_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_date_message'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $dd): ?>
                                <tr>
                                    <td><?= $dd['id'] ?></td>
                                    <td>#<?= $dd['num_trans'] ?>
                                        <?php if (get_user_role_id() == 2): ?>
                                            <br>
                                            <a href="<?= base_url('transactions/detail/') . $dd['id'] ?>">Detail</a>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $dd['plan'] ?></td>
                                    <td><?= $dd['lastname'] . ' ' . $dd['firstname'] ?></td>
                                    <td><?= number_format($dd['amount'], 0, 0, ' ') ?> F CFA</td>
                                    <td>
                                        <?php
                                        if (get_user_role_id() == 2):?>
                                            <div class="dropdown">
                                                <a class="badge badge-info dropdown-toggle" id="dropdownMenuButton"
                                                   data-toggle="dropdown" aria-haspopup="true" href="#"
                                                   aria-expanded="false">
                                                    <?= $dd['status'] ?>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" id="dopayer"
                                                       href="#"><?php echo $this->lang->line('transaction_payer_message'); ?></a>
                                                    <a class="dropdown-item"
                                                       href="#"><?php echo $this->lang->line('transaction_annuler_message'); ?></a>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <span class="badge badge-info">
                                                 <?= $dd['status'] ?>
                                             </span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= _dd($dd['due']) ?></td>
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

<!-- Modal -->
<div class="modal fade" id="addAttachment" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="text-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>
</div>
