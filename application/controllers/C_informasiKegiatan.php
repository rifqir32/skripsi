<?php 
/**
* 
*/
class C_informasiKegiatan extends CI_Controller{


	public function tampilInformasiKegiatan(){

		$this->load->view('donatur/nav');
		$this->load->view('donatur/informasiKegiatan');


	}
	public function tampilInformasiKegiatanRelawan(){

		$this->load->view('user/nav_relawan');
		$this->load->view('user/informasiKegiatan');
	}
}

 ?>