<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$this->load->model('Pegawai_Model');
		$data['pegawai_object']=$this->Pegawai_Model->getDataPegawai();
		$this->load->view('pegawai', $data);
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>