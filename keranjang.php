<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class keranjang extends CI_Controller {
  
  public function __construct()

         {

          parent::__construct();
          $this->load->database();
          $this->load->library('session');

         }
  
  public function additem()

        {

          $id = $this->uri->segment(3);
          $this->load->model('m_brg');
          $this->load->library('cart');
          echo $id;
          if($brg = $this->m_brg->getitem($id)) {
            $data = array(
              'id' => $id,
              'name' => $brg->nama,
              'qty' => 1,
              'price' => $brg->harga,
              'options' => array('gambar' =>$brg->gambar)
              );

              if ($this->cart->insert($data)) {
                    echo $this->session->set_flashdata('message', 'berhasil...!!!');
                    redirect('main/cart');
              }
                else {
                    echo $this->session->set_flashdata('message', 'gagal...!!!');
                    redirect('main/index');
                }
        }
          
      }
      
 public function remove() {
   
   $this->load->library('cart');

  $data = array(
      'rowid' =>$this->uri->segment(3),
      'qty' => 0 
      );
      $this->cart->update($data);
   
 redirect('main/cart');
   
 }
 public function hapus() {
   
   $this->load->library('cart');

  $data = array(
      'rowid' =>$this->uri->segment(3),
      'qty' => 0 
      );
      $this->cart->update($data);
   
 redirect('main/index');
   
 }
 public function update()
 {
  $rowid = $this->uri->segment(3);
  $this->load->model('m_brg');
  $this->load->library('cart');
  $cart = $this->cart->contents();
  $submit = $this->input->post('submit');

    if ($submit == "+") {
        $qty = $this->input->post('qty') + "1" ;
        $data = array(
          'rowid' => $rowid,
          'qty' => $qty 
          );
    }
    if ($submit == "-") {
      $qty = $this->input->post('qty') - "1" ;
      $data = array(
        'rowid' => $rowid,
        'qty' => $qty
        );
    }
      if ($this->cart->update($data)) {
        echo $this->session->set_flashdata('message', 'Berhasil..!!!');
        redirect('main/cart');
      }
        else {
          echo $this->session->set_flashdata('message', 'Gagal..!!!');
          redirect('main/cart');
        }
 }
 
}
