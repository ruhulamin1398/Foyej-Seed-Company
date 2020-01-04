<!-- Sidebar -->
<ul class="navbar-nav    sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Divider -->




  <div class="card  bg-dark mb-2">


    <!-- Nav Item - Dashboard -->
    <li class="nav-item active ">
      <a class="nav-link p-3 " href="{{ route('index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Product Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
        <i class="fas fa-fw fa-cog "></i>
        <span>Products</span>
      </a>
      <div id="collapseProducts" class="collapse" aria-labelledby="headingProducts" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="{{ route('products.index') }}">Products</a>
          <a class="collapse-item" href="{{ route('products.create') }}">Add New</a>
          <a class="collapse-item" href="{{ route('productsdrop') }}">Drop</a>
          
          <a class="collapse-item" href="{{ route('product_type.index') }}">Type</a>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!--Category  Collapse Menu -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="{{ route('categories.store') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Categories</span></a>
    </li>


  </div>
  <!-- ///////////////////////////////////////////////////////////////////////////////////// -->
  <div class="card  bg-dark mb-2">


    <!-- Nav Item - Dashboard -->

    <!-- Product Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseCustomers" aria-expanded="true" aria-controls="collapseCustomers">
        <i class="fas fa-fw fa-cog "></i>
        <span>Customers</span>
      </a>
      <div id="collapseCustomers" class="collapse" aria-labelledby="headingCustomers" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="buttons.html">Add New</a>
          <a class="collapse-item" href="buttons.html">View All</a>
        </div>
      </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!--Category  Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseSuppliers" aria-expanded="true" aria-controls="collapseSuppliers">
        <i class="fas fa-fw fa-cog"></i>
        <span>Supliers</span>
      </a>
      <div id="collapseSuppliers" class="collapse" aria-labelledby="headingSuppliers" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="buttons.html">Add New</a>
          <a class="collapse-item" href="buttons.html">View All</a>

        </div>
      </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!--Category  Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed  p-3 " href="#" data-toggle="collapse" data-target="#collapseStaff" aria-expanded="true" aria-controls="collapseStaff">
        <i class="fas fa-fw fa-cog"></i>
        <span>Staff</span>
      </a>
      <div id="collapseStaff" class="collapse" aria-labelledby="headingStaff" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

          <a class="collapse-item" href="buttons.html">Add New</a>
          <a class="collapse-item" href="buttons.html">View All</a>

        </div>
      </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="index">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Reports</span></a>
    </li>

  </div>
  <!-- ///////////////////////////////////////////////////////////////////////////////////// -->

  <div class="card  bg-dark mb-2">


    <hr class="sidebar-divider m-1 p-0 ">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="index">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="index">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Sallery</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider m-1 p-0 ">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item  ">
      <a class="nav-link p-3 " href="index">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Logout</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center  d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </div>


</ul>
<!-- End of Sidebar -->