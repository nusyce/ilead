<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('liste_des_transactions'); ?></h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th><?php echo $this->lang->line('position'); ?></th>
                                <th><?php echo $this->lang->line('nom_participant'); ?></th>
                                <th><?php echo $this->lang->line('prenom_participant'); ?></th>
                                <th><?php echo $this->lang->line('pays_du_participant'); ?></th>
                                <th><?php echo $this->lang->line('numero_du_participant'); ?></th>
                                <th><?php echo $this->lang->line('email_du_participant'); ?></th>
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
                                            <?= $dd['first'] ?>
                                        </div>
                                    </td>
                                    <td><?= $dd['last'] ?></td></td>
                                    <td><?= $dd['ctryid'] ?></td></td>
                                    <td><?= $dd['whatsapp'] ?></td>
                                    <td><?= $dd['email'] ?></td>
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

