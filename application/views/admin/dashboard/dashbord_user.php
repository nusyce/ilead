<?php  $CI =& get_instance();
$CI->load->model('User_model');
$user = $CI->User_model->get_user_by_id(get_user_id()); ?>
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

                    <div class="col-xl-8 col-12 dashboard-marketing-campaign">
                        <div class="card marketing-campaigns">
                            <div class="card-header d-flex justify-content-between align-items-center pb-1">
                                <h4 class="card-title">Mes Evenements à venir</h4>
                                <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                            </div>
                            <div class="table-responsive ps ps--active-x">
                                <!-- table start -->
                                <table id="table-marketing-campaigns" class="table table-borderless table-marketing-campaigns mb-0">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th class="">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                  <?php foreach($myevent as $my_event) {?>
                                    <tr>
                                        <td class="py-1 line-ellipsis">
                                            <?=$my_event['name']?>
                                        </td>
                                        <td class="py-1"><i class="bx bx-trending-down text-danger align-middle mr-50"></i><span> <?=date('d/m/Y', strtotime($my_event['start_date']))?></span>
                                        </td>
                                        <td class="py-1"> <?=date('d/m/Y', strtotime($my_event['end_date']))?></td>

                                        <td class="text-success py-1"><button class="btn btn-primary">Consulter</button></td>
                                    </tr>
                                  <?php }?>
                                    </tbody>
                                </table>
                                <!-- table ends -->
                                <div class="ps__rail-x" style="width: 672px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 652px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                        </div>
                </div>
                    <div class="col-xl-4 col-12 dashboard-marketing-campaign">
                        <div class="card marketing-campaigns" style="    height: 150px;">
                            <h4 style="text-align: center;margin-top: 10px">LIVE</h4>
                        </div>
                    </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="col-xl-8 col-12 dashboard-marketing-campaign">
                        <div class="card marketing-campaigns">
                            <div class="card-header d-flex justify-content-between align-items-center pb-1">
                                <h4 class="card-title">Les autres évènements</h4>
                                <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                            </div>
                            <div class="table-responsive ps ps--active-x">
                                <!-- table start -->
                                <table id="table-marketing-campaigns" class="table table-borderless table-marketing-campaigns mb-0">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>

                                        <th class="">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($othe_event as $my_event) {?>
                                        <?php $CI =& get_instance();
                                        $CI->db->where('event_id', $my_event['id']);
                                        $CI->db->where('user_id', get_user_id());
                                        $result = $CI->db->get('tbl_transactions')->result_array();?>
                                        <tr>
                                            <td class="py-1 line-ellipsis">
                                                <?=$my_event['name']?>
                                            </td>
                                            <td class="py-1"><i class="bx bx-trending-down text-danger align-middle mr-50"></i><span> <?=date('d/m/Y', strtotime($my_event['start_date']))?></span>
                                            </td>
                                            <td class="py-1"> <?=date('d/m/Y', strtotime($my_event['end_date']))?></td>
                                            <?php if(!$result) {?>
                                            <td  class="text-success py-1"><button <?php if (strtotime($user->expiration) < strtotime($my_event['end_date'])) echo "disabled"; ?> onclick="buy_token(<?=$my_event['id']?>)" class="btn btn-primary">Buy Token</button></td>
                                            <?php }else{?>
                                                <td class="text-success py-1"><a href="<?=site_url('event/paie_token/'.$my_event['id'])?>" class="btn btn-primary">Make Paiement</a></td>
                                            <?php }?>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                                <!-- table ends -->
                                <div class="ps__rail-x" style="width: 672px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 652px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
                <div class="card">
                    <div class="card-header">
                        <h3 class="greeting-text">Congratulations John!</h3>
                        <p class="mb-0">Best seller of the month</p>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-end">
                                <div class="dashboard-content-left">
                                    <h1 class="text-primary font-large-2 text-bold-500">$89k</h1>
                                    <p>You have done 57.6% more sales today.</p>
                                    <button type="button" class="btn btn-primary glow">View Sales</button>
                                </div>
                                <div class="dashboard-content-right">
                                    <img src="../../../app-assets/images/icon/cup.png" height="220" width="220" class="img-fluid" alt="Dashboard Ecommerce">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12 dashboard-visit">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Visits of 2019</h4>
                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                    <div class="card-content">
                        <div class="card-body" style="position: relative;">
                            <div id="multi-radial-chart" style="min-height: 218px;"><div id="apexchartsl8mfrzmb" class="apexcharts-canvas apexchartsl8mfrzmb light" style="width: 269px; height: 218px;"><svg id="SvgjsSvg1006" width="269" height="218.00000000000003" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(44, -10)"><defs id="SvgjsDefs1007"><clipPath id="gridRectMaskl8mfrzmb"><rect id="SvgjsRect1009" width="185" height="207" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskl8mfrzmb"><rect id="SvgjsRect1010" width="185" height="207" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1012" class="apexcharts-radialbar"><g id="SvgjsG1013"><g id="SvgjsG1014" class="apexcharts-tracks"><g id="SvgjsG1015" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 91.5 24.649999999999977 A 77.85000000000002 77.85000000000002 0 1 1 91.4864126118422 24.650001185723283" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.9770000000000016" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 91.5 24.649999999999977 A 77.85000000000002 77.85000000000002 0 1 1 91.4864126118422 24.650001185723283"></path></g><g id="SvgjsG1017" class="apexcharts-radialbar-track apexcharts-track" rel="2"><path id="apexcharts-radialbarTrack-1" d="M 91.5 38.74999999999997 A 63.75000000000003 63.75000000000003 0 1 1 91.48887352607501 38.75000097096799" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.9770000000000016" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 91.5 38.74999999999997 A 63.75000000000003 63.75000000000003 0 1 1 91.48887352607501 38.75000097096799"></path></g><g id="SvgjsG1019" class="apexcharts-radialbar-track apexcharts-track" rel="3"><path id="apexcharts-radialbarTrack-2" d="M 91.5 52.84999999999997 A 49.65000000000003 49.65000000000003 0 1 1 91.49133444030784 52.850000756212715" fill="none" fill-opacity="1" stroke="rgba(255,255,255,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.9770000000000016" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 91.5 52.84999999999997 A 49.65000000000003 49.65000000000003 0 1 1 91.49133444030784 52.850000756212715"></path></g></g><g id="SvgjsG1021"><g id="SvgjsG1026" class="apexcharts-series apexcharts-radial-series" seriesName="Target" rel="1" data:realIndex="0"><path id="SvgjsPath1027" d="M 91.5 24.649999999999977 A 77.85000000000002 77.85000000000002 0 1 1 13.649999999999977 102.50000000000001" fill="none" fill-opacity="0.85" stroke="rgba(90,141,238,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.100000000000001" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="270" data:value="75" index="0" j="0" data:pathOrig="M 91.5 24.649999999999977 A 77.85000000000002 77.85000000000002 0 1 1 13.649999999999977 102.50000000000001"></path></g><g id="SvgjsG1028" class="apexcharts-series apexcharts-radial-series" seriesName="Mart" rel="2" data:realIndex="1"><path id="SvgjsPath1029" d="M 91.5 38.74999999999997 A 63.75000000000003 63.75000000000003 0 1 1 30.870147086183934 82.80016660859707" fill="none" fill-opacity="0.85" stroke="rgba(255,91,92,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.100000000000001" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-1" data:angle="288" data:value="80" index="0" j="1" data:pathOrig="M 91.5 38.74999999999997 A 63.75000000000003 63.75000000000003 0 1 1 30.870147086183934 82.80016660859707"></path></g><g id="SvgjsG1030" class="apexcharts-series apexcharts-radial-series" seriesName="Ebay" rel="3" data:realIndex="2"><path id="SvgjsPath1031" d="M 91.5 52.84999999999997 A 49.65000000000003 49.65000000000003 0 1 1 51.33230622928384 73.3164622236787" fill="none" fill-opacity="0.85" stroke="rgba(253,172,65,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="4.100000000000001" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-2" data:angle="306" data:value="85" index="0" j="2" data:pathOrig="M 91.5 52.84999999999997 A 49.65000000000003 49.65000000000003 0 1 1 51.33230622928384 73.3164622236787"></path></g><circle id="SvgjsCircle1022" r="42.661500000000004" cx="91.5" cy="102.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1023" class="apexcharts-datalabels-group" transform="translate(0, 0)" style="opacity: 1;"><text id="SvgjsText1024" font-family="IBM Plex Sans" x="91.5" y="127.5" text-anchor="middle" dominant-baseline="auto" font-size="15px" fill="#828d99" class="apexcharts-datalabel-label" style="font-family: &quot;IBM Plex Sans&quot;; fill: rgb(130, 141, 153);">Total Visits</text><text id="SvgjsText1025" font-family="Rubik" x="91.5" y="103.5" text-anchor="middle" dominant-baseline="auto" font-size="30px" fill="#373d3f" class="apexcharts-datalabel-value" style="font-family: Rubik;">80%</text></g></g></g></g><line id="SvgjsLine1032" x1="0" y1="0" x2="183" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1033" x1="0" y1="0" x2="183" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div></div></div>
                            <ul class="list-inline d-flex justify-content-around mb-0">
                                <li> <span class="bullet bullet-xs bullet-primary mr-50"></span>Target</li>
                                <li> <span class="bullet bullet-xs bullet-danger mr-50"></span>Mart</li>
                                <li> <span class="bullet bullet-xs bullet-warning mr-50"></span>Ebay</li>
                            </ul>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 322px; height: 266px;"></div></div><div class="contract-trigger"></div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="zone_modal"></div>
<script>
    function buy_token(id)
    {
        requestGet('event/buy_token/' + id).done(function (response) {
            $('#zone_modal').html(response)
            $('#buy_token_modal').modal('show')
        });
    }
</script>






