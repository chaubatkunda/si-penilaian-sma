<!-- Navbar-->
<header class="app-header">
    <?php if ($this->fungsi->user_login()->level == 1) : ?>
        <a class="app-header__logo" href="<?php echo base_url('dashboard'); ?>">SMA Bahrul M</a>
    <?php elseif ($this->fungsi->user_login()->level == 2) : ?>
        <a class="app-header__logo" href="<?php echo base_url('user/guru'); ?>">SMA Bahrul M</a>
    <?php elseif ($this->fungsi->user_login()->level == 3) : ?>
        <a class="app-header__logo" href="<?php echo base_url('user/waka'); ?>">SMA Bahrul M</a>
    <?php endif; ?>
    <!-- Sidebar toggle button-->
    <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>

        <!-- User Menu-->
        <li class="dropdown">
            <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                <i class="fa fa-user fa-lg"></i>
            </a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li>
                    <a class="dropdown-item" href="<?php echo base_url('edit_profil/' . $this->fungsi->user_login()->id_user); ?>"><i class="fa fa-user fa-lg"></i> Profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="<?php echo base_url('assets/foto/guru/') . $this->fungsi->user_login()->fotou; ?>" width="60">
        <div>
            <p class="app-sidebar__user-name"><?php echo $this->fungsi->user_login()->nama; ?></p>
        </div>
    </div>
    <ul class="app-menu">
        <?php if ($this->fungsi->user_login()->level == 1) : ?>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('dashboard'); ?>">
                    <i class="app-menu__icon fa fa-dashboard"></i>
                    <span class="app-menu__label">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('siswa'); ?>">
                    <i class="app-menu__icon fa fa-users"></i>
                    <span class="app-menu__label">Siswa</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('guru'); ?>">
                    <i class="app-menu__icon fa fa-users"></i>
                    <span class="app-menu__label">Guru</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('mata.pelajaran'); ?>">
                    <i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">Mata Pelajaran</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('waka.kurikulum'); ?>">
                    <i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">Waka Kurikulum</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('kelas'); ?>">
                    <i class="app-menu__icon fa fa-home"></i>
                    <span class="app-menu__label">Kelas</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('kompetensi.dasar'); ?>">
                    <i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">Kompetensi Dasar</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('nilai'); ?>">
                    <i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">Nilai</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('tata_usaha'); ?>"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Tata Usaha</span></a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('user'); ?>"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">User</span></a>
            </li>

        <?php elseif ($this->fungsi->user_login()->level == 2) : ?>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('user/guru'); ?>">
                    <i class="app-menu__icon fa fa-home"></i>
                    <span class="app-menu__label">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('guru/nilai'); ?>">
                    <i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">Nilai</span>
                </a>
            </li>
        <?php elseif ($this->fungsi->user_login()->level == 3) : ?>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('user/waka'); ?>">
                    <i class="app-menu__icon fa fa-home"></i>
                    <span class="app-menu__label">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('guru'); ?>">
                    <i class="app-menu__icon fa fa-users"></i>
                    <span class="app-menu__label">Guru</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('siswa'); ?>">
                    <i class="app-menu__icon fa fa-users"></i>
                    <span class="app-menu__label">Siswa</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('mata.pelajaran'); ?>">
                    <i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">Mata Pelajaran</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('kompetensi.dasar'); ?>">
                    <i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">Kompetensi Dasar</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="<?php echo base_url('guru/nilai'); ?>">
                    <i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">Nilai</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</aside>