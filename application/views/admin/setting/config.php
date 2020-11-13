<div class="page-content">
    <form method="post" action="<?=base_url('config') ?>">
    <div class="row">
        <div class="col-md-6 col-12">
            <div class="card" style="height: 392.688px;">
                <div class="card-header">
                    <h4 class="card-title">Paramétrage des commissions</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Pourcentage des adhérents</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="first-name" class="form-control" name="percentage_adherent"  value="<?= get_option('percentage_adherent')?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pourcentage des commissions</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="first-name" class="form-control" name="percentage_commission" value="<?= get_option('percentage_commission')?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Prix du token</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="token_price"  value="<?= get_option('token_price')?>">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="card" style="height: 392.688px;">
                <div class="card-header">
                    <h4 class="card-title">Paramétrage de ZOOM</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Lien de la reunion Zoom</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="link_telegram"  value="<?= get_option('link_telegram')?>" placeholder="Lien de la reunion zoom">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Mot de passe de la reunion</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                            <input type="password" id="email-id" class="form-control" name="password_meeting"  value="<?= get_option('password_meeting')?>" placeholder="Mot de passe du meeting">
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <input type="submit" class="btn btn-primary"  value="Enregistrer">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </form>
</div>





