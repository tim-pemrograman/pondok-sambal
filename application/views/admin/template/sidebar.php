<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-pepper-hot"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pondok Sambal</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="<?php if($titles == 'Dashboard - Pondok Sambal'){echo 'nav-item active'; } else{echo 'nav-item';}; ?>">
        <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Profile Company
    </div>

    <!-- Nav Item - Charts -->
    <li class="<?php if($titles == 'Company - Pondok Sambal'){echo 'nav-item active'; } else{echo 'nav-item';}; ?>">
        <a class="nav-link" href="<?= base_url('admin/company') ?>">
            <i class="fas fa-building"></i>
            <span>Company</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="<?php if($titles == 'Gallery - Pondok Sambal'){echo 'nav-item active'; } else{echo 'nav-item';}; ?>">
        <a class="nav-link" href="<?= base_url('admin/gallery') ?>">
            <i class="fas fa-building"></i>
            <span>Gallery</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Management
    </div>

    <!-- Nav Item - Charts -->
    <li class="<?php if($titles == 'Employee List - Pondok Sambal'){echo 'nav-item active'; } else{echo 'nav-item';}; ?>">
        <a class="nav-link" href="<?= base_url('admin/user') ?>">
            <i class="fas fa-users"></i>
            <span>Employee List</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Features
    </div>

    <!-- Nav Item - Tables -->
    <li class="<?php if($titles == 'Category - Pondok Sambal'){echo 'nav-item active'; } else{echo 'nav-item';}; ?>">
        <a class="nav-link" href="<?= base_url('admin/category') ?>">
            <i class="fas fa-list-ul"></i>
            <span>Category</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="<?php if($titles == 'Menu - Pondok Sambal'){echo 'nav-item active'; } else{echo 'nav-item';}; ?>">
        <a class="nav-link" href="<?= base_url('admin/menu') ?>">
            <i class="fas fa-utensils"></i>
            <span>Menu</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="<?php if($titles == 'Article - Pondok Sambal'){echo 'nav-item active'; } else{echo 'nav-item';}; ?>">
        <a class="nav-link" href="<?= base_url('admin/article') ?>">
            <i class="fas fa-newspaper"></i>
            <span>Article</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="<?php if($titles == 'Banner - Pondok Sambal'){echo 'nav-item active'; } else{echo 'nav-item';}; ?>">
        <a class="nav-link" href="<?= base_url('admin/banner') ?>">
            <i class="fas fa-newspaper"></i>
            <span>Banner</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="<?php if($titles == 'Message - Pondok Sambal'){echo 'nav-item active'; } else{echo 'nav-item';}; ?>">
        <a class="nav-link" href="<?= base_url('admin/message') ?>">
            <i class="fas fa-envelope-open-text"></i>
            <span>Message</span></a>
    </li>

    <!-- Nav Item - SEO -->
    <li class="<?php if($titles == 'Manage SEO - Pondok Sambal'){echo 'nav-item active'; } else{echo 'nav-item';}; ?>">
        <a class="nav-link" href="<?= base_url('admin/seo') ?>">
            <i class="fas fa-globe-asia"></i>
            <span>Manage SEO</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->