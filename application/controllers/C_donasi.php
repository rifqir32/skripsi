<?php 
/**
* 
*/
class C_donasi extends CI_Controller{


	public function tampilFormDonasiUang(){
		$this->load->view('donatur/nav');
		$this->load->view('donatur/donasi');

	}
	public function tampilFormDonasiBarang(){
		$this->load->view('donatur/formDonasiBarang');

	}
	public function tampilFormMEtodeDonasiBarang(){
		$var = $_GET["antarbarang"];

		$this->load->view('donatur/formDonasiBarang');
		if ($var == "antar barang") {
			$this->load->view('donatur/formDonasiAntarBarang');
			
		}
		elseif ($var == "ambil barang") {
			$this->load->view('donatur/formDonasiAmbilBarang');
			
		}

	}	


}

 ?>