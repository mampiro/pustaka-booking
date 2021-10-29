<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_matakuliah extends CI_Model {

	
	public function tampilMatakuliah()
	{
		return $this->db->get('matakuliah');
	}


	public function simpanMatakuliah($data=null)
	{
		return $this->db->insert('matakuliah',$data);
	}

	public function hapusMatakuliah($where=null)
	{
		return $this->db->delete('matakuliah',$where);
	}

	public function matkulWhere($where)
	{
		return $this->db->get_where('matakuliah',$where);
	}


	public function updateMatakuliah($data=null,$where=null)
	{
		
		return $this->db->update('matakuliah',$data,$where);

		
	}


}
