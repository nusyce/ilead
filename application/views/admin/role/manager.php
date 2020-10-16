<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('asides_roles_message'); ?></h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th><?php echo $this->lang->line('register_name_message'); ?></th>
                                <th><?php echo $this->lang->line('plan_message'); ?></th>
                                <th><?php echo $this->lang->line('country_status_message'); ?></th>
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
                                        <div class="form-check form-check-inline"
                                             style="margin-top:0 !important;padding: 0 !important;">
                                            <label class="form-check-label">
                                                <input type="checkbox" <?= $role['active'] ? 'checked' : '' ?>
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