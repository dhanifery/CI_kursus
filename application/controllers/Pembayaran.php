<?php
class Pembayaran extends CI_Controller{

     function __construct()
     {

     parent::__construct();
     $this->load->model('M_pembayaran');
     $this->load->helper('url');

     }



  public function index()
  {

    $data['judul'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user',['name'=>
    $this->session->userdata('name')])->row_array();
    $this->load->view('user/v_header',$data);
    $this->load->view('user/index',$data);
    $this->load->view('user/v_footer',$data);
  }

  public function profil()
  {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user',['name'=>
    $this->session->userdata('name')])->row_array();
    // $data['user'] = $this->M_relasi->get_relasi()->result();
    $this->load->view('user/v_header',$data);
    $this->load->view('profil/myprofil',$data);
    $this->load->view('user/v_footer',$data);
  }



}
