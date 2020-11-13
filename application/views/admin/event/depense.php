<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('liste_des_evenement'); ?>

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
                                <th><?php echo $this->lang->line('nom_tache'); ?></th>
                                <th><?php echo $this->lang->line('description_depense'); ?></th>
                                <th><?php echo $this->lang->line('cout_depense'); ?></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data as $dd):
                                ?>
                                <tr>
                                    <td>
                                        <div><?= $dd['id'] ?></div>
                                        <div class="detail-option">
                                            <!--<a href="<?=base_url('users/representates/update_representate/'.$dd['id']) ?>" class="">Modifier</a> | --><a href="<?=base_url('event/delete_event/'.$dd['id']) ?>" class="delete text-danger">Supprimer</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <?= $dd['name'] ?>
                                        </div>
                                    </td>
                                    <td><?= $dd['start_date'] ?></td></td>
                                    <td><?= $dd['description'] ?></td>
                                    <td><?= $dd['amount'] ?></td>
                                    <td><i class="fa fa-circle online"></i></td>

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
