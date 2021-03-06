<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Liste des pays</h6>
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
                            foreach (countries() as $county): ?>
                                <tr>
                                    <td><?= $county['id'] ?></td>
                                    <td><?= $county['name'] ?></td>
                                    <td>
                                        <div class="custom-switch-glow"
                                             style="margin-top:0 !important;padding: 0 !important;">
                                            <label class="custom-switch-glow">
                                                <input type="checkbox" <?= $county['active'] ? 'checked' : '' ?>
                                                       class="form-check-input">
                                                </label>
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