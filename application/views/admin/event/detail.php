<div class="page-content">
    <?php $this->load->view('admin/event/nav'); ?>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <H4><?=$event->name?></H4>
                    <H6><?=$event->start_date?> | <?=$event->end_date?></H6>
                    <p><?=$event->description?></p>
                </div>
            </div>
        </div>
    </div>
</div>