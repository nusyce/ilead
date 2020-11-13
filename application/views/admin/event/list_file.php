<div class="page-content">
    <?php $this->load->view('admin/event/nav'); ?>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <table id="databable" class="table">
                        <thead>
                        <tr>
                            <th><?php echo $this->lang->line('N°'); ?></th>
                            <th><?php echo $this->lang->line('nom_du_fichier'); ?></th>
                            <th><?php echo $this->lang->line('type_de_fichier'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($data as $dd):
                            ?>
                            <tr>
                                <td>
                                    <div><?= $dd['id'] ?></div>
                                </td>
                                <td><?= $dd['name'] ?></td></td>
                                <td><?= $dd['file_type'] ?></td></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




