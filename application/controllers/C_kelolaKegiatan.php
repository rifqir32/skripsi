<?php 
/**
* 
*/
class C_kelolaKegiatan extends CI_Controller{


	public function tampilFormTambahKegiatan(){

		$this->load->view('ppg/sidebar-ppg');
		$this->load->view('ppg/v_form_tambah_kegiatan');

	}	
	public function tampilFormEditKegiatan(){

		$this->load->view('ppg/sidebar-ppg');
		$this->load->view('ppg/v_form_edit_kegiatan');

	}	

}

 ?>