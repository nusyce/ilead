<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Utilisateurs</h6>
                    <a target="_blank" style="
    float: right;
" type="button" class="btn pull-right btn-primary btn-icon-text mb-1 mb-md-0"
                           href="<?= base_url('transactions/send_all_facture') ?>">
                            
                          Send all mail
                        </a>
                    <a target="_blank" style="
    float: left;" type="button" class="btn pull-right btn-primary btn-icon-text mb-1 mb-md-0"
                       href="<?= base_url('excel/paid_client') ?>">

                        Import paid adherents
                    </a>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>Clé</th>
                                <th>Nom</th>
                                <th>Profession</th>
                                <th>Genre</th>
                                <th>Plan</th>
                                <th>Sponsor</th>
                                <th>Country</th>
                                <th>Cluster</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data as $dd): ?>
                                <tr>
                                     <td><?= $dd['cle'] ?></td>
                                    <td>
                                        <div><?= $dd['firstname'] . ' ' . $dd['lastname'] ?></div>
                                        <div class="detail-option">
                                            <a href="<?=base_url('users/change_role/'.$dd['id']) ?>" class="">Changer le role</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<a href="<?=base_url('users/details/'.$dd['id']) ?>" class="">Plus d'infos</a> <!--| <a href="#" class="delete text-danger">Supprimer</a>-->
                                        </div>
                                    </td>
                                    <td><?= $dd['profession'] ?></td>
                                    <td><?= $dd['sexe']?></td>
                                    <td><?= '' ?></td>
                                    <td><?= $dd['sponsor'] ?></td>
                                     <td><?= $dd['country'] ?></td>
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