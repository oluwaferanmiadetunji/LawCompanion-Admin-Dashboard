
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laptop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle"href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </li>

    <!-- Heading -->
    <div class="sidebar-heading">Interface</div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="home.php">
            <i class="fas fa-database"></i>
            <span>All Users</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="all.edit.users.php">
            <i class="fas fa-user"></i>
            <span>Edit a User</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="user.delete.php">
            <i class="fas fa-trash"></i>
            <span>Delete a User</span>
        </a>
    </li>
    <?php
    if($_SESSION['role'] == 'admin') {
        echo '
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="register.php">
                <i class="fas fa-trash"></i>
                <span>Create an Admin</span>
            </a>
        </li>
        '
    }

    ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
