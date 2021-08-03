<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_invoice extends CI_Controller {
    public function index(){
        $data['invoice'] = $this->m_invoice->tampil_data();
        $this->load->view('invoice',$data);
    }
    public function detail($id_invoice){
        $data['invoice']= $this->m_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan']= $this->m_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('detail_invoice',$data);
    }
}
