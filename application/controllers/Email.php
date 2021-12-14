<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
	public function index()
	{
          $data['judul'] = 'Dashboard';
          $data['user'] = $this->db->get_where('user',['name'=>
          $this->session->userdata('name')])->row_array();
          $this->load->view('utama/v_header',$data);
          $this->load->view('email/index',$data);
          $this->load->view('utama/v_footer',$data);
	}
}
