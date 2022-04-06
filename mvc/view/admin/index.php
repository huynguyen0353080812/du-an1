<?php require_once('mvc/Controller/admin/DecentralizationController.php'); ?>
<?php  
  $RegexResults = new DecentralizationController();
  $sss = $RegexResults -> checkPrivilege();
  if (!$sss) {
    echo "Bạn Không Có Quyền Truy Cập";
    die;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>fontawesome-free-6.0.0/css/all.css">
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>css/css.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= PUBLIC_URL ?>plugins/summernote/summernote-bs4.min.css">
  <!-- biểu đồ -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= PUBLIC_URL ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="<?= PUBLIC_URL ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div> -->
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
          <?php 
          $sss = $RegexResults->checkPrivilege('Dashboard');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="Dashboard" class="nav-link">
            <i class="fa-solid fa-earth-americas"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <?php 
        endif; 
        ?>
         <?php 
          $sss = $RegexResults->checkPrivilege('Manage_user');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-id-card-clip"></i>
              <p>
                Manage user
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Created_acount" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Created</p>
                </a>
              </li>
            </ul>
          </li>
          <?php 
        endif; 
        ?>
         <?php 
          $sss = $RegexResults->checkPrivilege('Feedback');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-comment-dots"></i>
              <p>
              Feedback
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Comment" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="feedback_user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Feedback user</p>
                </a>
              </li>
            </ul>
          </li>
          <?php 
        endif; 
        ?>
         <?php 
          $sss = $RegexResults->checkPrivilege('Products');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list_product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Product</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="add_product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>

            </ul>
          </li>
          <?php 
        endif; 
        ?>
         <?php 
          $sss = $RegexResults->checkPrivilege('Category');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-calendar-days"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list_category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Category</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="add_category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>

            </ul>
          </li>
          <?php 
        endif; 
        ?>
         <?php 
          $sss = $RegexResults->checkPrivilege('Statistical');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-chart-pie"></i>
              <p>
                 Statistical
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list_Statistical" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Statistical category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="show_charts" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Charts</p>
                </a>
              </li>
            </ul>
          </li>
          <?php 
        endif; 
        ?>
         <?php 
          $sss = $RegexResults->checkPrivilege('Order');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-cart-plus"></i>
              <p>
                 Order
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list_order" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Order</p>
                </a>
              </li>
            </ul>
          </li>
          <?php 
        endif; 
        ?>
         <?php 
          $sss = $RegexResults->checkPrivilege('Discount');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-tags"></i>
              <p>
              Discount
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list_discount" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Discount</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_discount" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Discount</p>
                </a>
              </li>
            </ul>
          </li>
          <?php 
        endif; 
        ?>
         <?php 
          $sss = $RegexResults->checkPrivilege('quan_ly');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-inbox"></i>
              <p>
              Quản lý kho
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list_nguyenlieu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Resources</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_nguyenlieu" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Resources</p>
                </a>
              </li>
            </ul>
          </li>
          <?php 
        endif; 
        ?>
         <?php 
          $sss = $RegexResults->checkPrivilege('News');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-newspaper"></i>
              <p>
              News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list_news" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List News</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_news" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create News</p>
                </a>
              </li>
            </ul>
          </li>
          <?php 
        endif; 
        ?>
         <?php 
          $sss = $RegexResults->checkPrivilege('decentralization');
          if ($sss):
          ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-user-shield"></i>
              <p>
              decentralization
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list_decentralization" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>list_Staff</p>
                </a>
              </li>
            </ul>
          </li>
          <?php 
        endif; 
        ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  