<head>
    <title>
        Turun Tangan Malang 
    </title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()."/assets/css/materialize.min.css" ?>" media="screen,projection"/>
    <!--Style.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()."/assets/css/style.css"?>"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/materialize.min.js"?>"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/js/materialize.js"?>"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div class="row">
    <nav class=" red darken-4">
            <div class="nav-wrapper">
                <div class="col s12"><a href="<?php echo base_url()."anggota/"?>" class="brand-logo"><img src="<?php echo base_url(). "assets/images/ttm.png" ?>" height="50" width="200"></a><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                   <ul class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url()."anggota/ "?>">HOME</a></li>
                    <li><a>KEGIATAN</a></li>
                    <li><a href="<?php echo base_url()."C_informasiProfil/tampilInformasiProfilRelawan"?>">INFORMASI PROFIL</a></li>
                    <li><a><i class="material-icons">notifications</i></a></li>
                    <li><a href="<?php echo base_url()."Auth/logout"?>">Keluar</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="<?php echo base_url()."anggota/ "?>">HOME</a></li>
                    <li><a>KEGIATAN</a></li>
                    <li><a href="<?php echo base_url()."C_informasiProfil/tampilInformasiProfilRelawan"?>">INFORMASI PROFIL</a></li>
                    <li><a href="<?php echo base_url()."Auth/logout"?>">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
</body>