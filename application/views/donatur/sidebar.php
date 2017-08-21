<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url(); ?>template" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>TT</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TurunTangan</b>Malang</span>
    </a>

    <!-- Header Navbar -->
    
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <?php if ($this->session->userdata('foto_profil') == ""): ?>
                <img src="<?php echo base_url() . "assets/"; ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <?php endif ?>
              <?php if ($this->session->userdata('foto_profil') != ""): ?>
                <img src="<?php echo base_url() . "uploads/foto_profil/"; ?><?php echo $this->session->userdata('foto_profil'); ?>" class="user-image" alt="User Image">
              <?php endif ?>
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <?php if ($this->session->userdata('foto_profil') == ""): ?>
                  <img src="<?php echo base_url() . "assets/"; ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <?php endif ?>
                <?php if ($this->session->userdata('foto_profil') != ""): ?>
                  <img src="<?php echo base_url() . "uploads/foto_profil/"; ?><?php echo $this->session->userdata('foto_profil'); ?>" class="img-circle" alt="User Image">
                <?php endif ?>

                <p>
                  <?php echo $this->session->userdata('nama'); ?>
                  <small><?php echo $this->session->userdata('pangkat_divisi'); ?> <?php echo $this->session->userdata('divisi'); ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->
                  <form action="<?php echo base_url()."Auth/logout"; ?>" method="POST">
                    <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <?php if ($this->session->userdata('foto_profil') == ""): ?>
          <div class="pull-left image">
        <?php endif ?>
        <?php if ($this->session->userdata('foto_profil') != ""): ?>
          <div class="pull-left">
        <?php endif ?>
          <?php if ($this->session->userdata('foto_profil') == ""): ?>
            <img src="<?php echo base_url() . "assets/"; ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          <?php endif ?>
          <?php if ($this->session->userdata('foto_profil') != ""): ?>
            <img src="<?php echo base_url() . "uploads/foto_profil/"; ?><?php echo $this->session->userdata('foto_profil'); ?>" class="img-circle" alt="User Image" height="50px" width="50px">
          <?php endif ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <!-- Status -->
          <a href="#"><?php echo $this->session->userdata('pangkat_divisi'); ?> PPG</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>
        <!-- Optionally, you can add icons to the links -->
        
        <li class="active">
          <a href="<?php echo base_url()."C_informasiProfil/tampilInformasiProfil"; ?>"><i class="fa fa-list-alt"></i> <span>Informasi Profil</span>
          </a>
         
        </li>
        <li class="treeview">
          <a href="<?php echo base_url()."C_konfirmasiDonasi/tampilTransaksiDonasi"; ?>"><i class="fa fa-book"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."PPG/mengelola_arsip_kegiatan"; ?>"><i class="fa fa-list-alt"></i> Arsip Data Kegiatan</a></li>
          </ul>
        </li>
        <li class="">
          <a href="<?php echo base_url()."anggota/"; ?>"><i class="glyphicon glyphicon-home"></i> <span>kembali ke halaman utama</span>
          </a>
         
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
