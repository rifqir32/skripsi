  <!-- Content Wrapper. Contains page content -->
  <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Turun Tangan Malang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
      -->
      <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>dist/css/skins/skin-red.min.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-red sidebar-mini">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard Relawan
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">

      <div class ="row">
        <div class=".col-md-6 .col-md-offset-3">
          <h1></h1>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Kegaitan Diikuti</h3>
            </div>
            <div class="panel-body">
             <table class="table table-hover">
              <th>id_kegiatan</th>
              <th>nama_kegiatan</th>
              <th>tanggal_gabung</th>
              <th>status_kegiatan</th>
              <th>action</th>
              <tr>
                <td>001</td>
                <td>Ruang Sinau</td>
                <td>25/09/2017</td>
                <td>sedang berjalan</td>
                <td>
                  <a href="<?php echo base_url()."C_informasiKegiatan/tampilInformasiKegiatanRelawan"; ?>"type="submit" class="btn btn-primary">lihat Detail</a>
                  <a type="submit" class="btn btn-warning">lihat Pemberitahuan</a>


                </td>

              </tr>
 
            </table>
          </div>
        </div>

      </div>


    </div>




  </div>

  <!-- /.row -->
</section>
<!-- /.content -->
</div>

</body>
<script type="text/javascript">
$(document).ready(function() {
    $('select').material_select();
  });

</script>
<!-- /.content-wrapper -->


<!-- <html>
	<title></title>
	<body>
		<a href="<?php echo base_url()."PPG/mengelola_kegiatan"; ?>">Mengelola Kegiatan</a><br>
		<a href="<?php echo base_url()."PPG/mengelola_feedback"; ?>">Mengelola Feedback</a>
	</body>
</html> -->