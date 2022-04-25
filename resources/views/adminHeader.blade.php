<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Car Rental Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/css/dataTables.bootstrap4.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap-datepicker.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
</head>
<body class="sidebar-light">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
          
        </ul>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">Car Rental Admin</a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('admin/assets/images/logo.png')}}" alt="logo"/></a>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">Admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
          <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">

          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Car Inquiry</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard-contact">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Customer Message</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="/dashboard-add-car">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Add Car</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/dashboard-show-car">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Show Car</span>
            </a>
          </li>
          
        </ul>
      </nav>