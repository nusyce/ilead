<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Liste des taches <a onclick="edit(event,'')" type="button" class="btn pull-right btn-primary btn-icon-text mb-1 mb-md-0" id="addRespons"
                                                               href="#">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            <?php echo $this->lang->line('ajouter_une_tache'); ?>
                        </a></h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $dd): ?>
                                <tr>
                                   <td> <div><?= $dd['id'] ?></div>
                                    <div class="detail-option">
                                        <a href="#" onclick="edit(event,<?=$dd['id']?>)" class="">Modifier</a> | <a href="<?=base_url('task/delete/'.$dd['id']) ?>" class="delete text-danger">Supprimer</a>
                                    </div></td>
                                    <td><?= $dd['name']?></td>
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
        requestGet('task/modal/' + id).done(function (response) {
            $('#edit_zone').html(response)
            $('#edittask').modal('show')
        });
    }
    </script>