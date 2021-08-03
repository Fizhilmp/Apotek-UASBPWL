<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_obat extends CI_Controller {
    
    function __construct(){
		parent::__construct();
		$this->load->model('m_obat');
	}

	public function index(){
		$data['obat'] = $this->m_obat->tampil_data()->
        result();
        $this->load->view('data_obat',$data);
		
	}

	public function aksi_input(){
		$nama_obat = $this->input->post('nama_obat');
		$stok = $this->input->post('stok');
		$harga_obat = $this->input->post('harga_obat');
        $Status = $this->input->post('Status');
        $gambar = $_FILES['gambar'];
		if ($gambar = ''){}else{
			$config['upload_path'] = './assets/gambar';
			$config['allowed_types'] = 'jpg|png|gif|jpeg';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "Upload Gagal"; die();
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}
		$detail_obat = $this->input->post('detail_obat');

		$data = array(
			'nama_obat' => $nama_obat,
			'stok' => $stok,
            'harga_obat' => $harga_obat,
            'Status' => $Status,
            'gambar' => $gambar,
			'detail_obat' => $detail_obat
		);
		$status = $this->m_obat->tambahObat("obat",$data);
		if($status){
			redirect(base_url("/index.php/c_obat/index"));
		}else{
			echo "Data Obat gagal ditambahkan!";
		}
	}

	public function aksi_hapus($id){
		$where = array('id_obat' => $id);
		$this->m_obat->hapusObat($where,'obat');
		redirect(base_url("/index.php/c_obat/index"));
	}
	
	public function aksi_edit($id){
		$where = array('id_obat' => $id);
		$data['obat']=$this->m_obat->edit_obat($where,
		"obat")->result();
		$this->load->view('edit_obat',$data);
	}

	public function update(){
		$id         = $this->input->post('id_obat');
		$nama_obat  = $this->input->post('nama_obat');
		$stok       = $this->input->post('stok');
		$harga_obat = $this->input->post('harga_obat');
		$Status     = $this->input->post('Status');
		$detail_obat = $this->input->post('detail_obat');
		
		
		$data = array(
			'nama_obat'  => $nama_obat,
			'stok'       => $stok,
			'harga_obat' => $harga_obat,
			'Status'     => $Status,
			'detail_obat'     => $detail_obat
		);
		$where = array(
			'id_obat' => $id
		);
		
		$this->m_obat->update_data($where,$data,"obat");
		redirect('/index.php/c_obat/index');
	}

}
