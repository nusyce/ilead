<div class="modal fade" id="editevent" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"
                    id="exampleModalLabel">  <?php echo $title?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if (isset($event)) {
                    $id=$event->id;
                }
                else {
                    $id="";}?>
                <form role="form" autocomplete="off" accept-charset="utf-8" method="post" enctype="multipart/form-data" action="<?= base_url('event/save/'.$id) ?>" >
                    <label for="name"><?php echo $this->lang->line('nom_evenement'); ?></label>
                    <input type="text" value="<?php if (isset($event)) echo $event->name; ?>" name="name" class="form-control" id="name"><br>
                    <label for="number_place"><?php echo $this->lang->line('limitation_de_place'); ?></label>
                    <input type="number" value="<?php if (isset($event)) echo $event->number_place; ?>" name="number_place" class="form-control" id="name"><br>
                    <label for=""><?php echo $this->lang->line('type_de_plan'); ?></label>
                        <div class="form-inline">
                            <?php foreach ($plan as $item): ?>
                                <div class="col-md-3" style="padding: 0;margin-right: 30px">
                                    <input class="my_plan" id="<?=$item['id']?>" class="form-control" type="checkbox" name="<?=$item['id']?>"
                                        <?php  if (isset($event) && $event->plan_type!=null){
                                        $plans = unserialize($event->plan_type);
                                        foreach ($plans as $value){
                                            if($value['plan']==$item['id'])
                                                echo "checked";
                                        }

                                    }?> value="<?=$item['id']?>">&nbsp&nbsp<?=$item['name']?>
                                </div>

                            <?php endforeach; ?>
                        </div>

                        <div class="form-inline">
                            <div class="col-md-3" style="padding: 0;margin-right: 30px">
                            <input type="number" <?php  if (isset($event) && $event->plan_type!=null) {
                                $plans = unserialize($event->plan_type);
                                foreach ($plans as $value) {
                                    if ($value['plan'] == 1)
                                        echo 'value=' . $value['price'] . ' ';
                                }
                            }?>  name="price_1" id="price_1" style="display: none;width: 130px" class="form-control " placeholder="prix du token">
                            </div>
                                <div class="col-md-3" style="padding: 0;margin-right: 30px">
                            <input style="display: none;  width: 130px" class="form-control " <?php  if (isset($event) && $event->plan_type!=null) {
                                $plans = unserialize($event->plan_type);
                                foreach ($plans as $value) {
                                    if ($value['plan'] == 2)
                                        echo 'value=' . $value['price'] . ' ';
                                }
                            }?>    type="number" id="price_2" placeholder="prix du token" name="price_2">
                                </div>
                                    <div class="col-md-3" style="padding: 0;margin-right: 30px">  <input style="display: none;
              width: 130px" class="form-control "  <?php  if (isset($event) && $event->plan_type!=null) {
                                            $plans = unserialize($event->plan_type);
                                            foreach ($plans as $value) {
                                                if ($value['plan'] == 3)
                                                    echo 'value=' . $value['price'] . ' ';
                                            }
                                        }?> placeholder="prix du token" type="number" id="price_3" name="price_3">
                                    </div>
                        </div>

                    <label for="descrption"><?php echo $this->lang->line('description'); ?></label>
                    <textarea required rows="4" class="form-control" name="description" id="descrption"><?php if (isset($event)) echo $event->description; ?> </textarea><br>
                    <div class="form-inline">

                        <label for="start_date" class="col-md-6"><?php echo $this->lang->line('date_debut'); ?></label>
                        <label for="end_date" class="col-md-6"><?php echo $this->lang->line('date_fin'); ?></label>

                    </div>

                    <div class="form-inline">
                        <input required type="datetime-local"  value="<?php if (isset($event)) echo date('Y-m-d\TH:i',strtotime($event->start_date)); ?>" name="start_date" class="form-control col-md-5 pickadate" style="padding: 0;margin-right: 30px" placeholder="Select Date" id="start_date">
                        <input required type="datetime-local" value="<?php if (isset($event)) echo date('Y-m-d\TH:i',strtotime($event->end_date)); ?>" name="end_date" class="form-control col-md-5 pickadate" style="padding: 0;margin-right: 30px" placeholder="Select Date" id="end_date">
                    </div>
                    <input type="hidden" name="id" id="id" value="<?php if (isset($event)) echo $event->id; ?>">
                    <!--<?php  if(isset($event) && count($event->attachment)>0){?>
                        <h6>liste des fichiers</h6><br>
                        <?php foreach ($event->attachment as $attach){?>
                            <?php if ($attach['file_type']=="image/png"){?>
                                <img src="<?=site_url('uploads/'.$attach['ref'].'/'.$attach['ref_id'].'/'.$attach['patch'])?>" style="width: 100px">
                            <?php }else{?>
                        <a href="<?=site_url('file/?file='.$attach['ref'].'/'.$attach['ref_id'].'/'.$attach['patch'])?>" target="_blank"><?=$attach['patch']?></a>
                            <?php }?>
                        <?php }?>
                        <br>
                    <?php }?>-->

                    <!--<div class="row">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-container">

                                            <div class="form-group">
                                                <button id="addEmail" class="btn btn-primary"><?php echo $this->lang->line('add_message'); ?></button>
                                                <button id="removeEmail" class="btn btn-warning"><?php echo $this->lang->line('delete_last_field_message'); ?>
                                                </button>
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo $this->lang->line('add_file_message'); ?></label>
                                                <input type="file" name="attachment[]" required
                                                       class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info"
                                                           disabled="" placeholder="<?php echo $this->lang->line('add_file_message'); ?>">
                                                    <span class="input-group-append">
												<button class="file-upload-browse btn btn-primary" type="button"><?php echo $this->lang->line('select_file_message'); ?></button>
											</span>
                                                </div>
                                            </div>
                                            <div id="more-email"></div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>-->


                    <br><br>
                    <div class="text-right">
                        <button type="button" class="btn btn-secondary "
                                data-dismiss="modal"><?php echo $this->lang->line('transaction_fermer_message'); ?></button>
                        <button type="submit"
                                class="btn btn-primary deleted"
                                data-message="Confirmez vous ce paiement?"><?php echo $this->lang->line('transaction_valider_message'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $( document ).ready(function() {


           if($("#1").is(":checked"))
            {
                document.getElementById('price_1').style.display ='block';
            }
        if($("#2").is(":checked"))
        {
            document.getElementById('price_2').style.display ='block';
        }
        if($("#3").is(":checked"))
        {
            document.getElementById('price_3').style.display ='block';
        }


    });



    $(".my_plan").click(function(event){
        var x = $(this).attr("id");
        var final = document.getElementById('price_'+x);
        if($(this).is(":checked")){
            final.style.display = "block";
        }
        else{
            final.style.display = "none";

        }
    });
</script>