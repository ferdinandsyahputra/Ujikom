        <!-- Sidebar -->
        <style>
            .custom-bg-gradient {
    background: linear-gradient(90deg, #4e73df 10%, #f6c23e 100%);
}

        </style>
        <ul class="navbar-nav custom-bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">


            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-angry"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Triple J</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                <i class="fas fa-solid fa-igloo"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
 
            <!-- Option -->
            <li class="nav-item active">
                <a class="nav-link" href="manajemen_admin.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Management Admin</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="kategori.php">
                <i class="fas fa-solid fa-layer-group"></i>
                    <span>Kategori</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="post.php">
                <i class="fas fa-solid fa-images"></i>
                    <span>Post</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Galeri</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Add foto</h6>
                        <a class="collapse-item" href="galeri.php">Main </a>
                    </div>
                    
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->