
<div class="page-content">
    <?php $this->load->view('admin/event/nav'); ?>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
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




