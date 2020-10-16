<div class="page-content">


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Transactions</h6>
                    <div class="table-responsive">
                        <table id="databable" class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>N° Transaction</th>
                                <th>Plan</th>
                                <th>Adherant</th>
                                <th>Montant</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>#2121</td>
                                <td>61</td>
                                <td>System Architect</td>
                                <td>$320,800</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="badge badge-info dropdown-toggle" id="dropdownMenuButton"
                                           data-toggle="dropdown" aria-haspopup="true" href="#" aria-expanded="false">
                                            En attente
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" id="dopayer" href="#">Payé</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </div>
                                    </div>
                                </td>
                                <td>2011/04/25</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addAttachment" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="text-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>
    </div>
</div>
