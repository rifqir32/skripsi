<!DOCTYPE html>
<html>

<head>
    <title>Turun Tangan Malang</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/materialize.min.css" ?>" media="screen,projection" />
    <!--Style.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/css/style.css" ?>" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  
    <div class="container">
        <div class="row center">
            <div class="card grey lighten-5">
                <div class="container">
                    <div class="card-content" height="800px">
                        <span class="card-title">Masukkan deskripsi Donasi</span>     


                        <div class="input-field row">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textArea1">Deskripsi Donasi Anda</label>
                        </div>

                         <form method="GET" name="pilihmetode">   
                            <div class="input-field row">
                                <select class="icons">
                                    <option value="" disabled selected>Pilih Metode Donasi</option>
                                    <option value="" name="antarbarang">Antar Barang</option>
                                    <option value="" name="ambilbarang">Ambil Barang</option>
                                    
                                </select>
                            </div>
                        </form>
                    </div >

                </div>
                
                <div class="card-action row">
                    <a href="<?php echo base_url()."C_donasi/tampilFormMetodeDonasiBarang" ?>" class="waves-effect waves-light btn">Lanjutkan</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal - Daftar -->
    <div id="daftar" class="modal modal-fixed-footer">
        <form action="">
            <div class="modal-content">
                <h4>Mari Bergabung dengan Turun Tangan Malang, Gerakan Kecil Membangun Negeri.</h4>
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Nama</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_telephone" type="email" class="validate" class="validate">
                    <label for="icon_telephone">Email</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" class="validate" class="validate">
                    <label for="icon_telephone">Nomor HP</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">payment</i>
                    <input id="icon_telephone" type="password" class="validate">
                    <label for="icon_telephone">Password</label>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Submit</a>
            </div>
        </form>
    </div>
    <!-- Modal - Masuk -->
    <div id="masuk" class="modal">
        <form action="">
            <div class="modal-content">
                <h4>Login</h4>
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_telephone" type="email" class="validate" class="validate">
                    <label for="icon_telephone">Email</label>
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">payment</i>
                    <input id="icon_telephone" type="password" class="validate">
                    <label for="icon_telephone">Password</label>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Masuk</a>
            </div>
        </form>
    </div>
    <footer class="page-footer  red darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Turun Tangan Malang</h5>
                    <p class="grey-text text-lighten-4">Gerakan Kecil Membangun Negeri.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Kontak</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="">Twitter</a></li>
                        <li><a class="grey-text text-lighten-3" href="">Instagram</a></li>
                        <li><a class="grey-text text-lighten-3" href="">Line@</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">2017 Copyright SocioHub<a class="grey-text text-lighten-4 right" href="#!">More Links</a></div>
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
    </footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/materialize.min.js"?>"></script>
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
    $('.modal').modal();
  });
    </script>
</body>

</html>
