<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('list_retrait'); ?>

                        <?php $this->load->view('admin/includes/message.php') ?>
                        <div class="table-responsive">
                            <table id="databable" class="table">
                                <thead>
                                <tr>
                                    <th><?php echo $this->lang->line('position'); ?></th>
                                    <th><?php echo $this->lang->line('account_type'); ?></th>
                                    <th><?php echo $this->lang->line('transaction_message'); ?></th>
                                    <th><?php echo $this->lang->line('country_status_message'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($data as $dd):
                                    ?>
                                    <tr>
                                        <td>
                                            <div><?= $dd['id'] ?></div>
                                        </td>
                                        <td>
                                            <div>
                                                <?php if($dd['account_type'] == "balance"){
                                                    echo"Retrait sur les filleuils";
                                                }
                                                else{
                                                    echo "Retrait sur les validations";
                                                }?>
                                            </div>
                                        </td>
                                        <td><?= __price($dd['amount'])  ?></td>
                                        <td><div><?php event_point($dd['status']); ?></div></td>
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

