<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	
	public function tampilPegawai()
	{
		return $this->db->get('pegawai');
	}


	public function simpanPegawai($data=null)
	{
		return $this->db->insert('pegawai',$data);
	}

	public function hapusPegawai($where=null)
	{
		return $this->db->delete('pegawai',$where);
	}

	public function pegawaiWhere($where)
	{
		return $this->db->get_where('pegawai',$where);
	}


	public function updatePegawai($data=null,$where=null)
	{
		
		return $this->db->update('pegawai',$data,$where);

		
	}


}
