<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinema extends CI_Controller {

	
	public function index()
	{
		$data['judul']="Pemesanan Tiket Cinema 99";
		$this->load->view('view-input-cinema',$data);
		
	}


	public function proses_tambah()
	{


		if($this->input->post('tipe_studio', TRUE)=="Reguler 2D")
		{
			$harga_tiket=40000;
		}
		elseif($this->input->post('tipe_studio', TRUE)=="3D")
		{
			$harga_tiket=80000;
		}
		elseif($this->input->post('tipe_studio', TRUE)=="Velvet")
		{
			$harga_tiket=100000;
		}

		$total=$this->input->post('jumlah_pesanan', TRUE)*$harga_tiket;



		$data['judul']="Pemesanan Tiket Cinema 99";
		$data['nama_pemesan']=$this->input->post('nama_pemesan', TRUE);
		$data['judul_film']=$this->input->post('judul_film', TRUE);
		$data['pukul']=$this->input->post('pukul', TRUE);
		$data['tipe_studio']=$this->input->post('tipe_studio', TRUE);
		$data['jumlah_pesanan']=$this->input->post('jumlah_pesanan', TRUE);
		$data['harga_tiket']=$harga_tiket;
		$data['total']=$total;

		$this->load->view('view-output-cinema',$data);
		
	}



}
