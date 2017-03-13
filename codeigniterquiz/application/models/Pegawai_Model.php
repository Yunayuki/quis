<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataPegawai()
		{
			$query = $this->db->query("Select * from pegawai");
			return $query->result();
		}

		public function getJabatanByPegawai($idPegawai)
		{
			$this->db->select('pegawai.nama as np, jabatan_pegawai.namaJabatan as nj, jabatan_pegawai.tanggalMulai, jabatan_pegawai.tanggalSelesai');
			$this->db->where('fk_pegawai', $idPegawai);
			$this->db->from('jabatan_pegawai');
			$this->db->join('pegawai','pegawai.id = jabatan_pegawai.fk_pegawai');
			$query = $this->db->get();
			return $query->result();
		}
		public function getAnakByPegawai($idPegawai)
		{
			$this->db->Select('pegawai.nama as nama_pegawai, anak.nama as nama_anak, anak.tanggalLahir');
			$this->db->where('fk_pegawai', $idPegawai);
			$this->db->from('anak');
			$this->db->join('pegawai','pegawai.id = anak.fk_pegawai');
			$query = $this->db->get();
			return $query->result();

		}

}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>