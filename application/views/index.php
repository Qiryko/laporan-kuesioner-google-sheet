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

  <title>Sigoval | Kuesioner Jember</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>/admin-lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?=site_url('Landing/index')?>" class="navbar-brand">
        <img src="<?=base_url()?>/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Sigoval</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?=site_url('Landing/index')?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('Login/index')?>" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('Landing/jember')?>" class="nav-link">Evaluasi Jember</a>
          </li>
          <li class="nav-item">
            <a href="<?=site_url('Landing/lumajang')?>" class="nav-link">Evaluasi Lumajang</a>
          </li>

        </ul>

        <!-- SEARCH FORM -->

      </div>


    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
          
                <h1 class="center" style="text-align:center; margin-top: 30px">
                SISTEM EVALUASI E-GOVERMENT</h1>
                <p class="text" style="text-align:center; margin-bottom: 30px">Merupakan sistem untuk mengevaluasi sistem e-goverment Jember dan Lumajang</p>
                <div class="container" style="text-align: center; margin-bottom: 30px">
                <a href="#" class="btn btn-primary" style="align-items: center; ">Isi Kuisioner Kab. Jember</a>
                <a href="#" class="btn btn-primary" style="align-items: center; margin-left:10px">Isi Kuisioner Kab. Lumajang</a>

                </div>

                </div> 






          <div class="col-md-6">
            <div class="card card-secondary card-inline">
              <div class="card-header">
                <h3 class="card-title">
                  <!-- <i class="fas fa-edit"></i> -->
                  Website Pemerintah Kabupaten Jember
                </h3>
              </div>
              <div class="card-body">
              <iframe src="http://www.jemberkab.go.id/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="100%" allowfullscreen></iframe>

              </div>
              <!-- /.card -->
            </div>

          </div>

          <div class="col-md-6">
            <div class="card card-secondary card-inline">
              <div class="card-header">
                <h3 class="card-title">
                  <!-- <i class="fas fa-edit"></i> -->
                  Website Pemerintah Kabupaten Lumajang
                </h3>
              </div>
              <div class="card-body">
              <iframe src="http://www.lumajangkab.go.id/" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="100%" allowfullscreen></iframe>

              </div>
              <!-- /.card -->
            </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- ./row -->
      </div><!-- /.container-fluid -->

      
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    </section>
    <!-- Content Header (Page header) -->

</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?=base_url()?>/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>/admin-lte/dist/js/adminlte.min.js"></script>

</body>
</html>
