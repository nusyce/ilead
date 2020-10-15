<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Roles</h6>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Membres</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($roles as $role): ?>
                                <tr>
                                    <td><?= $role['id'] ?></td>
                                    <td><?= $role['name'] ?></td>
                                    <td><?= 0 ?></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <input type="checkbox" checked="" class="form-check-input">
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