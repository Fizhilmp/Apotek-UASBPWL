<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_auth');
	}

	public function index(){
		$this->load->view('login');
	}

	public function home(){
		$this->load->view('home');
	}

	public function obat(){
		$data['obat'] = $this ->m_obat->tampil_data()->
        result();
        $this->load->view('data_obat',$data);
	}

	public function pelanggan(){
		$data['pelanggan'] = $this ->m_pelanggan->tampil_data()->
        result();
        $this->load->view('data_pelanggan',$data);
	}

	public function tambahobat(){
		$this->load->view('tambah_obat');
	}

	public function tambahpelanggan(){
		$this->load->view('tambah_pelanggan');
	}

	public function home_user(){
		$this->load->view('user');
	}	
}