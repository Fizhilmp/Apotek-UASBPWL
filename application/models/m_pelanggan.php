<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pelanggan extends CI_Model {
	
	public function tampil_data(){
        return $this->db->get_where('pelanggan');
    }

    public function tambahPelanggan($table,$data){
        return $this->db->insert($table,$data);
    }

    public function hapusPelanggan($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    public function edit_pelanggan($where,$table){
        return $this->db->get_where($table,$where);
    }
    
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
} 