<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4><?=$event->name?></h4>
                <hr>
                <ul class="nav user-profile-nav justify-content-center justify-content-md-start nav-tabs border-bottom-0 mb-0"
                    role="tablist">
                    <li class="nav-item pb-0">
                        <a class=" nav-link d-flex px-1 <?php if ($navigation == '') echo 'active'; ?>" href=<?=base_url('event/event/'.$event->id) ?> ><i class="bx bx-home"></i><span
                                    class="d-none d-md-block">Detail de la retraitre</span></a>
                    </li>
                    <li class="nav-item pb-0">
                        <a class="nav-link d-flex px-1 <?php if ($navigation == 'listfile') echo 'active'; ?>" id="activity-tab" href=<?=base_url('event/event/'.$event->id.'?navigation=listfile') ?> ><i
                                    class="bx bx-user"></i><span class="d-none d-md-block">Fichiers de la retraite</span></a>
                    </li>
                    <li class="nav-item pb-0">
                        <a class="nav-link d-flex px-1 <?php if ($navigation == 'participants') echo 'active'; ?>" href=<?=base_url('event/event/'.$event->id.'?navigation=participants') ?>><i
                                    class="bx bx-message-alt"></i><span
                                    class="d-none d-md-block">Participants de la retraite</span></a>
                    </li>
                    <li class="nav-item pb-0 mr-0">
                        <a class="nav-link d-flex px-1 <?php if ($navigation == 'depense') echo 'active'; ?>" href=<?=base_url('event/event/'.$event->id.'?navigation=depense') ?>></i><span
                                    class="d-none d-md-block">Dépenses de la retraite</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>