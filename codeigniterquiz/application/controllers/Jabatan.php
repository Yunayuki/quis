<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function index($idPegawai)
	{
		$this->load->model('Pegawai_Model');
		$data['jabatan_object']=$this->Pegawai_Model->getJabatanByPegawai($idPegawai);
		$this->load->view('jabatan', $data);	
	}
}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>