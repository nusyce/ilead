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
                    <div class="form-group">
                        <label  for="exampleInputEmail1"><?php echo $this->lang->line('register_country_message'); ?></label>
                        <select required style="color: black"  id="monselect" name="country">
                            <?php

                            $countryCode = ip_info("Visitor", "Country Code"); // IN
                            $iso = get_country_by_iso($countryCode)->iso;

                            foreach (countries() as $country) { ?>
                                <option <?= $country['iso'] == $iso ? 'selected' : ''; ?>
                                        value="<?= $country['id'] ?>"><?= $country['name'] ?></option>
                            <?php } ?></select>
                    </div>



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
