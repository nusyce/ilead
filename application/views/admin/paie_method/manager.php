<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Mode de paiements</h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data as $dd):?>
                                <tr>
                                    <td><?= $dd['id'] ?></td>
                                    <td><?= $dd['nom'] ?></td>
                                    <td>
                                        <div class="form-check form-check-inline"
                                             style="margin-top:0 !important;padding: 0 !important;">
                                            <label class="form-check-label">
                                                <input type="checkbox" <?= $dd['status'] ? 'checked' : '' ?>
                                                       class="form-check-input">
                                                <i class="input-frame"></i></label>
                                        </div>
                                    </td>
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