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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

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
    <a href="<?=site_url('Lumajang/index')?>" class="brand-link">
      <img src="<?=base_url()?>admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIGOVAL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Selamat Datang Admin Lumajang</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?=site_url('Lumajang/index')?>" class="nav-link">
              <i class="dash"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="lumajang"></i>
              <p>
                Lumajang
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('Lumajang/datarespondenlmj')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Responden</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Lumajang/jawabanrespondenpersepsilmj')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jawaban Persepsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Lumajang/jawabanrespondenharapanlmj')?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Jawaban Harapan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Lumajang/dataskorlmj')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Skor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('Lumajang/datagaplmj')?>" class="nav-link">
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
            <h1 class="m-0 text-dark">Data Kabupaten Lumajang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Lumajang</a></li>
              <li class="breadcrumb-item active">Data Jawaban Harapan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

                                                <!-- Selesai Header -->



<!-- Main COntent -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Jawaban Harapan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-hover">
                </table>
              </div>
              <!-- /.card-body -->
            </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<!-- <div class="cta">
    <div class="container">
        <div class="row">

<div class="container-fluid">
    <div class="table-responsive" style="overflow-x: inherit;">
<table id="example" class="table table-striped table-bordered dt-responsive" width="100%"></table>
</div>
</div>
</div>
</div>
</div> -->


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
<!-- DataTables -->
<script src="<?=base_url()?>admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="<?=base_url()?>assets/vendor/jquery/jquery.js"></script>
<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
<!-- <sript src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script> -->

<script>
    $('.hapus').on("click", function (e) {
        e.preventDefault();

        var choice = confirm($(this).attr('data-confirm'));

        if (choice) {
            window.location.href = $(this).attr('href');
        }
    });

    $('.tutup').on("click", function (e) {
        e.preventDefault();

        var choice = confirm($(this).attr('data-confirm'));

        if (choice) {
            window.location.href = $(this).attr('href');
        }
    });

	// console.log(json_data);

  $(document).ready(function() {
      $.getJSON("https://sheets.googleapis.com/v4/spreadsheets/1EL4e460NufT_ZwUyKwPsC7fPZlN5-5d8vUFdOlpO5ms/values/harapan!A2:AF1000?key=AIzaSyCMwGRrawv3NlueixjDkXGFc7Ie-zCXqr4", 
      function(returndata) {
           $('#example').DataTable( {
               data: returndata.values,
               "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": false,
               "processing" : true,
               "scrollX": true,
               columns: [
                    { title: "nama" },
                    { title: "harapan-eul1" },
                    { title: "harapan-eul2" },
                    { title: "harapan-eul3" },
                    { title: "harapan-eul4" },
                    { title: "harapan-eul5" },
                    { title: "harapan-tl1" },
                    { title: "harapan-tl2" },
                    { title: "harapan-tl3" },
                    { title: "harapan-tl4" },
                    { title: "harapan-tl5" },
                    { title: "harapan-tl6" },
                    { title: "harapan-fil1" },
                    { title: "harapan-fil2" },
                    { title: "harapan-rl1" },
                    { title: "harapan-rl2" },
                    { title: "harapan-rl3" },
                    { title: "harapan-rl4" },
                    { title: "harapan-rl5" },
                    { title: "harapan-cal1" },
                    { title: "harapan-cal2" },
                    { title: "harapan-cal3" },
                    { title: "harapan-cal4" },
                    { title: "harapan-cal5" },
                    { title: "harapan-cal6" },
                    { title: "harapan-cal7" },
                    { title: "harapan-cal8" },
                    { title: "harapan-cal9" },
                    { title: "harapan-csl1" },
                    { title: "harapan-csl2" },
                    { title: "harapan-csl3" },
                    { title: "harapan-csl4" },

               ]
           });
      }); 
});
</script>

</body>

</html>