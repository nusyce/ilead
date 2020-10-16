<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('dashboard_adherent_message'); ?>
                        <a type="button" class="btn pull-right btn-primary btn-icon-text mb-1 mb-md-0"
                           href="<?= base_url('users/child') ?>">
                            <i class="btn-icon-prepend" data-feather="plus"></i>
                            Ajouter
                        </a></h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th><?php echo $this->lang->line('register_name_message'); ?></th>
                                <th><?php echo $this->lang->line('user_message'); ?></th>
                                <th><?php echo $this->lang->line('user_office_message'); ?></th>
                                <th><?php echo $this->lang->line('user_age_message'); ?></th>
                                <th><?php echo $this->lang->line('user_start_date_message'); ?></th>
                                <th><?php echo $this->lang->line('user_salary_message'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>