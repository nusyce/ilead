<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('child_user_message'); ?></h6>
                    <div class="table-responsive">
                        <?php
                        $this->load->view('admin/includes/message.php'); ?>
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th><?php echo $this->lang->line('register_name_message'); ?></th>
                                <th><?php echo $this->lang->line('child_profession_message'); ?></th>
                                <th><?php echo $this->lang->line('child_genre_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_plan_message'); ?></th>
                                <th><?php echo $this->lang->line('child_sponsor_message'); ?></th>
                                <th><?php echo $this->lang->line('register_cluster_message'); ?></th>
                                <th><?php echo $this->lang->line('asides_roles_message'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($data as $dd): ?>
                                <tr>
                                    <td>
                                        <div><?= $dd['firstname'] . ' ' . $dd['lastname'] ?></div>
                                        <div class="detail-option">
                                            <a href="#" class=""><?php echo $this->lang->line('transaction_detail_message'); ?></a> | <a
                                                    href="<?= base_url('users/delete/') . $dd['id'] ?>"
                                                    data-message="Voulez vous supprimer cet utilisateur?"
                                                    class="delete text-danger"><?php echo $this->lang->line('dashboard_delete_message'); ?></a>
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