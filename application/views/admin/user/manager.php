<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Utilisateurs</h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Profession</th>
                                <th>Genre</th>
                                <th>Plan</th>
                                <th>Sponsor</th>
                                <th>Cluster</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            foreach ($data as $dd): ?>
                                <tr>
                                    <td>
                                        <div><?= $dd['firstname'] . ' ' . $dd['lastname'] ?></div>
                                        <div class="detail-option">
                                            <a href="#" class="">Detail</a> | <a href="#" class="delete text-danger">Supprimer</a>
                                        </div>
                                    </td>
                                    <td><?= $dd['profession'] ?></td>
                                    <td><?= '' ?></td>
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