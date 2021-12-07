<?php
class Dashboard extends CI_Controller{

  function __construct()
  {
     parent::__construct();
     $this->load->helper('url');
  }
  public function index()
  {
    $data['judul']='Dashboard';
    $this->load->view('v_header',$data);
    $this->load->view('v_header2',$data);
    $this->load->view('v_dashadmin',$data);
    $this->load->view('v_footer',$data);
  }

}
