<?php
class Dashboard extends CI_Controller{

  function __construct()
  {
     parent::__construct();
     $this->load->helper('url');
  }
  function index()
  {
    $data['judul']='Halaman Depan';
    $this->load->view('dashboard',$data);
  }

}
