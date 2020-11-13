<!-- partial:partials/_navbar.html -->
<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        <!--      <form class="search-form">
                  <div class="input-group">
                      <div class="input-group-prepend">
                          <div class="input-group-text">
                              <i data-feather="search"></i>
                          </div>
                      </div>
                      <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                  </div>
              </form>-->
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-us mt-1" title="us"></i> <span
                            class="font-weight-medium ml-1 mr-1"><?php echo $this->lang->line('asides_message'); ?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="languageDropdown">
                    <a href="<?=base_url('lang/?lang=en') ?>" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span
                                class="ml-1"><?php echo $this->lang->line('asides_message'); ?></span></a>
                    <a href="<?=base_url('lang/?lang=fr') ?>" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr"
                                                                         title="fr" id="fr"></i> <span
                                class="ml-1"> <?php echo $this->lang->line('asides_french_message'); ?> </span></a><!--
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de"
                                                                             title="de" id="de"></i> <span
                                class="ml-1"> German </span></a>
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt"
                                                                             title="pt" id="pt"></i> <span
                                class="ml-1"> Portuguese </span></a>
                        <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es"
                                                                             title="es" id="es"></i> <span
                                class="ml-1"> Spanish </span></a>-->
                </div>
            </li>
            <!--                <li class="nav-item dropdown nav-apps">
                                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="grid"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="appsDropdown">
                                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                                        <p class="mb-0 font-weight-medium">Web Apps</p>
                                        <a href="javascript:;" class="text-muted">Edit</a>
                                    </div>
                                    <div class="dropdown-body">
                                        <div class="d-flex align-items-center apps">
                                            <a href="pages/apps/chat.html"><i data-feather="message-square" class="icon-lg"></i>
                                                <p>Chat</p></a>
                                            <a href="pages/apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i>
                                                <p>Calendar</p></a>
                                            <a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i>
                                                <p>Email</p></a>
                                            <a href="pages/general/profile.html"><i data-feather="instagram"
                                                                                    class="icon-lg"></i>
                                                <p>Profile</p></a>
                                        </div>
                                    </div>
                                    <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                        <a href="javascript:;">View all</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown nav-messages">
                                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="mail"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="messageDropdown">
                                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                                        <p class="mb-0 font-weight-medium">9 New Messages</p>
                                        <a href="javascript:;" class="text-muted">Clear all</a>
                                    </div>
                                    <div class="dropdown-body">
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="figure">
                                                <img src="https://via.placeholder.com/30x30" alt="userr">
                                            </div>
                                            <div class="content">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p>Leonardo Payne</p>
                                                    <p class="sub-text text-muted">2 min ago</p>
                                                </div>
                                                <p class="sub-text text-muted">Project status</p>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="figure">
                                                <img src="https://via.placeholder.com/30x30" alt="userr">
                                            </div>
                                            <div class="content">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p>Carl Henson</p>
                                                    <p class="sub-text text-muted">30 min ago</p>
                                                </div>
                                                <p class="sub-text text-muted">Client meeting</p>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="figure">
                                                <img src="https://via.placeholder.com/30x30" alt="userr">
                                            </div>
                                            <div class="content">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p>Jensen Combs</p>
                                                    <p class="sub-text text-muted">1 hrs ago</p>
                                                </div>
                                                <p class="sub-text text-muted">Project updates</p>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="figure">
                                                <img src="https://via.placeholder.com/30x30" alt="userr">
                                            </div>
                                            <div class="content">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p>Amiah Burton</p>
                                                    <p class="sub-text text-muted">2 hrs ago</p>
                                                </div>
                                                <p class="sub-text text-muted">Project deadline</p>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="figure">
                                                <img src="https://via.placeholder.com/30x30" alt="userr">
                                            </div>
                                            <div class="content">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p>Yaretzi Mayo</p>
                                                    <p class="sub-text text-muted">5 hr ago</p>
                                                </div>
                                                <p class="sub-text text-muted">New record</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                        <a href="javascript:;">View all</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown nav-notifications">
                                <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i data-feather="bell"></i>
                                    <div class="indicator">
                                        <div class="circle"></div>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                                    <div class="dropdown-header d-flex align-items-center justify-content-between">
                                        <p class="mb-0 font-weight-medium">6 New Notifications</p>
                                        <a href="javascript:;" class="text-muted">Clear all</a>
                                    </div>
                                    <div class="dropdown-body">
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="icon">
                                                <i data-feather="user-plus"></i>
                                            </div>
                                            <div class="content">
                                                <p>New customer registered</p>
                                                <p class="sub-text text-muted">2 sec ago</p>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="icon">
                                                <i data-feather="gift"></i>
                                            </div>
                                            <div class="content">
                                                <p>New Order Recieved</p>
                                                <p class="sub-text text-muted">30 min ago</p>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="icon">
                                                <i data-feather="alert-circle"></i>
                                            </div>
                                            <div class="content">
                                                <p>Server Limit Reached!</p>
                                                <p class="sub-text text-muted">1 hrs ago</p>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="icon">
                                                <i data-feather="layers"></i>
                                            </div>
                                            <div class="content">
                                                <p>Apps are ready for update</p>
                                                <p class="sub-text text-muted">5 hrs ago</p>
                                            </div>
                                        </a>
                                        <a href="javascript:;" class="dropdown-item">
                                            <div class="icon">
                                                <i data-feather="download"></i>
                                            </div>
                                            <div class="content">
                                                <p>Download completed</p>
                                                <p class="sub-text text-muted">6 hrs ago</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                        <a href="javascript:;">View all</a>
                                    </div>
                                </div>
                            </li>-->
            <li class="nav-item dropdown nav-profile">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://via.placeholder.com/30x30" alt="<?php echo $this->lang->line('asides_profile_message'); ?>">
                </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                    <div class="dropdown-header d-flex flex-column align-items-center">
                        <div class="figure mb-3">
                            <img src="https://via.placeholder.com/80x80" alt="">
                        </div>
                        <div class="info text-center">
                            <p class="name font-weight-bold mb-0"><?=get_user_name() ?></p>
                            <p class="email text-muted mb-3"><?=get_user_mail() ?></p>
                        </div>
                    </div>

                    <div class="dropdown-body">
                        <ul class="profile-nav p-0 pt-3">
                            <li class="nav-item">
                                <a href="<?= base_url('users/profile')?>" class="nav-link">
                                    <i data-feather="user"></i>
                                    <span><?php echo $this->lang->line('asides_profile_message'); ?></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('auth/logout') ?>" class="nav-link">
                                    <i data-feather="log-out"></i>
                                    <span><?php echo $this->lang->line('asides_deconnect_message'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!-- partial -->

<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            i<span>LEAD</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category"><?php echo $this->lang->line('asides_principal_message'); ?></li>
            <li class="nav-item">
                <a href="<?= base_url('start/dashboard') ?>" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title"><?php echo $this->lang->line('dashboard_message'); ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('users/mychildren'); ?>" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title"><?php echo $this->lang->line('dashboard_adherent_message'); ?></span>
                </a>
            </li>
            <li class="nav-item nav-category"><?php echo $this->lang->line('asides_transaction_message'); ?></li>
            <li class="nav-item">
                <a href="<?= base_url('transactions'); ?>" class="nav-link">
                    <i class="link-icon" data-feather="bar-chart-2"></i>
                    <span class="link-title"><?php echo $this->lang->line('asides_transaction_message'); ?></span>
                </a>
            </li>
            <?php if (get_user_role_id()==2){?>
            <li class="nav-item nav-category"><?php echo $this->lang->line('asides_autre_message'); ?></li>
            <li class="nav-item">
                <a href="<?= base_url('users/representants'); ?>" class="nav-link">
                    <i class="link-icon" data-feather="bar-chart-2"></i>
                    <span class="link-title"><?php echo $this->lang->line('asides_representant_message'); ?></span>
                </a>
            </li>

            <li class="nav-item nav-category"><?php echo $this->lang->line('asides_configuration_message'); ?></li>
            <li class="nav-item">
                <a href="<?= base_url('users') ?>" class="nav-link">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title"><?php echo $this->lang->line('asides_utilisateur_message'); ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('roles') ?>" class="nav-link">
                    <i class="link-icon" data-feather="lock"></i>
                    <span class="link-title"><?php echo $this->lang->line('asides_roles_message'); ?></span>
                </a>
            </li>
            <li class="nav-item">
                    <a href="<?= base_url('Event/')?>" class="nav-link">
                        <i data-feather="user"></i>
                        <span><?php echo $this->lang->line('Liste_des_evenements'); ?></span>
                    </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('plans') ?>" class="nav-link">
                    <i class="link-icon" data-feather="trending-up"></i>
                    <span class="link-title"><?php echo $this->lang->line('asides_pack_abon_message'); ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('PaieMethode') ?>" class="nav-link">
                    <i class="link-icon" data-feather="dollar-sign"></i>
                    <span class="link-title"><?php echo $this->lang->line('asides_mode_pay_message'); ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('misc/countries') ?>" class="nav-link">
                    <i class="link-icon" data-feather="globe"></i>
                    <span class="link-title"><?php echo $this->lang->line('register_country_message'); ?></span>
                </a>
            </li>
            <?php }?>
        </ul>
    </div>
</nav>
<?php if (1 == 3): ?>
    <nav class="settings-sidebar">
        <div class="sidebar-body">
            <a href="#" class="settings-sidebar-toggler">
                <i data-feather="settings"></i>
            </a>
            <h6 class="text-muted"><?php echo $this->lang->line('asides_sidebar_message'); ?>:</h6>
            <div class="form-group border-bottom">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                               value="sidebar-light" checked>
                        <?php echo $this->lang->line('asides_light_message'); ?>
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                               value="sidebar-dark">
                        <?php echo $this->lang->line('asides_dark_message'); ?>
                    </label>
                </div>
            </div>
            <div class="theme-wrapper">
                <h6 class="text-muted mb-2"><?php echo $this->lang->line('asides_light_theme_message'); ?>:</h6>
                <a class="theme-item active" href="../demo_1/dashboard-one.html">
                    <img src="assets/images/screenshots/light.jpg" alt="light theme">
                </a>
                <h6 class="text-muted mb-2"><?php echo $this->lang->line('asides_dark_theme_message'); ?>:</h6>
                <a class="theme-item" href="../demo_2/dashboard-one.html">
                    <img src="assets/images/screenshots/dark.jpg" alt="light theme">
                </a>
            </div>
        </div>
    </nav>
<?php endif; ?>

<!-- partial -->