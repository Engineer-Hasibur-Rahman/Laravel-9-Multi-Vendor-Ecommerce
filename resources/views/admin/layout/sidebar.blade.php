<div id="sidebar" class="active">
  <div class="sidebar-wrapper active">
      <div class="sidebar-header position-relative">
          <div class="d-flex justify-content-between align-items-center">
              <div class="logo">
                  <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
              </div>
              <div class="theme-toggle d-flex gap-2  align-items-center mt-2">                 
                  <div class="form-check form-switch fs-6">
                      <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                      <label class="form-check-label" ></label>
                  </div>
                  <h3>Logo</h3>
              </div>
              <div class="sidebar-toggler  x">
                  <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
              </div>
          </div>
      </div>
      <div class="sidebar-menu">
          <ul class="menu">                   
              <li
                  class="sidebar-item  ">
                  <a href="{{ route('admin.dashboard') }}" class='sidebar-link'><i class="bi bi-grid-fill"></i> <span>Dashboard</span></a>
              </li>

              <!-- Admin and Vendor start -->
              @if (Auth::guard('admin')->user()->type == 'vendor')              
              <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'> <i class="bi bi-stack"></i> <span>Vendor</span> </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="{{ url('admin/update-vendor-details/personal') }}">Personal Details</a>
                    </li>
                     <li class="submenu-item ">
                        <a href="{{ url('admin/update-vendor-details/business') }}">Business Details</a>
                    </li>
                      <li class="submenu-item ">
                        <a href="{{ url('admin/update-vendor-details/bank') }}">Bank Details</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="{{ url('admin/updatepassword') }}">Password Change</a>
                    </li>     
                </ul>
              </li>  
              @else
              <li class="sidebar-item  has-sub">
                  <a href="#" class='sidebar-link'> <i class="bi bi-stack"></i> <span>Admin</span> </a>
                  
              <ul class="submenu ">
                  <li class="submenu-item ">
                      <a href="{{ url('admin/update-admin-details') }}">Admin Profile</a>
                  </li>
                  <li class="submenu-item ">
                      <a href="{{ url('admin/updatepassword') }}">Change Password</a>
                  </li>     
              </ul>
            </li>             
         
            
            <li class="sidebar-item  has-sub">
                  <a href="#" class='sidebar-link'> <i class="bi bi-stack"></i> <span>Location</span> </a>
                  
              <ul class="submenu ">
                  <li class="submenu-item">
                      <a href="{{ route('admin.country') }}">All Country list</a>
                  </li>
                  <li class="submenu-item">
                      <a href="{{ route('admin.country.add') }}">Add Country</a>
                  </li>                    
                  <li class="submenu-item">
                      <a href="{{ route('admin.import.csv.settings') }}">Import Country</a>
                  </li>     
             
              
             
                  <li class="submenu-item">
                      <a href="{{ route('admin.city') }}">All City  list</a>
                  </li>
                  <li class="submenu-item">
                      <a href="{{ route('admin.city.add') }}">Add City</a>
                  </li>                    
                  <li class="submenu-item">
                      <a href="{{ route('admin.import.city.csv.settings') }}">Import City</a>
                  </li>     
           
              
   
                  <li class="submenu-item">
                      <a href="{{ route('admin.area') }}">All Area  list</a>
                  </li>
                  <li class="submenu-item">
                      <a href="{{ route('admin.area.add') }}">Add Area</a>
                  </li>                    
                  <li class="submenu-item">
                      <a href="{{ route('admin.import.area.csv.settings') }}">Import Area</a>
                  </li>     
              </ul>
            </li>  
            
            
            <li class="sidebar-item  has-sub">
                  <a href="#" class='sidebar-link'> <i class="bi bi-stack"></i> <span>General Settings</span> </a>                  
              <ul class="submenu ">

                  <li class="submenu-item ">
                      <a href="">Basic Settings</a>
                  </li>

                  <li class="submenu-item ">
                    <a href="">Database Update</a>
                </li>

              </ul>            
            </li>          
              @endif
               <!-- Admin and Vendor end -->    
              <li  class="sidebar-item  ">
                <a href="#" class='sidebar-link'>  <i class="bi bi-life-preserver"></i>
                    <span>Languices</span>
                  </a>
              </li>   
          </ul>
      </div>
  </div>
</div>