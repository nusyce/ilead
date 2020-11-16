<div class="page-content">
    <form method="post" action="<?= base_url('config') ?>">
        <div class="row grid-margin">
            <div class="col-md-6 col-12">
                <div class="card">
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
                                        <input type="number" class="form-control"
                                               name="percentage_adherent"
                                               value="<?= get_option('percentage_adherent') ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Pourcentage des commissions</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" class="form-control"
                                               name="percentage_commission"
                                               value="<?= get_option('percentage_commission') ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Prix du token</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="token_price"
                                               value="<?= get_option('token_price') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
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
                                        <input type="text" class="form-control" name="link_zoo"
                                               value="<?= get_option('link_zoo') ?>"
                                               placeholder="Lien de la reunion zoom">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Mot de passe de la reunion</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="password" id="email-id" class="form-control"
                                               name="password_meeting" value="<?= get_option('password_meeting') ?>"
                                               placeholder="Mot de passe du meeting">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row grid-margin">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Frais de changement de status</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Classique vers Classique</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="clasic_to_clasic"
                                               value="<?= get_option('clasic_to_clasic') ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Classique vers VIP</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="clasic_to_vip"
                                               value="<?= get_option('clasic_to_vip') ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Classique vers Platinium</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="clasic_to_platinium"
                                               value="<?= get_option('clasic_to_platinium') ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>VIP vers VIP</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="vip_to_vip"
                                               value="<?= get_option('vip_to_vip') ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>VIP vers Platinium</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="vip_to_platinium"
                                               value="<?= get_option('vip_to_platinium') ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Platinium vers Platinium</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" class="form-control" name="platinium_to_platinium"
                                               value="<?= get_option('platinium_to_platinium') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <input type="submit" class="btn btn-primary" value="Enregistrer">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>





