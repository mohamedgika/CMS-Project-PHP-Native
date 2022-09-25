<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <link rel="stylesheet" href="<?=URL?>Dashboard/dist/css/plus.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=URL?>Dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=URL?>Dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=URL?>Dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=URL?>Dashboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=URL?>Dashboard/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=URL?>Dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=URL?>Dashboard/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=URL?>Dashboard/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini">

  <!-- Site wrapper -->
<div class="wrapper">



  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
  </nav>
  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Brand Logo -->
    <a href="<?=URL;?>dashboard/index" class="brand-link">
      <img src="<?=URL?>Dashboard/dist/img/Dashboard.png" alt="Dashboard Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="<?=URL;?>Dashboard/dist/img/mohamed.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['user']['name']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?=URL;?>category/index" class="nav-link">
            <img src="<?=URL?>Dashboard/dist/img/category.png" alt="Category Logo" class="nav-icon fas fa-th">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=URL;?>post/postsetting" class="nav-link">
             <img src="<?=URL?>Dashboard/dist/img/post.png" alt="Post Logo" class="nav-icon fas fa-th">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <p>
                Post car shop
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=URL;?>setting/setting" class="nav-link">
             <img src="<?=URL?>Dashboard/dist/img/site.png" alt="Post Logo" class="nav-icon fas fa-th">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <p>
                Setting
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="<?=URL;?>setting/theme" class="nav-link">
             <img src="<?=URL?>Dashboard/dist/img/site.png" alt="Post Logo" class="nav-icon fas fa-th">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <p>
                Themes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=URL;?>user/logout" class="nav-link">
             <img src="<?=URL?>Dashboard/dist/img/logout.png" alt="Logout Logo" class="nav-icon fas fa-th">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    
    
    <!-- /.sidebar -->
  </aside>