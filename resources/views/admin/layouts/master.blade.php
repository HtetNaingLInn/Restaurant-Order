
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->

@include('admin.layouts.css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="{{Route('dashboard')}}" class="nav-link m-0 text-bold" type="button">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-bold">Table</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-bold">Orders</a>
      </li>

    </ul>

    <!-- SEARCH FORM -->


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="far fa-bell text-danger"></i>

              </a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">&nbsp;
              <i class="nav-icon fas fa-tachometer-alt text-info pr-3"></i>
              <p class="text-info">
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{Route('dashboard')}}" class="nav-link">
                <i class="fas fa-store text-info mr-2 ml-2"></i>&nbsp;
                  <p>Restaurant</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


            <li class="nav-item has-treeview menu-open">

              <a href="#" class="nav-link">&nbsp;

                <i class="fas fa-book-open text-info"></i>&nbsp;
                <p class="text-info">
                  Menu Control
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>



              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{Route('category.index')}}" class="nav-link">
                    <i class="fas fa-clipboard-list text-info mr-2 ml-2"></i>&nbsp;
                    <p>Category</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="{{Route('menu.index')}}" class="nav-link">
                    <i class="fas fa-utensils text-info mr-2 ml-2"></i>&nbsp;
                    <p>Menu List</p>
                  </a>
                </li>
              </ul>
            </li>

          </ul>

          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <li class="nav-item has-treeview menu-open">

              <a href="#" class="nav-link">&nbsp;
                <i class="fas fa-list-alt text-info"></i>&nbsp;
                <p class="text-info">
                  Table Control
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>



              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{Route('table.index')}}" class="nav-link">

                    <i class="fas fa-chair text-info mr-2 ml-2"></i>&nbsp;
                    <p>Table</p>
                  </a>
                </li>

              </ul>
            </li>

          </ul>


          <ul class="nav nav-pills nav-sidebar flex-column">
            <li class="nav-item">
            <a href="{{Route('logout')}}" class="nav-link pl-3">&nbsp;
                <i class="fas fa-power-off text-danger"></i>
                 <p>Logout</p>
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

    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.3
    </div>
  </footer>


</div>


@include('admin.layouts.js')


</body>
</html>
