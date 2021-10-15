<?php 
class Matakuliah extends CI_Controller { 




	public function index() 
	{ 
		$data['judul']="Form Input Data Mata Kuliah";
		$this->load->view('view-form-matakuliah',$data); 
	} 


	public function cetak() 
	{

		$this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [ 'required' => 'Kode Matakuliah Harus diisi', 'min_lenght' => 'Kode terlalu pendek' ]); 
		$this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [ 'required' => 'Nama Matakuliah Harus diisi', 'min_lenght' => 'Nama terlalu pendek' ]); 

		if ($this->form_validation->run() != true) 
		{ 

				$data['judul']="Form Input Data Mata Kuliah";
				$this->load->view('view-form-matakuliah',$data); 
		} 
		else
		{ 

			$data = [ 
				'judul' => 'View Data Mata Kuliah', 
				'kode' => $this->input->post('kode'), 
				'nama' => $this->input->post('nama'), 
				'sks' => $this->input->post('sks') 
			]; 
			$this->load->view('view-data-matakuliah', $data); 
		}

	} 






}
