<?php 
/**
* 
*/
class C_kelolaKegiatanRelawan extends CI_Controller{


	public function tampilKegiatanRelawan(){

		$this->load->view('user/sidebar_relawan');
		$this->load->view('user/kegiatan_diikuti');

	}	
	

}

 ?>