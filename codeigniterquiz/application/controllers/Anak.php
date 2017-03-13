<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak extends CI_Controller {

	public function index($idPegawai)
	{
		$this->load->model('Pegawai_Model');
		$data['pegawai_object']=$this->Pegawai_Model->getAnakByPegawai($idPegawai);
		$this->load->view('anak', $data);	
	}

}

/* End of file Anak.php */
/* Location: ./application/controllers/Anak.php */
 ?>