<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="login.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Home Page<sup></sup></div>
</a>

<!-- Divider -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Category</span>
    </a>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Category</h6>
            <a class="collapse-item" href="http://localhost/cs_m3/index.php?controller=category&action=index">Index</a>
            <a class="collapse-item" href="Views/categories/create.php">Create</a>
        </div>
    </div>
</li>
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="http://localhost/cs_m3/index.php?controller=product&action=index">
        <i class="fas fa-fw fa-tachometer-alt"></i>

        <span>Product</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->


<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Customer</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Customer</h6>
            <a class="collapse-item" href="http://localhost/cs_m3/index.php?controller=customer&action=index">Index</a>


        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->


<!-- Nav Item - Pages Collapse Menu -->


<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="http://localhost/cs_m3/index.php?controller=order&action=index">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Order</span></a>
</li>
<hr class="sidebar-divider">

<!-- Nav Item - Tables -->
<li class="nav-item active">
    <a class="nav-link" href="http://localhost/cs_m3/index.php?controller=order_detail&action=index">
        <i class="fas fa-fw fa-table"></i>
        <span>OrderDetail</span></a>
</li>
<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Sign In</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="register.php">Register</a>
            <!-- <a class="collapse-item" href="forgot-password.html">Forgot Password</a> -->
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