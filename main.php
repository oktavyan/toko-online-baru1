<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->library('cart');
  $this->load->model('m_brg');
 }
 
 public function tambah()
 {
  $this->load->view('main/header');
  $this->load->view('main/tambah');
  $this->load->view('main/footer');
}
  public function tambahbrg()
  {
    $this->load->model('m_brg');
         if ($this->input->post('nama')) {
            $nama = $this->input->post('nama');
            $keterangan = $this->input->post('keterangan');
            $harga = $this->input->post('harga');
            $kategori = $this->input->post('kategori');
            $gambar = $this->input->post('foto');
            $lihat = $this->input->post('lihat');
            $this->load->library('upload');
        $config = array(
          'upload_path' => "C:\\xampp\\Oktavyan\\project1\\uploads",
          'allowed_types' => "img|mpeg|mpg|jpg|jpeg|gif|png|bmp|tiff",
            'max_size' => "1000000",
            'max_width' => "1024",
            'max_height' => "1024",
            'encrypt_name' => TRUE
            );
        echo base_url();
        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto')) {
          $data_g = $this->upload->data();
          print_r($data_g);
          $gambar = 'uploads/' . $data_g['file_name'];
          $config_img = array(
          'new_image' => $data_g['file_path'] . '/thumbs/' . $data_g['file_name'],
          'image_library' => 'gd2',
          'source_image' => $data_g['full_path'],
          'create_thumb' => TRUE,
          'maintain_ratio' => TRUE,
          'width' => 100,
          'height' => 75,
          );
        $this->load->library('image_lib',$config_img);
        if ($this->image_lib->resize()){
          $data = array(
               'nama' => $nama,
               'ket' => $keterangan,
               'harga' => $harga,
               'kategori' => $kategori,
               'gambar' => $gambar,
               'lihat' => $lihat
               );
     #$this->m_brg->input_data($data,'barang');
         if ( $this->m_brg->input_data($data,'barang') !== FALSE){
            $this->session->set_flashdata('message','Anda Berhasil Input Data..!!!');
             #redirect('main/index');
        }
       # $this->load->view('main/index',$msg);
       # redirect('main/index');
        }
          else {
           # echo $this->image_lib->display_errors();
            $this->session->set_flashdata('message',$this->image_lib->display_errors());
          }
        }
          else {
            #echo $this->upload->display_errors();
            $this->session->set_flashdata('message',$this->upload->display_errors());
          }
        
       
      }
        else {
          $this->session->set_flashdata('message', 'Data Tidak Boleh Kosong...!!!');
          #redirect('main/index');
        }
     redirect('main/index');
  }
  public function userlogin()
  {
    #getdata
    
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $this->load->model('m_pengguna');

    #verify

      if( $dat = $this->m_pengguna->cek_login($username, $password)) {
         $data = array (
        'login_ok' => TRUE,
        'nama' => $dat->nama,
        'username' => $dat->username
        );

          $this->session->set_userdata($data);
          $this->session->set_flashdata('message', 'Login sukses..!!!');
          redirect('main/index');
        }
        else {
          $this->session->set_userdata('login_ok', FALSE);
          $this->session->set_flashdata('message', 'Gagal Login..!!!');
          redirect('main/checkout');
        }
       
  }

 	public function index()
 	{
    $limit = 6;
            $this->load->model('m_brg');
            $data = $this->m_brg->getall();
           # $data = $this->m_brg->getdata($start = $this->uri->segment(3),$limit);
            $total = $this->m_brg->getcount();
            $prm['data'] = $data;

             $this->load->library('pagination');
            $config['base_url'] = site_url('main/index');
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['total_rows'] = $total;

         //Pagination Bootstrap//
            $config['full_tag_open'] = "";
            $config['full_tag_close'] = "";
            $config['num_tag_open'] = "";
            $config['num_tag_close'] = "";
            $config['cur_tag_open'] = "";
            $config['cur_tag_close'] = "";
            $config['next_tag_open'] = "";
            $config['next_tag_close'] = "";
            $config['prev_tag_open'] = "";
            $config['prev_tag_close'] = "";
            $config['first_tag_open'] = "";
            $config['firts_tag_close'] = "";
            $config['last_tag_open'] = "";
            $config['last_tag_close'] = "";
         //end//

  	$this->load->view('main/header');
  	$this->load->view('main/index', $prm);
  	$this->load->view('main/footer', $prm);
 	}
  public function userlogout()
  {
    $this->session->unset_userdata('login_ok');
    redirect('main/index');
  }
  public function blog()
  {
    $this->load->view('main/header');
    $this->load->view('main/blog');
    $this->load->view('main/footer');
  }
  public function blogz()
  {
    $this->load->view('main/header');
    $this->load->view('main/blog-detail');
    $this->load->view('main/footer');
  }
  public function cart()
  {

    $this->load->view('main/header');
    $this->load->view('main/cart');
    $this->load->view('main/footer');
  }
  public function contact()
  {
    $this->load->view('main/header');
    $this->load->view('main/contact');
    $this->load->view('main/footer');
  }
  public function checkout()
  {
    $this->load->view('main/header');
    $this->load->view('main/checkout');
    $this->load->view('main/footer');
  }
  public function notfound()
  {
    $this->load->view('main/header');
    $this->load->view('main/404');
    $this->load->view('main/footer');
  }
  public function detail()
  {
    $limit = 6;
            $this->load->model('m_brg');
            $data = $this->m_brg->getall();
           # $data = $this->m_brg->getdata($start = $this->uri->segment(3),$limit);
            $total = $this->m_brg->getcount();
            $prm['data'] = $data;

            $this->load->library('pagination');
            $config['base_url'] = site_url('main/index');
            $config['per_page'] = $limit;
            $config['uri_segment'] = 3;
            $config['total_rows'] = $total;
            $this->pagination->initialize($config);
            $link = $this->pagination->create_links();
            $prm['hal'] = $link;


    $this->load->view('main/header');
    $this->load->view('main/detail', $prm);
    $this->load->view('main/footer', $prm);
  }
  public function userpage()
         {
            $this->load->model('m_pengguna');
            $data = $this->uri->segment(3);
            $cari = $this->m_pengguna->search('username',$data);

            $prm['data'] = $cari;
            

            $this->load->view('main/header');

            $this->load->view('main/userpage', $prm);

            $this->load->view('main/footer',$prm);
           
         }
  public function pending()
  {
   $this->load->model('m_pengguna');
            $data = $this->m_pengguna->innerjoin_trxstatus('transaksi','detail',0,$this->uri->segment(3)); 
            $prm['pending'] = $data;
            $cari = $this->m_pengguna->search('username',$this->uri->segment(3));
            $prm['data'] = $cari;

            $this->load->view('main/header');
            $this->load->view('main/userpage',$prm);
            $this->load->view('main/footer');
  }
  public function payment()
  {
  $this->load->view('main/header');
  $this->load->view('main/payment');
  $this->load->view('main/footer');
  }
  public function wishlist()
  {
    $this->load->view('main/header');
    $this->load->view('main/wishlist');
    $this->load->view('main/footer');
  }
  public function daftar()
  {
    $this->load->view('main/header');
    $this->load->view('main/list');
    $this->load->view('main/footer');
  }
  public function register()
  {
    $this->load->view('main/header');
    $this->load->view('main/register');
    $this->load->view('main/footer');
  }
  public function confirmbuy()
  {
    $this->load->view('main/header');
    $this->load->view('main/confirmbuy');
    $this->load->view('main/footer');
  }
  public function user()
  {
   $this->load->model('m_pengguna');
            $this->load->helper('date');
            if ($this->input->post('username')) {
               $usr = $this->input->post('username');
               $pass = $this->input->post('password');
               $nama = $this->input->post('name');
               $lastlog = date('Y-m-d H:i:s');
    
            $data = array(
               'username' => $usr,
               'password' => $pass,
               'nama' => $nama,
               'lastlogin' => $lastlog
               );
            $this->m_pengguna->input_data($data,'pengguna');
            redirect('main/user/'.$usr); 
            //$data = $this->m_pengguna->getall();
            //$data = $this->m_pengguna->getdata($start = $this->uri->segment(3),$limit);
            //$total = $this->m_pengguna->getcount();
            //$cari = $this->m_pengguna->search('usr',$usr);
            //$prm['data'] = $cari;
            //$prm['data'] = $data;
            //}

            /*$this->load->view('main/header');

            $this->load->view('main/user');

            $this->load->view('main/footer');*/
          }
  }
  public function transaksi()
  {
    $this->load->model('m_pengguna');
            $this->load->helper('date');
            $tgl = date('Y-m-d H:i:s');
            $userid = $this->session->userdata('username');
            $total = $this->cart->total_items();
            $ekspedisi = $this->input->post('ekspedisi');
            $tujuan = $this->input->post('tujuan');
            $status = 0;
            if ($ekspedisi == "JNE") {
               $ongkir = "Rp.8000/km";
            }
            if ($ekspedisi == "MEX_Berlin") {
               $ongkir = "Rp.7000/km";
            }
            if ($ekspedisi == "POS_Indonesia") {
               $ongkir = "Rp.6000/km";
            }
            if ($ekspedisi == "BRE") {
               $ongkir = "Rp.5000/km";
            }
            if ($ekspedisi == "Indah_Cargo") {
               $ongkir = "Rp.4000/km";
            }$data = array(
               'tanggal' => $tgl,
               'userid' => $userid,
               'total' => $total,
               'status' => $status,
               'ekspedisi' => $ekspedisi,
               'tujuan' => $tujuan,
               'ongkir' => $ongkir
               );
            $id = $this->m_pengguna->input_data($data,'transaksi');
             if ($id !== FALSE){
                 $cart = $this->cart->contents();
                 foreach ($cart as $item) {
                  $data = array(
                     'trxid' => $id,
                     'itemid' => $item['id'],
                     'qty' => $item['qty'],
                     'harga' => $item['price'] 
                     );
                     $this->m_pengguna->input_data($data,'detail');  
                 }
                  $this->cart->destroy();
                   echo $this->session->set_flashdata('message', 'anda berhasil input data...!!!');
                        redirect('main/index');
               }
               else {
                  echo $this->session->set_flashdata('message', 'anda gagal input data...!!!');
                        redirect('main/index');
               }
            redirect('main/index');

          }
          public function cek()
          {
            $this->load->view('main/header');
            $this->load->view('main/cek');
            $this->load->view('main/footer');

          }
  
}
