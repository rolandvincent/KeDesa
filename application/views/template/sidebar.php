<?php
$this->load->model('User_model', 'usr');
?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->

    <a class="navbar-brand ps-3" href="<?= base_url() ?>">
        <img class="mt-1" src="<?= base_url('/assets/') ?>img/kedesa.png" height="60" />
        <h4 class="me-auto" style="display: inline-block;">KeDesa<span>.</span></h4>
    </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

    </div>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= base_url('/profil/changePassword') ?>">Ubah kata sandi</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="<?= base_url('/auth/logout') ?>">Keluar</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <?php foreach ($menu as $m) : ?>
                        <div class="sb-sidenav-menu-heading"><?= $m['menu']; ?></div>
                        <?php
                        $subMenu = $this->usr->getUserSubMenu($m['id']);
                        ?>
                        <?php foreach ($subMenu as $sm) : ?>
                            <?php if ($title == $sm['title']) : ?>
                                <li class="nav-item active">
                                    <a class="nav-link active" href="<?= base_url('/') . $sm['url']; ?>">
                                    <?php else : ?>
                                        <a class="nav-link" href="<?= base_url('/') . $sm['url']; ?>">
                                        <?php endif; ?>
                                        <div class="sb-nav-link-icon"><i class="<?= $sm['icon']; ?>"></i></div>
                                        <?= $sm['title']; ?>
                                        </a>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Anda login sebagai:</div>
                <?= $user['nama']; ?>
            </div>
        </nav>
    </div>