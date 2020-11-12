<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('asides_representant_message'); ?>

                        <a type="button" class="btn pull-right btn-primary btn-icon-text mb-1 mb-md-0" id="addRespons"
                           href="#">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            <?php echo $this->lang->line('child_ajouter_message'); ?>
                        </a></h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo $this->lang->line('register_name_message'); ?></th>
                                <th><?php echo $this->lang->line('register_country_message'); ?></th>
                                <th><?php echo $this->lang->line('child_profession_message'); ?></th>
                                <th><?php echo $this->lang->line('child_genre_message'); ?></th>
                                <th><?php echo $this->lang->line('child_sponsor_message'); ?></th>
                                <th><?php echo $this->lang->line('register_cluster_message'); ?></th>
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
                                            <!--<a href="<?=base_url('users/representates/update_representate/'.$dd['id']) ?>" class="">Modifier</a> | --><a href="<?=base_url('users/delete_representate/'.$dd['id'].'/'.$dd['user_id']) ?>" class="delete text-danger">Supprimer</a>
                                        </div>
                                        </td>
                                    <td>
                                        <div><?= $dd['firstname'] . ' ' . $dd['lastname'] ?></div>
                                    </td>
                                    <td><?= $dd['country'] ?></td>
                                    <td><?= $dd['profession'] ?></td>
                                    <td><?= '' ?></td>
                                    <td><?= $dd['sponsor'] ?></td>
                                    
                                    <td><?= $dd['cluster'] ?></td>
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
<div class="modal fade" id="modal-responsable" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModal"><?php echo $this->lang->line('child_add_respo_message'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('users/add_repos'); ?>

                <div class="form-group">
                    <label><?php echo $this->lang->line('plan_message'); ?></label>
                    <select class="member w-100" name="user_id">
                        <?php foreach ($users

                                       as $user): ?>
                            <option value="<?= $user['id'] ?>"><?= $user['firstname'] . ' ' . $user['lastname'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label><?php echo $this->lang->line('register_country_message'); ?></label>
                    <select class="country w-100" name="country_id">
                        <?php $countries = countries(); ?>
                        <?php foreach ($countries as $country): ?>
                            <option value="<?= $country['id']; ?>"><?= $country['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name"><?php echo $this->lang->line('child_telephone_message'); ?> 1</label>
                    <input id="name" class="form-control" name="phone_1" type="text">
                </div>
                <div class="form-group">
                    <label for="name"><?php echo $this->lang->line('child_telephone_message'); ?> 2</label>
                    <input id="name" class="form-control" name="phone_2" type="text">
                </div>

                <div class="text-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->lang->line('transaction_fermer_message'); ?></button>
                    <button type="submit" class="btn btn-primary"><?php echo $this->lang->line('transaction_valider_message'); ?></button>
                </div>
                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</div>