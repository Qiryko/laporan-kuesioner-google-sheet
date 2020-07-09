   <?php 
   ?>                                    
                                       <!-- Mulai header -->
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Sigoval</title>
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url()?>admin-lte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>admin-lte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>admin-lte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url()?>admin-lte/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul> -->


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
 
      <!-- Notifications Dropdown Menu -->
      <a href="<?=site_url('Login/logout')?>" class="btn btn-primary">Logout</a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=site_url('Peneliti/index')?>" class="brand-link">
      <img src="<?=base_url()?>admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIGOVAL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Selamat Datang Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?=site_url('Peneliti/index')?>" class="nav-link active">
              <i class="dash"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="jember"></i>
              <p>
                Jember
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('Peneliti/datarespondenjbr')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Responden</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Peneliti/jawabanrespondenpersepsijbr')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jawaban Persepsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Peneliti/jawabanrespondenharapanjbr')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jawaban Harapan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Peneliti/dataskorjbr')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Skor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Peneliti/datagapjbr')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data GAP</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="lumajang"></i>
              <p>
                Lumajang
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('Peneliti/datarespondenlmj')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Responden</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Peneliti/jawabanrespondenpersepsilmj')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jawaban Persepsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Peneliti/jawabanrespondenharapanlmj')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jawaban Harapan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Peneliti/dataskorlmj')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Skor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Peneliti/datagaplmj')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data GAP</p>
                </a>
              </li>
            </ul>
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

                                                <!-- Selesai Header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <h3>Data Kabupaten Jember</h3>
      <div class="row">
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 id="responden"></h3>

                <p>Jumlah Data Responden</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-archive"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="sangatsetuju"></h3>

                <p>Responden Sangat Setuju</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="setuju"></h3>

                <p>Responden Setuju</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="tidaksetuju"></h3>

                <p>Responden Tidak Setuju</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 id="sangattidaksetuju"></h3>

                <p>Sangat Tidak Setuju</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container-fluid">
      <h3>Data Kabupaten Lumajang</h3>
      <div class="row">
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 id="respondenlmj"></h3>

                <p>Jumlah Data Responden</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-archive"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="sangatsetujulmj"></h3>

                <p>Responden Sangat Setuju</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="setujulmj"></h3>

                <p>Responden Setuju</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="tidaksetujulmj"></h3>

                <p>Responden Tidak Setuju</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-2 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 id="sangattidaksetujulmj"></h3>

                <p>Sangat Tidak Setuju</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>

<script src="<?=base_url()?>admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url()?>admin-lte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>admin-lte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url()?>admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url()?>admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url()?>admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url()?>admin-lte/plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url()?>admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>admin-lte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url()?>admin-lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>admin-lte/dist/js/demo.js"></script>

<script>
      $(document).ready(function() {
      jember();
      lumajang();

      });

  function jember() {
  $.getJSON("https://sheets.googleapis.com/v4/spreadsheets/186cmRdn-dvqVdqErDvagFc0zlQDcVfYQu3ImG9iH2Ac/values/dashboard!A1:E2?key=AIzaSyCMwGRrawv3NlueixjDkXGFc7Ie-zCXqr4", 
      function(returndata) {
        var value = returndata.values;
        $('#responden').html(value[1][0]);
        $('#sangatsetuju').html(value[1][1]);
        $('#setuju').html(value[1][2]);
        $('#tidaksetuju').html(value[1][3]);
        $('#sangattidaksetuju').html(value[1][4]);
        // console.log(value);
      });
      };

      function lumajang() {
  $.getJSON("https://sheets.googleapis.com/v4/spreadsheets/1EL4e460NufT_ZwUyKwPsC7fPZlN5-5d8vUFdOlpO5ms/values/dashboard!A1:E2?key=AIzaSyCMwGRrawv3NlueixjDkXGFc7Ie-zCXqr4", 
      function(returndata) {
        var value = returndata.values;
        $('#respondenlmj').html(value[1][0]);
        $('#sangatsetujulmj').html(value[1][1]);
        $('#setujulmj').html(value[1][2]);
        $('#tidaksetujulmj').html(value[1][3]);
        $('#sangattidaksetujulmj').html(value[1][4]);
        // console.log(value);
      });
      };
      

      </script>

</body>
</html>

