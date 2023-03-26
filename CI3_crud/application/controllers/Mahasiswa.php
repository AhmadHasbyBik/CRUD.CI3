<?php

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	public function index()
	{
		//echo"Controller Mahasiswa Berhasil Dibuat";
		$data['mahasiswa'] = $this->m_mahasiswa->getMahasiswa();
		$data['judul'] = 'Data Mahasiswa';
		//print_r($data['mhs']);
		$this->load->view('mahasiswa/v_mahasiswa', $data);
	}

	public function create()
	{
		if($this->input->post()){ //proses input data
			$data_mhs = $this->input->post();
			$result = $this->m_mahasiswa->insert_mhs($data_mhs);
			if ($result > 0){
				$this->session->set_flashdata('msg', template_success_msg("Success, Data Mahasiswa Berhasil Disimpan."));
			}
			else{
				$this->session->set_flashdata('msg', template_error_msg("Error, Terjadi Kesalahan, Mohon ulangi Lagi."));
			}
			redirect(base_url().'index.php/Mahasiswa/index');
		}
		else{
			$data['judul'] = "Tambah Mahasiswa Baru";
			$this->load->view('mahasiswa/v_create', $data);		
		}
	}

	public function update($npm = null)
	{
		if($this->input->post()){ //proses input data
			$data_mhs = $this->input->post();
			$result = $this->m_mahasiswa->update_mhs($data_mhs);
			if ($result > 0){
				$this->session->set_flashdata('msg', template_success_msg("Success, Data Mahasiswa Berhasil Diupdate."));
			}
			else{
				$this->session->set_flashdata('msg', template_error_msg("Error, Data Mahasiswa Gagal Diupdate."));
			}
			redirect(base_url().'index.php/Mahasiswa/index');
		}
		else{
			$data['mahasiswa'] = $this->m_mahasiswa->getMahasiswa($npm);
			$data['judul'] = "Update Mahasiswa Baru";
			$this->load->view('mahasiswa/v_update', $data);		
		}
	}


	public function delete($npm)
	{
		$result = $this->m_mahasiswa->delete_mhs($npm);
		if ($result > 0){
				$this->session->set_flashdata('msg', template_success_msg("Success, Data Mahasiswa Berhasil Dihapus."));
			}
			else{
				$this->session->set_flashdata('msg', template_error_msg("Error, Data Mahasiswa Gagal Dihapus."));
			}
		redirect(base_url().'index.php/Mahasiswa/index');
	}

	
}
