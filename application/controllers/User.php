<?php
class User extends CI_Controller{

  public function index()
  {

    $data['judul'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user',['name'=>
    $this->session->userdata('name')])->row_array();
    $this->load->view('utama/v_header',$data);
    $this->load->view('user/index',$data);
    $this->load->view('utama/v_footer',$data);
  }

  public function profil()
  {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user',['name'=>
    $this->session->userdata('name')])->row_array();
    // $data['user'] = $this->M_relasi->get_relasi()->result();
    $this->load->view('utama/v_header',$data);
    $this->load->view('profil/myprofil',$data);
    $this->load->view('utama/v_footer',$data);
  }
}
