<div class="page-content">
    <?php
    $CI= get_instance();
    $CI->db->where('event_id',$event->id);
    $depense= $CI->db->get('tbl_depenses')->result_array();
    $CI->db->where('event_id',$event->id);
    $adherents= $CI->db->get('tbl_book_event')->result_array();
    $CI->db->where('ref_id',$event->id);
    $CI->db->where('ref','events');
    $file= $CI->db->get('tbl_attachments')->result_array();

    $CI->db->where('event_id',$event->id);
    $transaction= $CI->db->get('tbl_transactions')->result_array();
    $this->load->view('admin/event/nav'); ?>
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
                                                <span class="align-middle text-muted">Total des depenses</span>
                                                <div class="d-flex align-items-center">
                                                    <h4 class="mt-1 ml-50 text-center"><?php
                                                        $dep = 0;
                                                        foreach ($depense as $dd){
                                                            $dep = $dep + $dd['amount'];
                                                        }
                                                        echo  __Price($dep);
                                                    ?></h4>
                                                </div>
                                            </div>
                                            <div class="user-analytics">
                                                <i class="bx bx-trending-up align-middle mr-25"></i>
                                                <span class="align-middle text-muted">Total des participants</span>
                                                <center>                                                <div class="d-flex align-items-center">
                                                        <h4 class="mt-1 ml-50 align-items-center"><?php
                                                            $adh = 0;
                                                            foreach ($adherents as $dd){
                                                                $adh = $adh + 1;
                                                            }
                                                            echo $adh;
                                                            ?></h4>
                                                    </div></center>

                                            </div>
                                            <div class="user-analytics">
                                                <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
                                                <span class="align-middle text-muted">Liste des fichiers</span>
                                                <div class="d-flex text-center" style="text-align: center">
                                                    <div id="radial-danger-chart"></div>
                                                        <h4 class="mt-1 ml-50"><?php
                                                            $fil = 0;
                                                            foreach ($file as $dd){
                                                                $fil = $fil + 1;
                                                            }
                                                            echo $fil;
                                                            ?>
                                                        </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="analytics-bar-chart"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                        <h6 class=" mb-0">Total des revenus</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h4 class="mb-2 text-center"><?php
                                                $tra = 0;
                                                foreach ($transaction as $dd){
                                                    if(empty($dd["ticket"]) && $dd['status']=='paie'){
                                                        $tra = $tra + $dd["amount"];
                                                    }
                                                }
                                                echo __Price($tra);
                                                ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dashboard text-center card-title justify-content-between align-items-baseline">
                                        <h6 class=" mb-0">Gain retenu</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h4 class="mb-2 text-center"><?php
                                                    $som = $tra - $dep;
                                                    echo __PRICE($som);
                                                    ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12 col-sm-12">
                            <div class="row">
                                <!-- Conversion Chart Starts-->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>