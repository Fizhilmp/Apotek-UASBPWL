<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class c_user extends CI_Controller {
    
    public function index(){
		$data['obat'] = $this->m_obat->tampil_obat()->
        result();
        $this->load->view('user',$data);
		
	}

    public function tambah_ke_keranjang($id){
        $obat= $this->m_obat->find($id);

        $data = array(
            'id'      => $obat->id_obat,
            'qty'     => 1,
            'price'   => $obat->harga_obat,
            'name'    => $obat->nama_obat
            
    );
    
    $this->cart->insert($data);
    redirect('/welcome/home_user');
    }

  public function detail_keranjang(){
    $this->load->view('cart');
  }

  public function hapus_keranjang(){
      $this->cart->destroy();
      redirect('/welcome/home_user');
  }

  public function pembayaran(){
    $this->load->view('checkout');
  }
  
  public function proses_pesanan(){

  $is_processed = $this->m_invoice->index();
  if($is_processed){
    $this->cart->destroy();
    $this->load->view('confirmation');
  }else{
    echo "Sorry, your order failed to process";
  }
    
  }

  public function detail($id_obat){
    $data['obat'] = $this->m_obat->detail_obat($id_obat);
    $this->load->view('detail_obat',$data);
  }
}
