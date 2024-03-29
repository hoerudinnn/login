<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    <i class="fa-solid fa-code"></i>        
    </div>
    <div class="sidebar-brand-text mx-3">Hoer</div>
</a>

<?php if (in_groups('admin')) : ?>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Management
    </div>

    <!-- Nav Item - User List -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-user fa-sm fa-fw mr-2"></i>
            <span>User List</span>
        </a>
    </li>
<?php endif; ?>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    User Profile
</div>

<!-- Nav Item - My Profile -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('user'); ?>">
        <i class="fas fa-user fa-sm fa-fw mr-2"></i>
        <span>My Profile</span></a>
</li>

<!-- Nav Item - Edit Profile -->
<!-- <li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Edit Profile</span></a>
</li> -->

<!-- Nav Item - Mahasiswa -->
<li class="nav-item">
    <a href="<?= base_url('akademik') ?>" class="nav-link">
        <i class="fas fa-fw fa-table"></i>
        <span>Kegiatan Akademik</span>
    </a>
</li>

			
<li class="nav-item">
	<a href="<?= base_url('rekap') ?>" class="nav-link">
    <i class="fas fa-fw fa-table"></i>
    <span>Rekapan</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

 <!-- Nav Item - Logout -->
 <li class="nav-item">
    <a class="nav-link" href="<?= base_url('logout'); ?>">
    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
        <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>