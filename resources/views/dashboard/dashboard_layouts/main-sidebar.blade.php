<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/')}}" class="brand-link" style="margin-top: 8px" height="200px" width="">
    <img src="{{ asset('assets/img/logo.png') }}" href="{{url('/')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity:.8" >
    <span class="brand-text font-weight-bolder font-size-300px">FoodSHare</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{url('main/dashboard')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        
        <!-- Display table links directly -->
        <li class="nav-item">
          <a href="{{url('dashboard/users')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Users</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('admins')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Admins</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('dashboard/categories')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('dashboard/donations')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Donations</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('dashboard/user-donations')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>user-donations</p>
          </a>
        </li>
       
        <li class="nav-item">
          <a href="{{url('dashboard/partners')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Partners</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('dashboard/volanteers')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Volanteers</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('dashboard/jobs')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Jobs</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Mailbox
              <i class="fas fa-angle-down right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('send-email')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Send</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="container">
        <a href="{{url('dashboard_logout')}}" class="btn btn-danger" style="margin-top: 15px">Logout</a>
      </div>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
