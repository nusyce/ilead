<div class="page-content">

    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $this->lang->line('add_adherent_message'); ?></h6>
                    <form class="forms-sample" method="post" action="<?= base_url('users/child')?>">
                        <?php $this->load->view('admin/includes/message.php') ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input name="name" type="text" class="form-control" id="exampleInputUsername1"
                                           autocomplete="name" placeholder="name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">LastName</label>
                                    <input name="lastname" type="text" class="form-control" id="exampleInputUsername1"
                                           autocomplete="name" placeholder="lastname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Whatsapp Phone</label>
                                    <input name="whatsapp" type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="Whatsapp Phone">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Country</label>
                                    <select style="color: black"  id="monselect" name="country">
                                        <?php foreach(countries() as $country) { ?>
                                            <option value="<?=$country['id'] ?>"><?=$country['name'] ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cluster</label>
                                    <select style="color: black"  id="monselect" name="cluster">
                                        <?php foreach(clusters() as $cluster) { ?>
                                            <option  value="<?=$cluster['id'] ?>"><?=$cluster['name'] ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>

                                    <input hidden name="sponsor" value="<?=get_user_cle()?>" id="sponsor" type="text" class="form-control" id="exampleInputEmail1"
                                           placeholder="Sponsor KEY">


                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sexe</label>
                                    <select style="color: black"  id="monselect" name="sexe">

                                        <option value="Masculin">Masculin</option>
                                        <option value="Feminin">Feminin</option>


                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Plan</label>
                                    <select style="color: black"  id="monselect" name="plan">
                                        <?php foreach($plans as $plan) { ?>
                                            <option   value="<?=$plan['id'] ?>"><?=$plan['name'] ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <?php    $CI = &get_instance();
                            $CI->db->where('tbl_free_tickets.user_id', get_user_id());
                            $CI->db->where('tbl_free_tickets.is_used', 0);
                            $tickets = $CI->db->get('tbl_free_tickets')->result_array();
                            ?>
                            <?php if (count($tickets) > 0) {?>
                            <div class="col-6">
                                <input onclick="change()" type="checkbox" id="use_ticket" name="use_ticket">
                                <label for="use_ticket">Use ticket ?</label>
                                <div class="form-group" id="bloc_tickets" style="display: none">
                                    <label for="exampleInputEmail1">Tickets</label>
                                    <select style="color: black"  id="monselect" name="ticket">
                                        <?php foreach($tickets as $ticket) { ?>
                                            <option   value="<?=$ticket['code'] ?>"><?=$ticket['code'] ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                        <div class="mt-3">
                            <input style="    width: 150px;" class="btn btn-primary text-white mr-2 mb-2 mb-md-0" type="submit" value="Sumit">

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function change()
    {
        if (document.getElementById('use_ticket').checked)
        {
            document.getElementById('bloc_tickets').style.display = "block";
        } else {
            document.getElementById('bloc_tickets').style.display = "none";
        }
    }
</script>