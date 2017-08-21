<?php 
/**
* 
*/
class C_editInformasiProfil extends CI_Controller{


	public function editProfil(){
		$this->load->view('donatur/sidebar');
		$this->load->view('donatur/formUbahProfil');

	}
	public function updateProfil(){
		$this->load->view('donatur/sidebar');
		$this->load->view('donatur/informasiProfil');

	}
	public function editProfilRelawan(){
		$this->load->view('user/sidebar_relawan');
		$this->load->view('user/form_edit_profil_relawan');

	}
	public function updateProfilRelawan(){
		$this->load->view('user/sidebar_relawan');
		$this->load->view('user/informasiProfilRelawan');

	}
	


}

 ?>