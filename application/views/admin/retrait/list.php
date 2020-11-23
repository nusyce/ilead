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
                                <th><?php echo $this->lang->line('register_name_message'); ?></th>
                                <th><?php echo $this->lang->line('transaction_message'); ?></th>
                                <th><?php echo $this->lang->line('country_status_message'); ?></th>
                                <th>Actions</th>
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
                                    <td>
                                        <?php
                                            $CI= get_instance();
                                            $CI->db->where('id',$dd['user_id']);
                                            $user= $CI->db->get('tbl_users')->row();

                                            echo $user->firstname.' '.$user->lastname?>

                                    </td>
                                    <td><?= __price($dd['amount'])  ?></td>
                                    <td><div><?php event_point($dd['status']); ?></div></td>
                                    <td>
                                        <div>
                                            <a class="btn btn-success" href="<?= base_url('withdrawal/approuve/'.$dd['id'])?>" > Approuver</a>
                                            <a class="btn btn-danger" href="<?= base_url('withdrawal/block/'.$dd['id'])?>" > Bloquer</a>
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
<div id="edit_zone"></div>

<script>
    function edit(e, id) {
        e.preventDefault();
        requestGet('event/modal/' + id).done(function (response) {
            $('#edit_zone').html(response)
            $('#editevent').modal('show')
        });
    }

    function UpdateStatus(id) {
        var Status = $(this).val();

        $(function () {
            $.ajax({
                url: 'Ajax/StatusUpdate.php?Status='.Status, data: "", dataType: 'json'
            });

        });
    }
</script>
