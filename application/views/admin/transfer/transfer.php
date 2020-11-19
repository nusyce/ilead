<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('liste_des_transferts'); ?>

                        <a data-toggle="modal" data-target="#add_transfert"
                           class="btn pull-right btn-primary btn-icon-text mb-1 mb-md-0" id="addRespons"
                           href="#">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            <?php echo $this->lang->line('ajouter_un_transfert_fond'); ?>
                        </a></h6>
                    <?php $this->load->view('admin/includes/message.php') ?>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th><?php echo $this->lang->line('position'); ?></th>
                                <th><?php echo $this->lang->line('nom_evenement'); ?></th>
                                <th><?php echo $this->lang->line('transaction_adherant_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_message'); ?></th>
                                <th><?php echo $this->lang->line('description'); ?></th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data as $dd):
                                ?>
                                <tr>
                                    <td>
                                        <?= $dd['id'] ?>

                                    </td>
                                    <td>

                                                <?= $dd['event'] ?>

                                    </td>
                                    <td>

                                        <?= $dd['firstname'].' '.$dd['lastname'] ?>

                                    </td>
                                    <td><?=$dd['mount'].' F CFA' ?></td>
                                    <td><?=$dd['description'] ?></td>
                                    <td><?= formatted_date_time($dd['created_at']) ?></td>


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


<div class="modal fade" id="add_transfert" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="exampleModalLabel"> <?php echo $this->lang->line('envoyer_des_fonds_a_quelquun'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form role="form" autocomplete="off" accept-charset="utf-8" method="post" enctype="multipart/form-data" action="<?= base_url('transfer/save/') ?>" >

                    <div class="row">
                        <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s') ?>">
                        <div class="col-md-4">
                            <label><?php echo $this->lang->line('montant_du_transfert'); ?></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="number" class="form-control" name="mount"
                                   value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><?php echo $this->lang->line('transferer_vers'); ?></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select type="text" class="form-control" name="user_id">
                                <?php foreach ($users as $user): ?>
                                    <option value="<?=$user['id'] ?>"><?php echo $user['firstname'].' '.$user['lastname']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><?php echo $this->lang->line('evenement_associe'); ?></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <select type="text" class="form-control" name="event_id">
                                <?php foreach ($events as $event): ?>
                                    <option value="<?=$event['id'] ?>"><?php echo $event['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label><?php echo $this->lang->line('description'); ?></label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="text" class="form-control" name="description">
                        </div>
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
    function edit(e, id) {
        e.preventDefault();
        requestGet('event/modal/' + id).done(function (response) {
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

