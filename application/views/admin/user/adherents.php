<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Mes Adherents
                        <a type="button" class="btn pull-right btn-primary btn-icon-text mb-1 mb-md-0"
                           href="<?= base_url('users/child') ?>">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            Ajouter
                        </a></h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Cluster</th>
                                <th>Country</th>
                                <th>Sexe</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($adherents as $adherent): ?>
                                <tr>
                                    <td><?= $adherent['id'] ?></td>
                                    <td><?= $adherent['firstname'] ?></td>
                                    <td><?= $adherent['lastname'] ?></td>
                                    <td><?= $adherent['email'] ?></td>
                                    <td><?= $adherent['whatsapp_phone'] ?></td>
                                    <td><?= $adherent['cluster'] ?></td>
                                    <td><?= $adherent['country'] ?></td>
                                    <td><?= $adherent['sexe'] ?></td>
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