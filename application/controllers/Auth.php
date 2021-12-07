<?php
class Auth extends CI_Controller{

  function __construct()
  {
     parent::__construct();
     $this->load->helper('url');
  }
  public function index()
  {
    $data['title']='B I S T I R | Login ';
    $this->load->view('templates/auth_header',$data);
    $this->load->view('login/v_login',);
    $this->load->view('templates/auth_footer');

  }
  public function proses()
  {
    $post = $this->input->post(null,TRUE);
    if(isset($_POST['submit'])){
      $this->load->model('M_login');
      $query = $this->M_login->login($post);
      if($query->num_rows() > 0 ){
        $row = $query->row();
        $params = array(
          'id_admin' => $row->id_admin,
          'username' => $row->username
        );
        $this->session->set_userdata($params);
        echo "<script>
              alert('Selamat, Login Berhasil');
              window.location='" .site_url('Dashboard'),"';
              </script>";
      }
      else {
        echo "<script>
              alert('Login Gagal');
              window.location='" .site_url('Auth'),"';
              </script>";
      }
    }
  }
}
