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
                                            <a href="<?= base_url('transactions/detail/') . $dd['id'] ?>"><?php echo $this->lang->line('transaction_detail_message'); ?></a>
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
                                                    <a class="dropdown-item" id="dopayer" data-id="<?= $dd['id'] ?>"
                                                       href="#"><?php echo $this->lang->line('transaction_payer_message'); ?></a>
                                                    <a class="dropdown-item" data-id="<?= $dd['id'] ?>"
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
                <h5 class="modal-title"
                    id="exampleModalLabel"><?php echo $this->lang->line('transaction_confirmation_message'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" autocomplete="off" accept-charset="utf-8" method="post" enctype="multipart/form-data"
                      action="<?= base_url('transactions/make_paiement') ?>">

                    <input type="hidden" name="id" id="id_transaction">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- <div id="textboxDiv"></div>   -->
                                            <div class="form-container">
                                                <!-- <form> -->
                                                <div class="form-group">
                                                    <button id="addEmail" class="btn btn-primary">Ajouter plus</button>
                                                    <button id="removeEmail" class="btn btn-warning">Supprimer le dernier champs
                                                    </button>
                                                </div>

                                                <div class="form-group">
                                                    <label>Ajouter une pièce</label>
                                                    <input type="file" name="attachment[]" required class="file-upload-default">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text" class="form-control file-upload-info"
                                                               disabled="" placeholder="Ajouter une pièce jointe">
                                                        <span class="input-group-append">
												<button class="file-upload-browse btn btn-primary" type="button">Selectionner</button>
											</span>
                                                    </div>
                                                </div>
                                                <div id="more-email"></div>
                                                <!-- </form> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="button" class="btn btn-secondary "
                                data-dismiss="modal"><?php echo $this->lang->line('transaction_fermer_message'); ?></button>
                        <button type="submit"
                                class="btn btn-primary deleted" data-message="Confirmez vous ce paiement?"><?php echo $this->lang->line('transaction_valider_message'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>

    .bs-callout {
        padding: 10px 20px;
        margin: 20px 0;
        border: 1px solid #c6eaf5;
        border-left-width: 5px;
        border-radius: 3px;
        background: #ddf6fd;
        color: #1b809e;
    }

    .bs-callout-info {
        border-left-color: #1b809e;
    }
</style>