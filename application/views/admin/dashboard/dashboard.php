<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0"><?php echo $this->lang->line('dashboard_message'); ?></h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">
                
                <?php if(get_user_role_id()==2){?><div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0"><?php echo $this->lang->line('number_message'); ?></h6>
                                <div class="dropdown mb-2">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="eye" class="icon-sm mr-2"></i> <span
                                                    class="">View</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="edit-2" class="icon-sm mr-2"></i> <span
                                                    class="">Edit</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="trash" class="icon-sm mr-2"></i> <span
                                                    class="">Delete</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="download" class="icon-sm mr-2"></i> <span
                                                    class="">Download</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2"><?php
                                        echo total_rows('tbl_users',[])  ?></h3>
                                    <div class="d-flex align-items-baseline">
                                       <!-- <p class="text-success">
                                            <span>+3.3%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>-->
                                    </div>
                                </div>
                                <div class="col-6 col-md-12 col-xl-7">
                                    <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">New Orders</h6>
                                <div class="dropdown mb-2">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="eye" class="icon-sm mr-2"></i> <span
                                                    class="">View</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="edit-2" class="icon-sm mr-2"></i> <span
                                                    class="">Edit</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="trash" class="icon-sm mr-2"></i> <span
                                                    class="">Delete</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="download" class="icon-sm mr-2"></i> <span
                                                    class="">Download</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2"><?php
                                        echo total_rows('tbl_roles',[])  ?></h3>
                                    <div class="d-flex align-items-baseline">
                                       <!-- <p class="text-danger">
                                            <span>-2.8%</span>
                                            <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                                        </p>-->
                                    </div>
                                </div>
                                <div class="col-6 col-md-12 col-xl-7">
                                    <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><?php } ?>
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h6 class="card-title mb-0">Growth</h6>
                                <div class="dropdown mb-2">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="eye" class="icon-sm mr-2"></i> <span
                                                    class="">View</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="edit-2" class="icon-sm mr-2"></i> <span
                                                    class="">Edit</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="trash" class="icon-sm mr-2"></i> <span
                                                    class="">Delete</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                                        <a class="dropdown-item d-flex align-items-center" href="#"><i
                                                    data-feather="download" class="icon-sm mr-2"></i> <span
                                                    class="">Download</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12 col-xl-5">
                                    <h3 class="mb-2">89.87%</h3>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-success">
                                            <span>+2.8%</span>
                                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12 col-xl-7">
                                    <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- row -->

    <div class="row">
        <div class="col-12 col-xl-12 grid-margin stretch-card">
            <div class="card overflow-hidden">
                <!--<div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                        <h6 class="card-title mb-0">Revenuexcdccdc</h6>-->
                        <!--  <div class="dropdown">
                           -- <button class="btn p-0" type="button" id="dropdownMenuButton3"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                              </button>-->
                           <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="edit-2" class="icon-sm mr-2"></i> <span
                                            class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="trash" class="icon-sm mr-2"></i> <span
                                            class="">Delete</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="printer" class="icon-sm mr-2"></i> <span
                                            class="">Print</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="download" class="icon-sm mr-2"></i> <span
                                            class="">Download</span></a>
                            </div>
                        </div
                    </div>>-->
                <!--    <div class="row align-items-start mb-2">
                        <div class="col-md-7">
                            <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business has
                                from its normal business activities, usually from the sale of goods and services
                                to customers.</p>
                        </div>
                        <div class="col-md-5 d-flex justify-content-md-end">
                            <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-outline-primary">Today</button>
                                <button type="button" class="btn btn-outline-primary d-none d-md-block">Week
                                </button>
                                <button type="button" class="btn btn-primary">Month</button>
                                <button type="button" class="btn btn-outline-primary">Year</button>
                            </div>
                        </div>
                    </div>-->
                    <!--<div class="flot-wrapper">
                        <div id="flotChart1" class="flot-chart"></div>
                    </div>
                </div>-->
            </div>
        </div>
    </div> <!-- row -->


    <!-- Basic tabs start -->
    <section id="basic-tabs-components">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h4>Basic Tab</h4>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface.</p>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">
                                <i class="bx bx-home align-middle"></i>
                                <span class="align-middle">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false">
                                <i class="bx bx-user align-middle"></i>
                                <span class="align-middle">Service</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" role="tab" aria-selected="false">
                                <i class="bx bx-message-square align-middle"></i>
                                <span class="align-middle">Messages</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                            <p>
                                Gummi bears liquorice brownie donut pastry bonbon biscuit. Jelly-o pudding fruitcake toffee apple pie
                                sugar
                                plum biscuit. Sweet roll brownie marshmallow dragée. Carrot cake carrot cake muffin donut gingerbread
                                sweet.
                                pudding chocolate. Halvah powder sugar plum marshmallow powder biscuit. Biscuit pudding fruitcake. Donut
                                gummies
                                dessert lollipop pie carrot cake bear claw lollipop danish.
                            </p>
                        </div>
                        <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                            <p>
                                Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                                candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                                liquorice icing cupcake.
                            </p>
                        </div>
                        <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">
                            <p>
                                Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                                cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream
                                powder
                                tootsie roll cake.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Tag Input end -->


</div>
