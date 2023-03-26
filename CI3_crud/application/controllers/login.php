<?php
class login extends CI_Controller
{

	public function index()
	{
		$this->load->view('mahasiswa/v_login');
	}
	public function ceklogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('m_mahasiswa');
		$this->m_mahasiswa->ambillogin($username,$password);
	}

	public function logout(){
		$this->session->set_userdata('username', FALSE);
		$this->session->sess_destroy();
		redirect(base_url().'index.php/login/index');
	}
}
?>