<?php 
/**
* 
*/
class C_InformasiProfil extends CI_Controller{

	
	public function tampilInformasiProfil(){

		$this->load->view('donatur/sidebar');
		$this->load->view('donatur/informasiProfil');

	}

	public function tampilInformasiProfilRelawan(){

		$this->load->view('user/sidebar_relawan');
		$this->load->view('user/informasiProfilRelawan');

	}

}

 ?>