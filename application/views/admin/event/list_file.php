<?php
foreach ($data as $dd):
?>
<div class="row app-file-recent-access">
    <div class="col-md-3 col-6">
        <div class="card border shadow-none mb-1 app-file-info">
            <div class="card-content">
                <div class="app-file-content-logo card-img-top">
                    <i class="bx bx-dots-vertical-rounded app-file-edit-icon d-block float-right"></i>
                </div>
                <div class="card-body p-50">
                    <div class="app-file-recent-details">
                        <div class="app-file-name font-size-small font-weight-bold"><?= $dd['name'] ?></div>
                        <div class="app-file-size font-size-small text-muted mb-25"><?= $dd['file_type'] ?></div>
                        <div class="app-file-last-access font-size-small text-muted">Last accessed : 3 hours ago</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>
