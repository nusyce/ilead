<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Utilisateurs</h6>
                    <div class="table-responsive">
                        <?php
                        $this->load->view('admin/includes/message.php'); ?>
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Profession</th>
                                <th>Genre</th>
                                <th>Plan</th>
                                <th>Sponsor</th>
                                <th>Cluster</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data as $dd): ?>
                                <tr>
                                    <td>
                                        <div><?= $dd['firstname'] . ' ' . $dd['lastname'] ?></div>
                                        <div class="detail-option">
                                            <a href="#" class="">Detail</a> | <a
                                                    href="<?= base_url('users/delete/') . $dd['id'] ?>"
                                                    data-message="Voulez vous supprimer cet utilisateur?"
                                                    class="delete text-danger">Supprimer</a>
                                        </div>
                                    </td>
                                    <td><?= $dd['profession'] ?></td>
                                    <td><?= '' ?></td>
                                    <td><?= '' ?></td>
                                    <td><?= $dd['sponsor'] ?></td>
                                    <td><?= $dd['cluster'] ?></td>
                                    <td><?= $dd['role'] ?></td>
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