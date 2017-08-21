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
              <h3 class="panel-title">DATA Relawan</h3>
            </div>
            <div class="panel-body">
              <form role="form" action= "">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Oncom man" >
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Divisi</label>
                  <select class="form-control" >

                    <option value="1" disabled selected>PPG</option>
                    <option value="2">KWU</option>
                    <option value="3">HUMAS</option>
                    <option value="3">MEDIA</option>
                    <option value="3">RELAWAN</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat  </label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="08912732732">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Profesi</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mahasiswa">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">fakultas</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="ilmu sosial">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jurusan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Psikologi">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">No hp</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="08178474875">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">id line</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="oncom123">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ulangi password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">masukkan Foto</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">max 25 mb</p>
                </div>


                <button type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-primary" >Update Profil</button>
              </form>
            </div>
          </div>

        </div>


      </div>




    </div>

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="<?php echo base_url()."assets/js/materialize.min.js"?>"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('select').material_select();
});

</script>

 <script type="text/javascript">

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
}


)
$('#myModal').modal(options)
$('#myModal').modal('show')
 </script>
<!-- /.content-wrapper -->


<!-- <html>
	<title></title>
	<body>
		<a href="<?php echo base_url()."PPG/mengelola_kegiatan"; ?>">Mengelola Kegiatan</a><br>
		<a href="<?php echo base_url()."PPG/mengelola_feedback"; ?>">Mengelola Feedback</a>
	</body>
</html> -->