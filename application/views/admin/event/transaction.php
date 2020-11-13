<div class="page-content">
    <?php $this->load->view('admin/event/nav'); ?>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('liste_des_transactions'); ?>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th><?php echo $this->lang->line('N°'); ?></th>
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
                                        <div><?= $dd['t_id'] ?></div>
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


