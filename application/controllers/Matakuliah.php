<?php 
class Matakuliah extends CI_Controller { 




	public function index() 
	{ 
		

		$data['judul']="Form Input Data Mata Kuliah";
		$data['matkul']=$this->m_matakuliah->tampilMatakuliah()->result();

		$this->load->view('view-form-matakuliah',$data); 
	} 





	public function cetak() 
	{


		$this->form_validation->set_rules('kode', 'Kode', 'trim|required|min_length[3]', 

			array( 

				'required' => '%s Wajib diisi', 
				'min_lenght' => '%s terlalu pendek' 
			)


		); 
		
		$this->form_validation->set_rules('nama', 'Nama Mata Kuliah', 'required', 

			array( 

				'required' => '%s Wajib diisi', 
				'min_lenght' => '%s terlalu pendek' 
			)


		); 




		if ($this->form_validation->run() != true) 
		{ 

				$data['judul']="Form Input Data Mata Kuliah";
				$data['matkul']=$this->m_matakuliah->tampilMatakuliah()->result();

				$this->load->view('view-form-matakuliah',$data); 
		} 
		else
		{ 



			$input=array(
				
			
				'kode' => $this->input->post('kode'), 
				'nama' => $this->input->post('nama'), 
				'sks' => $this->input->post('sks') 				

			);


	


			$proses=$this->m_matakuliah->simpanMatakuliah($input);	
			
			

			if($proses)
			{

				$this->session->set_flashdata('data','Data berhasil diTambahkan...');

				redirect('matakuliah');
			
			}




			/*
			$data = [ 
				'judul' => 'View Data Mata Kuliah', 
				'kode' => $this->input->post('kode'), 
				'nama' => $this->input->post('nama'), 
				'sks' => $this->input->post('sks') 
			]; 
			$this->load->view('view-data-matakuliah', $data); 
			*/
		}

	} 




	public function hapus()
	{
		$where=['kode'=>$this->uri->segment('3')];
		$this->m_matakuliah->hapusMatakuliah($where);
		redirect('Matakuliah/index/');
	}

	public function edit()
	{
		
		$matkul=$this->m_matakuliah->matkulWhere(['kode'=>$this->uri->segment('3')])->result_array();
		$data = array(
			'judul' => 'View Edit Mata Kuliah',
			'kode' =>$matkul[0]['kode'],
			'nama' =>$matkul[0]['nama'],
			'sks' =>$matkul[0]['sks'],
		 );

		$this->load->view('view-edit-matakuliah', $data); 
	}


	public function update()
	{
		
		$this->form_validation->set_rules('kode', 'Kode', 'trim|required|min_length[3]', 

			array( 

				'required' => '%s Wajib diisi', 
				'min_lenght' => '%s terlalu pendek' 
			)

		); 
		
		$this->form_validation->set_rules('nama', 'Nama Mata Kuliah', 'required', 

			array( 

				'required' => '%s Wajib diisi', 
				'min_lenght' => '%s terlalu pendek' 
			)


		); 



		if ($this->form_validation->run() != true) 
		{ 

				$matkul=$this->m_matakuliah->matkulWhere(['kode'=>$this->input->post('kode_hidden')])->result_array();
				$data = array(
					'judul' => 'View Edit Mata Kuliah',
					'kode' =>$matkul[0]['kode'],
					'nama' =>$matkul[0]['nama'],
					'sks' =>$matkul[0]['sks'],
				 );

				$this->load->view('view-edit-matakuliah', $data); 

		} 
		else
		{ 

			

			$input=array(
				
			
				'kode' => $this->input->post('kode'), 
				'nama' => $this->input->post('nama'), 
				'sks' => $this->input->post('sks') 				

			);


	


			$where=array('kode'=> $this->input->post('kode_hidden'));

			$proses=$this->m_matakuliah->updateMatakuliah($input, $where);	
			//$proses=$this->db->update('matakuliah',$input,$where);
	
			

			if($proses)
			{

				$this->session->set_flashdata('data','Data berhasil Diubah...');

				redirect('matakuliah');
			
			}
			



		}


	}



}
