  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <i class="fa fa-list-alt"></i> Kelola Kegiatan
        <small></small>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Semua Kegiatan</h3>
            </div>
            <div class="box-header">
              <a href="<?php echo base_url()."PPG/tambah_kegiatan"; ?>" type="submit" class="btn btn-primary">+Tambah Kegiatan</a>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <form action="<?php echo base_url()."PPG/mengelola_kegiatan"; ?>" method="POST">
                  Tampilkan Kegiatan: 
                  <select class="form-control" name="id_status_kegiatan">
                    <option value="" selected>Semua Kegiatan</option>
                    <option value="1">Promosi Kegiatan</option>
                    <option value="2">Kegiatan Sedang Berjalan</option>
                    <option value="3">Kegiatan Selesai Berjalan</option>
                  </select>
                  <button type="submit" class="btn btn-danger">Cari</button>
                </form>
                <br>

              </div>
              <div class= "col-md-12">
               <div class="row">
                <div class="panel panel-primary">
                  <div class="panel-heading">RUANG SINAU <span class="label label-danger">Sedang berjalan</span>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      
                    </div>
                    <div class="row">
                      <span class=" glyphicon glyphicon-map-marker" aria-hidden="true"></span>SDN DONOWARIH 2
                      
                    </div>
                      <div class="row">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      
                    </div>
                     <div class="row">
                       <button type="button" class="btn btn-danger">Hapus</button>
                      <a href="<?php echo base_url() . "PPG/edit_kegiatan"; ?>" type="button" class="btn btn-warning">Edit</a>
                      
                    </div>
                    
                  </div>
                  <div class="panel-footer">
                    <div class="row">
                     
                        <button type="button" class="btn btn-success">Kehadiran</button>

                   
                     
                        <button type="button" class="btn btn-primary ">Laporan Dana</button>

                      
                      
                        <button type="button" class="btn btn-info">Upload Dokumentasi</button>

                      
                      
                        <button type="button" class="btn btn-custom">Komentar</button>

                      
                      
                        <button type="button" class="btn btn-custom1">Pemberitahuan</button>

                      
                    

                    </div>


                  </div>
                </div>

              </div>
              </div>
             
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  <style type="text/css">
  .btn-custom{
    color: #ffffff; 
  background-color: #BD1B77; 
  border-color: #E51DF0; 
  }
    .btn-custom1{
    color: #ffffff; 
  background-color: #ff6d00; 
  border-color: #ff6d00; 
  }


  </style>


<!-- <html>
  <title></title>
  <body>
    <a href="<?php echo base_url() . "PPG/tambah_kegiatan"; ?>">Tambah Kegiatan</a>
    <table border="1">
      <tr>
        <td>nama_kegiatan</td>
        <td>status_kegiatan</td>
        <td>tanggal_kegiatan</td>
        <td>alamat</td>
        <td colspan="3">action</td>
      </tr>
      <?php foreach ($data_kegiatan as $dk): ?>
      <tr>
        <td><?php echo $dk['nama_kegiatan']; ?></td>
        <td><?php echo $dk['status_kegiatan']; ?></td>
        <td><?php echo $dk['tanggal_kegiatan']; ?></td>
        <td><?php echo $dk['alamat']; ?></td>
        <td>
          <form action="<?php echo base_url() . "PPG/edit_kegiatan"; ?>" method="POST">
            <button type="submit" name="edit" value="<?php echo $dk['id_kegiatan']; ?>">Edit</button>
          </form>
        </td>
        <td>
          <form action="<?php echo base_url() . "PPG/hapus_kegiatan"; ?>" method="POST">
            <button type="submit" name="hapus" value="<?php echo $dk['id_kegiatan']; ?>">Hapus</button>
          </form>
        </td>
        <td>
          <form action="<?php echo base_url() . "PPG/detail_kegiatan"; ?>" method="POST">
            <button type="submit" name="kegiatan" value="<?php echo $dk['id_kegiatan']; ?>">Lihat Detail</button>
          </form>
        </td>
      </tr>
      <?php endforeach?>
    </table>
  </body>
</html> -->