<div class="page-content">

    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Changer le role</h6>
                    <form class="forms-sample" method="post" action="<?= base_url('users/change_role/'.$user->id)?>">
                        <?php $this->load->view('admin/includes/message.php') ?>
                        <input type='text' hidden value='<?=$user->id ?>' name='id'></input>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Name</label>
                                    <input value='<?=$user->firstname ?>' disabled name="name" value="" type="text" class="form-control" id="exampleInputUsername1"
                                           autocomplete="name" placeholder="name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">LastName</label>
                                    <input value='<?=$user->lastname ?>' disabled name="lastname" type="text" class="form-control" id="exampleInputUsername1"
                                           autocomplete="name" placeholder="lastname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input value='<?=$user->email ?>' disabled name="email" type="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Email">
                                </div>
                            </div>
                           
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Role</label>
                                    <select style="color: black"  id="monselect" name="role">
                                        
                                            <option <?php echo($user->role_id)==1 ? 'selected' :'' ?> value="1">Client</option>
                                        <option <?php echo($user->role_id)==2 ? 'selected' :'' ?> value="2">Administrateur</option>

                                    </select>
                                </div>
                            </div>
                      

                            

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