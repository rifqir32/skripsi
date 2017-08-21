<?php 
/**
* 
*/
class C_konfirmasiDonasi extends CI_Controller{


	public function tampilTransaksiDonasi(){

		$this->load->view('donatur/sidebar');
		$this->load->view('donatur/transaksiDonasi');

	}	

}

 ?>