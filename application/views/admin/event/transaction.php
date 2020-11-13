<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('liste_des_transactions'); ?>

                        <a type="button" class="btn pull-right btn-primary btn-icon-text mb-1 mb-md-0" id="addRespons"
                           href="#">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            <?php echo $this->lang->line('ajouter_un_evenement'); ?>
                        </a></h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th><?php echo $this->lang->line('position'); ?></th>
                                <th><?php echo $this->lang->line('nom_participant'); ?></th>
                                <th><?php echo $this->lang->line('Montant'); ?></th>
                                <th><?php echo $this->lang->line('date_de_paiement'); ?></th>
                                <th><?php echo $this->lang->line('status_de_la_transaction'); ?></th>
                                <th><?php echo $this->lang->line('methode_de_paiement'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data as $dd):
                                ?>
                                <tr>
                                    <td>
                                        <div><?= $dd['t.id'] ?></div>
                                    </td>
                                    <td>
                                        <div>
                                            <?= $dd['first'].' '.$dd['last'] ?>
                                        </div>
                                    </td>
                                    <td><?= $dd['amount'] ?></td></td>
                                    <td><?= $dd['date'] ?></td>
                                    <td><?= $dd['status'] ?></td>
                                    <td><?= $dd['paiement_mode'] ?></td>

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
<script>

