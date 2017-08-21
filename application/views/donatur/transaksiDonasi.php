  <!-- Content Wrapper. Contains page content -->
  <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function() {
        $(".button-collapse").sideNav();
        $('.parallax').parallax();
        $('.slider').slider();
        $('.modal').modal();
        $('select').material_select();
        $('.carousel.carousel-slider').carousel({
            fullWidth: true
        });
        setInterval(function() {
            $('.carousel').carousel('next');
        }, 5000);
    });
    $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal1').modal();
  });

    </script>

 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Turun Tangan Malang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>bootstrap/css/bootstrap.min.css">
   <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>dist/css/AdminLTE.min.css">
  <script type="text/javascript" src="<?php echo base_url() . "assets/"; ?>bootstrap/js/bootstrap.js"></script>

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
        Dashboard Donatur
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
              <h3 class="panel-title">TRANSAKSI DONATUR</h3>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                <table class="table no-margin data">
                  <thead>
                  <tr>
                    <th>id transaksi</th>
                    <th>id_kegiatan</th>
                    <th>tanggal transaksi</th>
                    <th>jumlah transaksi</th>
                    <th>bank</th>
                    <th>status</th>
                    <th>konfirmasi</th>
                    <th>Laporan dana</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>11</td>
                      <td>12/09/2017</td>
                      <td>1000000</td>
                      <td>BCA</td>
                      <td>pending</td>
                      <td><a  type="button" class="btn btn-danger" data-toggle="modal" data-target="#konfirmasi">upload bukti Transfer</a></td>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#download" >Download</button></td>


                    </tr>
               
                  </tbody>
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
 <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
              <div class="col s12 m12 l4">
                            <img class="responsive-img" src="images/bankbri.png">
                        </div>
                        <div class="col s12 m12 l8">
                            <table class="striped">
                                <tbody>
                                    <tr>
                                        <td>ID Donasi</td>
                                        <td></td>
                                        <td>1234</td>
                                    </tr>
                                    <tr>
                                        <td>Nominal Donasi</td>
                                        <td>Rp.</td>
                                        <td>50000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><b>Silakan transfer ke: Bank Rakyat Indonesia (BRI)</b></p>
                            <p>Cabang: Jl. Soekarno Hatta</p>
                            <p>No. Rekening: 12345 1234 123 123</p>
                            <p>Atas nama: YAYASAN YEE</p>
                        </div>
          </div>
          <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat waves-effect waves-light btn">submit</a>
               <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat waves-effect waves-light btn">close</a>
          </div>
      </div>



<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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

<div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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


<!-- /.content-wrapper -->


<!-- <html>
	<title></title>
	<body>
		<a href="<?php echo base_url()."PPG/mengelola_kegiatan"; ?>">Mengelola Kegiatan</a><br>
		<a href="<?php echo base_url()."PPG/mengelola_feedback"; ?>">Mengelola Feedback</a>
	</body>
</html> -->