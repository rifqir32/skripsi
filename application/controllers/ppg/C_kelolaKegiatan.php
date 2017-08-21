<?php 
/**
* 
*/
class C_kelolaKegiatan extends CI_Controller{


	public function tampilFormTambahKegiatan(){
			$this->load->view('header');
			$this->load->helper(array('form', 'url'));
            $this->load->config('map');
            $this->def_lat = $this->config->item('default_lat');
            $this->def_lng = $this->config->item('default_lng');
            $this->load->library('googlemaps');

		$this->load->view('ppg/sidebar-ppg');
		$this->load->view('ppg/dashboard_ppg');

	}	
	public function tampilFormEditKegiatan(){

		$this->load->view('ppg/sidebar-ppg');
		$this->load->view('ppg/v_form_edit_kegiatan');

	}
		

}

 ?>