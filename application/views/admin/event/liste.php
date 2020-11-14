<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('liste_des_evenement'); ?>

                        <a onclick="edit(event,'')" type="button" class="btn pull-right btn-primary btn-icon-text mb-1 mb-md-0" id="addRespons"
                           href="#">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            <?php echo $this->lang->line('ajouter_un_evenement'); ?>
                        </a></h6>
                    <?php $this->load->view('admin/includes/message.php') ?>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th><?php echo $this->lang->line('position'); ?></th>
                                <th><?php echo $this->lang->line('nom_evenement'); ?></th>
                                <th><?php echo $this->lang->line('date_debut'); ?></th>
                                <th><?php echo $this->lang->line('date_fin'); ?></th>
                                <th><?php echo $this->lang->line('description'); ?></th>
                                <th><?php echo $this->lang->line('status'); ?></th>
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
                                            <a href="#" onclick="edit(event,<?=$dd['id']?>)" class="">Modifier</a> | <a href="<?=base_url('event/delete_event/'.$dd['id']) ?>" class="delete text-danger">Supprimer</a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="<?=base_url('event/event/'.$dd['id']) ?>"
                                        <div>
                                            <?= $dd['name'] ?>
                                        </div>
                                        </a>
                                    </td>
                                    <td><?= $dd['start_date'] ?></td></td>
                                    <td><?= $dd['end_date'] ?></td>
                                    <td><?= $dd['description'] ?></td>
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
<div id="edit_zone"></div>

<script>
function edit(e,id)
{
    e.preventDefault();
    requestGet('event/modal/' + id).done(function (response) {
        $('#edit_zone').html(response)
        $('#editevent').modal('show')
    });
}

    function UpdateStatus(id)
    {
        var Status = $(this).val();

        $(function()
        {
            $.ajax({
                url: 'Ajax/StatusUpdate.php?Status='.Status, data: "", dataType: 'json'
            });

        });
    }
</script>
