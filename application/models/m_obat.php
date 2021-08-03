<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_obat extends CI_Model {

	public function tampil_data(){
        return $this->db->get_where('obat');
    }
    
    public function tambahObat($table,$data){
        return $this->db->insert($table,$data);
    }

    public function hapusObat($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_obat($where,$table){
        return $this->db->get_where($table,$where);
    }
    
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function tampil_obat(){
        return $this->db->get_where('obat');
    }

    public function find($id){
        $result = $this->db->where('id_obat',$id)->limit(1)->get('obat');
        if($result->num_rows()>0){
            return $result->row();

        }else{
            return array();
        }
    }

    public function detail_obat($id_obat){
    $result= $this->db->where('id_obat',$id_obat)->get('obat');
    if($result->num_rows() > 0){
        return $result->result();
    }else{
        return false;
    }
    }
}