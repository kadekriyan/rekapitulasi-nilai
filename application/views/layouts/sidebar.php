<!-- SIDEBAR -->
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="<?= base_url('dashboard'); ?>">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Mata Kuliah</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <?php foreach ($mata_kuliah as $mk): ?>
                        <li class=" ">
                            <a
                                href="<?= base_url('dashboard/mata-kuliah/' . $this->session->userdata('dosen_id') . '/' . $mk->id . ''); ?>">
                                <span class=" pcoded-micon"><i class="ti-angle-right"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">
                                    <?= $mk->nama ?></span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </li>
            <li>
                <a href="<?= base_url(); ?>auth/logout">
                    <span class="pcoded-micon"><i class="ti-shift-left"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Logout</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>