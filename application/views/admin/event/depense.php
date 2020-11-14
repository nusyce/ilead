<div class="page-content">
    <?php $this->load->view('admin/event/nav'); ?>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <h6 class="card-title"><?php echo $this->lang->line('liste_depense'); ?>

                    <a type="button" data-toggle="modal" data-target="#add" class="btn pull-right btn-primary btn-icon-text mb-1 mb-md-0" id="addRespons"
                       href="#">
                        <i class="btn-icon-prepend" data-feather="plus"></i>
                        <?php echo $this->lang->line('ajouter_une_depense'); ?>
                    </a></h6>
                <div class="table-responsive">
                    <table id="databable" class="table">
                        <thead>
                        <tr>
                            <th><?php echo $this->lang->line('N°'); ?></th>
                            <th><?php echo $this->lang->line('nom_tache'); ?></th>
                            <th><?php echo $this->lang->line('description_depense'); ?></th>
                            <th><?php echo $this->lang->line('cout_depense'); ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $som=0;
                        foreach ($data as $dd):
                           $som=$som+$dd['amount']  ?>
                            <tr>
                                <td>
                                    <div><?= $dd['id'] ?></div>
                                    <div class="detail-option">
                                        <a href="<?=base_url('event/delete_depense/'.$dd['id']."/".$event->id) ?>" class="delete text-danger">Supprimer</a>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <?= $dd['taskname'] ?>
                                    </div>
                                </td>
                                <td><?= $dd['description'] ?></td></td>
                                <td><?= $dd['amount'] ?></td>
                                <td><i class="fa fa-circle online"></i></td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <h4 style="text-align: left;margin-top: 10px">Total : <?=$som?>F CFA</h4>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="exampleModalLabel"><?php echo $this->lang->line('ajouter_une_depense'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" autocomplete="off" accept-charset="utf-8" method="post" enctype="multipart/form-data"
                      action="<?= base_url('event/depense/'.$event->id) ?>">
                    <input type="hidden" name="event_id" id="id" value="<?php if (isset($event)) echo $event->id; ?>">
                    <label for="task_id"><?php echo $this->lang->line('nom_tache'); ?></label>
                    <select name="task_id" id="task_id">
                        <?php $CI =& get_instance();
                        $CI->load->model('task_model');
                        $tasks = $CI->task_model->get();
                        var_dump($tasks);
                        foreach ($tasks as $task):
                           ?>
                            <option value="<?=$task['id']?>"><?=$task['name']?></option>
                        <?php endforeach; ?>

                    </select><br>
                    <label for="description"><?php echo $this->lang->line('description_depense'); ?></label>
                    <input type="text" value="" name="description" class="form-control" id="description"><br>
                    <label for="amount"><?php echo $this->lang->line('cout_depense'); ?></label>
                    <input type="number" value="" name="amount" class="form-control" id="amount"><br>

<br>
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
