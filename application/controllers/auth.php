<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');

	}

		function index(){
			if($this->session->userdata('status') == "login"){
			redirect('welcome');
		}else {
			$this->load->view('form_login');	
			}
			
		}
	 
		function aksi_login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => md5($password)
				);
			$cek = $this->m_auth->cek_login("tb_login",$where)->num_rows();
			if($cek > 0){
	 
				$data_session = array(
					'nama' => $username,
					'status' => "login"
					);
	 
				$this->session->set_userdata($data_session);
	 
				redirect('welcome');
	 
			}else{
				echo "Username dan password salah !";
			}
		}
	 
		function logout(){
			$this->session->sess_destroy();
			redirect('auth');
		}
	}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */