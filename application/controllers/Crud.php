<?php
class Crud extends CI_Controller{

  function __construct()
  {
     parent::__construct();
     $this->load->model('M_relasi');
     $this->load->helper('url');
  }
  function index()
  {
     $data['jadwal'] = $this->M_relasi->get_relasi()->result();
     $this->load->view('v_tampil', $data);
  }

}
