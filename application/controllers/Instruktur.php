<?php
class Instruktur extends CI_Controller{

  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user',['name'=>
    $this->session->userdata('name')])->row_array();
    $this->load->view('v_header',$data);
    $this->load->view('v_sidebar',$data);
    $this->load->view('v_profil',$data);
    $this->load->view('instruktur/index',$data);
    $this->load->view('v_footer');

  }





  public function profil()
  {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user',['name'=>
    $this->session->userdata('name')])->row_array();
    // $data['user'] = $this->M_relasi->get_relasi()->result();
    $this->load->view('v_header',$data);
    $this->load->view('v_sidebar',$data);
    $this->load->view('v_profil',$data);
    $this->load->view('profil/myprofil',$data);
    $this->load->view('v_footer',$data);
  }
}
