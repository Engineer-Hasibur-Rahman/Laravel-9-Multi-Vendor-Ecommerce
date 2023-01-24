<header class="main-nav">
    <nav>
      <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">
          <ul class="nav-menu custom-scrollbar">

            <li class="back-btn">
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>


              <li class="dropdown">
              <a class="nav-link active" href="{{ url('admin/dashboard') }}">
                <i data-feather="home"></i><span>Dashboard</span>
              </a>
            </li>
         @if (Auth::guard('admin')->user()->type == 'vendor')
         <li class="dropdown">
              <a class="nav-link menu-title" href="javascript:void(0)">
                <i data-feather="users"></i><span>Vendor Details</span>
              </a>
              <ul class="nav-submenu menu-content">
                <li><a href="{{ url('admin/update-vendor-details/personal') }}"> Personal Details</a></li>
                <li><a href="{{ url('admin/update-vendor-details/business') }}"> Business Details </a></li>
                <li><a href="{{ url('admin/update-vendor-details/bank') }}"> Bank Details </a></li>
              </ul>
            </li>
         @else
         <li class="dropdown">
              <a class="nav-link menu-title" href="javascript:void(0)">
                <i data-feather="users"></i><span>Admin Settings</span>
              </a>
              <ul class="nav-submenu menu-content">
                <li><a href="{{ url('admin/update-admin-details') }}">Admin Profile</a></li>
                <li><a href="{{ url('admin/updatepassword') }}">Admin Update Password</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a class="nav-link menu-title" href="javascript:void(0)">
                <i data-feather="users"></i><span>All Users</span>
              </a>
              <ul class="nav-submenu menu-content">
                <li><a href="index.html" class="nav-link menu-title link-nav active">All Super Admin</a></li>
                <li><a href="index.html">All Admin</a></li>
                <li><a href="index.html">All Vendor</a></li>
                <li><a href="index.html">All User</a></li>
              </ul>
            </li>
         @endif
            

          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </div>
    </nav>
  </header>
