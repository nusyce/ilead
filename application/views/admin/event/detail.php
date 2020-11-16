<div class="page-content">
    <?php $this->load->view('admin/event/nav'); ?>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <H6>Du: <?= formatted_date($event->start_date)?> -  <?= formatted_date($event->end_date)?></H6>
                    <hr>
                    <h6>Description</h6>
                    <p><?=$event->description?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Rapport financier</h4>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pb-1">
                                        <div class="d-flex justify-content-around align-items-center flex-wrap">
                                            <div class="user-analytics">
                                                <i class="bx bx-user mr-25 align-middle"></i>
                                                <span class="align-middle text-muted">Users</span>
                                                <div class="d-flex">
                                                    <div id="radial-success-chart"></div>
                                                    <h3 class="mt-1 ml-50">61K</h3>
                                                </div>
                                            </div>
                                            <div class="sessions-analytics">
                                                <i class="bx bx-trending-up align-middle mr-25"></i>
                                                <span class="align-middle text-muted">Sessions</span>
                                                <div class="d-flex">
                                                    <div id="radial-warning-chart"></div>
                                                    <h3 class="mt-1 ml-50">92K</h3>
                                                </div>
                                            </div>
                                            <div class="bounce-rate-analytics">
                                                <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
                                                <span class="align-middle text-muted">Bounce Rate</span>
                                                <div class="d-flex">
                                                    <div id="radial-danger-chart"></div>
                                                    <h3 class="mt-1 ml-50">72.6%</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="analytics-bar-chart"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-12 dashboard-referral-impression">
                            <div class="row">
                                <!-- Referral Chart Starts-->
                                <div class="col-xl-12 col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body text-center pb-0">
                                                <h2>$32,690</h2>
                                                <span class="text-muted">Referral</span> 40%
                                                <div id="success-line-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12 col-sm-12">
                            <div class="row">
                                <!-- Conversion Chart Starts-->
                                <div class="col-xl-12 col-md-6 col-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
                                            <div class="conversion-title">
                                                <h4 class="card-title">Conversion</h4>
                                                <p>60%
                                                    <i class="bx bx-trending-up text-success font-size-small align-middle mr-25"></i>
                                                </p>
                                            </div>
                                            <div class="conversion-rate">
                                                <h2>89k</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>