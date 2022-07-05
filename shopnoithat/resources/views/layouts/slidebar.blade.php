 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('client/home')}}" class="brand-link">
      <img src="{{asset('img/Screenshot__684_-removebg-preview.png')}}" width=100 style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/diep.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Bùi Quang Điệp</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{{asset('/products')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Products
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{asset('/categories')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Categories
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{asset('/partners')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Partners
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{asset('/styles')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Styles
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{asset('/home')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Thống kê
                <span class="badge badge-info right"></span>
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="{{asset('/blog')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Blog
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="{{asset('/Contact')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Contact
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @yield('content')