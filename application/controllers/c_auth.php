<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_auth extends CI_Controller {

	public function index(){
		$this->load->view('home');
	}

	public function login(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('login');
		}else{
			$auth = $this->m_auth->cek_login();
			
			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Wrong Username or Password!
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			  </div>');
			  redirect('c_auth/login');
			}else{
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);

				switch($auth->role_id){
					case 1: redirect('c_auth/index');
							break;
					case 2: redirect('c_user/index');
							break;
							
					default:break;
				}
			}
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('c_auth/login');
	}
}
