<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() . "dist/"; ?>css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="mainheader navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
<!--    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>-->

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<!--  <aside class="main-sidebar sidebar-dark-primary elevation-4">
     Brand Logo 
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

     Sidebar 
    <div class="sidebar">
       Sidebar user panel (optional) 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

       Sidebar Menu 
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library 
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
       /.sidebar-menu 
    </div>
     /.sidebar 
  </aside>-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="    margin-left: 0px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">PROFILE</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                
                <div class="card-body">
                    <form role="form" id="quickForm" novalidate="novalidate">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="name" class="form-control " id="name" placeholder="Enter Name" 
                           >
                  <span id="name-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Age">Age</label>
                    <input type="number" name="age" class="form-control " id="age" placeholder="Enter Age" >
                  <span id="age-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                        <label> Select Gender</label>
                        <select class="custom-select">
                          <option>Male</option>
                          <option>Female</option>
                          <option>Others</option>
                          
                        </select>
                      </div>
                        <div class="form-group">
                    <label for="District">District</label>
                    <input type="text" name="District" class="form-control " id="District" placeholder="Enter District" >
                  <span id="District-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" name="address" class="form-control " id="address" placeholder="Enter Address" >
                  <span id="address-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Address">Contact Number</label>
                    <input type="number" name="contact_number" class="form-control " id="contact_number" placeholder="Enter Contact Number" >
                  <span id="contact_number-error" class="error invalid-feedback"></span></div>
                       <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            
                    </form>
                    
                </div>
                </div>
              </div>
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card  collapsed-card">
              <div class="card-header">
                <h3 class="card-title">TRAVEL HISTORY</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
                 <div class="card-body">
                <div class="row">
                
                <div class="card-body">
                    <form role="form" id="TRAVEL" name="TRAVEL" novalidate="novalidate">
                  <div class="form-group">
                    <label for="Visited">Visited</label>
                    <input type="text" name="visited" class="form-control " id="visited" 
                           placeholder="Enter Visited Place"  >
                  <span id="visited-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Country of Visit">Country of Visit</label>
                    <input type="text" name="country_of_visit" class="form-control " id="country_of_visit" placeholder="Enter Visited Country" >
                  <span id="country_of_visit-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="Date of arival from Affected Country">Date of arrival from Affected Country</label>
                    <input type="date" name="date_arrival" class="form-control " id="date_arrival" placeholder="Enter Date Of Arrival Country" >
                  <span id="date_arrival-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="Date of contact with person arrived from abroad">Date of contact with person arrived from abroad</label>
                    <input type="date" name="date_contact" class="form-control " id="date_contact" placeholder="Enter Date Of Contact With Person Arrived From Abroad" >
                  <span id="date_arrival-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Unknown contact with person traveled from abroad">Unknown contact with person traveled from abroad</label>
                    <input type="text" name="unknown_person" class="form-control " id="unknown_person" placeholder="Unknown Contact With Person Traveled From Abroad" >
                  <span id="unknown_person-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                        <label> Contact with covid positive patients</label>
                        <select class="custom-select">
                          <option value="In locality">In family</option>
                          <option value="In locality">In locality</option>                          
                        </select>
                      </div>
                        <div class="form-group">
                    <label for="doctors visited">Doctors visited</label>
                    <input type="text" name="doc_visited" class="form-control " id="doc_visited" placeholder="Enter Doctors Visited" >
                  <span id="doc_visited-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                        <label> DATE tested for SARS COV-2 ( RTPCR)</label>
                        <select class="custom-select">
                          <option value="Positive">Positive</option>
                          <option value="Negative">Negative</option>                          
                        </select>
                      </div>
                       <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            
                    </form>
                    
                </div>
                </div>
              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
           

           
            <!-- /.card -->
          </div>
          
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card  collapsed-card">
              <div class="card-header">
                <h3 class="card-title">TESTING</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
                 <div class="card-body">
                <div class="row">
                
                <div class="card-body">
                    <form role="form" id="testing"  name="testing"novalidate="novalidate">
                  <div class="form-group">
                    <label for="Rapid Testing">Rapid Testing</label>
                    <input type="text" name="rapid_testing" class="form-control " id="rapid_testing" 
                           placeholder="Enter Rapid Testing"  >
                  <span id="rapid_testing-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="CBC">CBC</label>
                    <input type="text" name="cbc" class="form-control " id="cbc" placeholder="Enter CBC" >
                  <span id="cbc-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="CHEST X-RAY">CHEST X-RAY</label>
                    <input type="text" name="x-ray" class="form-control " id="x-ray" placeholder="Enter CHEST X-RAY" >
                  <span id="x-ray-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="CT- SCAN">CT- SCAN</label>
                    <input type="text" name="ct_scan" class="form-control " id="ct_scan" placeholder="Enter CT-SCAN" >
                  <span id="date_arrival-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="ECG">ECG</label>
                    <input type="text" name="ECG" class="form-control " id="ECG" placeholder="Enter ECG" >
                  <span id="ECG-error" class="error invalid-feedback"></span></div>
                  
                       
                  
                       <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            
                    </form>
                    
                </div>
                </div>
              </div>
              
              <!-- /.card-body -->
            </div>
         
          </div>
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card  collapsed-card">
              <div class="card-header">
                <h3 class="card-title">SYMPTOMS</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
                 <div class="card-body">
                <div class="row">
                
                <div class="card-body">
                    <form role="form" id="SYMPTOMS"  name="SYMPTOMS"novalidate="novalidate">
                  <div class="form-group">
       <label for=" symptoms ">SYMPTOMS </label>
                        <div class="custom-control custom-radio col-md-2">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                          <label for="customRadio1" class="custom-control-label">yes</label>
                        </div>
                        <div class="custom-control custom-radio col-md-2">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked="">
                          <label for="customRadio2" class="custom-control-label">No</label>
                        </div>
                       
                      </div>
                  <div class="form-group">
                    <label for="date of starting of symptoms ">Date of starting of symptoms </label>
                    <input type="date" name="date_start" class="form-control " id="date_start" placeholder="Enter date of starting of symptoms " >
                  <span id="date_start-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="Hospital Where Admitted / home quatrentine">Hospital Where Admitted / home quatrentine</label>
                    <input type="text" name="admitted" class="form-control " id="admitted" placeholder="Enter Hospital Where Admitted / home quatrentine" >
                  <span id="admitted-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="Date of sample collection (second)">Date of sample collection (second)</label>
                    <input type="date" name="sample_collection" class="form-control " id="sample_collection" placeholder="Enter Date of sample collection (second)" >
                  <span id="sample_collection-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="result of sample (second)">Result of sample (second)</label>
                    <input type="text" name="res_sample" class="form-control " id="res_sample" placeholder="Enter Result of sample (second)" >
                  <span id="res_sample-error" class="error invalid-feedback"></span></div>
                  
                       <div class="form-group">
                    <label for="current health status">Current health status</label>
                    <input type="text" name="health_status" class="form-control " id="health_status" placeholder="EnterCurrent health status" >
                  <span id="health_status-error" class="error invalid-feedback"></span></div>
                  
                       <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            
                    </form>
                    
                </div>
                </div>
              </div>
              
              <!-- /.card-body -->
            </div>
         
          </div>
          
          
                    <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card  collapsed-card">
              <div class="card-header">
                <h3 class="card-title">TREATMENT GIVEN</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
                 <div class="card-body">
                <div class="row">
                
                <div class="card-body">
                    <form role="form" id="TREATMENT"  name="TREATMENT"novalidate="novalidate">
                  <div class="form-group">
                    <label for="HCQS">HCQS</label>
                    <input type="text" name="HCQS" class="form-control " id="HCQS" 
                           placeholder="EnterHCQS"  >
                  <span id="HCQS-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="AZYTHROMYCINE">AZYTHROMYCINE </label>
                    <input type="text" name="AZYTHROMYCINE" class="form-control " id="AZYTHROMYCINE" placeholder="Enter AZYTHROMYCINE " >
                  <span id="AZYTHROMYCINE-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="VITAMINE C">VITAMINE C </label>
                    <input type="text" name="VITAMINE_C " class="form-control " id="VITAMINE_C" placeholder="Enter VITAMINE C " >
                  <span id="VITAMINE_C-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="RETRO VIRAL">RETRO VIRAL</label>
                    <input type="text" name="retro_viral" class="form-control " id="retro_viral" placeholder="Enter RETRO VIRAL" >
                  <span id="retro_viral-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="OTHERS">OTHERS</label>
                    <input type="text" name="others" class="form-control " id="others" placeholder="Enter OTHERS" >
                  <span id="others-error" class="error invalid-feedback"></span></div>
                  
                      
                       <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            
                    </form>
                    
                </div>
                </div>
              </div>
              
              <!-- /.card-body -->
            </div>
         
          </div>
          
          
           <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card  collapsed-card">
              <div class="card-header">
                <h3 class="card-title">OTHER DETAIL</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
                 <div class="card-body">
                <div class="row">
                
                <div class="card-body">
                    <form role="form" id="other_details"  name="other_details"novalidate="novalidate">
                  <div class="form-group">
                    <label for="Remarks">Remarks</label>
                    <input type="text" name="remarks" class="form-control " id="remarks" 
                           placeholder="Enter Remarks"  >
                  <span id="remarks-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="recovered">Recovered </label>
                    <input type="text" name="recovered" class="form-control " id="recovered" placeholder="Enter Recovered " >
                  <span id="recovered-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="discharge date">DISCHARGE DATE</label>
                    <input type="date" name="discharge_date " class="form-control " id="discharge_date" placeholder="Enter  Discharge Date " >
                  <span id="VITAMINE_C-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="RETRO VIRAL">PATIENT DEATH</label>
                    <input type="text" name="death" class="form-control " id="death" placeholder="Enter PATIENT DEATH" >
                  <span id="retro_viral-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Patient image">Patient image</label>
                    <input type="file" name="Patient_image" class="form-control " id="Patient_image" placeholder="Enter Patient Image" >
                  <span id="Patient_image-error" class="error invalid-feedback"></span></div>
                  
                  <div class="form-group">
                    <label for="Patient file">Patient file</label>
                    <input type="file" name="Patient_file" class="form-control " id="Patient_file" placeholder="Enter Patient File" >
                  <span id="Patient_file-error" class="error invalid-feedback"></span></div>
                  
                  
                      
                       <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            
                    </form>
                    
                </div>
                </div>
              </div>
              
              <!-- /.card-body -->
            </div>
         
          </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
<!--  <aside class="control-sidebar control-sidebar-dark">
     Control sidebar content goes here 
  </aside>-->
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()  ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . "dist/"; ?>js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . "dist/"; ?>js/demo.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/dist/js/demo.js"></script>
</body>
</html>

