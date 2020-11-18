<div class="page-content text-center">
<div class="row grid-margin text-center">
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?php echo $this->lang->line('envoyer_des_fonds_a_quelquun'); ?></h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="form-body">
                        <form method="post" action="<?= base_url('transfer/save/') ?>">
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
                                        <?php foreach ($data as $user): ?>
                                        <option value="<?=$user['id'] ?>"><?php echo $user['firstname'].' '.$user['lastname']; ?></option>
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
                            <button type="submit" class="btn btn-primary" data-message="Confirmez vous ce transfert?"><?php echo $this->lang->line('transaction_valider_message'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>