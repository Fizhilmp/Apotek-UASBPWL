<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_pelanggan extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('m_pelanggan');
	}

    public function index(){
        $data['pelanggan'] = $this ->m_pelanggan->tampil_data()->
        result();
        $this->load->view('data_pelanggan',$data);
    }
    
    public function aksi_input(){
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$telepon = $this->input->post('telepon');
        $alamat = $this->input->post('alamat');
		$data = array(
			'nama_pelanggan' => $nama_pelanggan,
			'jenis_kelamin' => $jenis_kelamin,
            'telepon' => $telepon,
            'alamat' => $alamat
		);
		$status = $this->m_pelanggan->tambahPelanggan("pelanggan",$data);
		if($status){
			redirect(base_url("/index.php/c_pelanggan/index"));
		}else{
			echo "Data pelanggan gagal ditambahkan!";
		}
	}

	public function aksi_hapus($id){
		$where = array('id_pelanggan' => $id);
		$this->m_pelanggan->hapusPelanggan($where,'pelanggan');
		redirect(base_url("/index.php/c_pelanggan/index"));
	}

	public function aksi_edit($id){
		$where = array('id_pelanggan' => $id);
		$data['pelanggan']=$this->m_pelanggan->edit_pelanggan($where,
		"pelanggan")->result();
		$this->load->view('edit_pelanggan',$data);
	}

	public function update(){
		$id = $this->input->post('id_pelanggan');
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$telepon = $this->input->post('telepon');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nama_pelanggan' => $nama_pelanggan,
			'jenis_kelamin' => $jenis_kelamin,
			'telepon' => $telepon,
			'alamat' =>$alamat
		);
		$where = array(
			'id_pelanggan' => $id
		);
		$this->m_pelanggan->update_data($where,$data,"pelanggan");
		redirect('/index.php/c_pelanggan/index');
	}
}