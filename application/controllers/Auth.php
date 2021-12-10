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
    $this->load->view('halamanlogin/auth_login');
    $this->load->view('templates/auth_footer');
  }
  public function proses()
  {
    $this->form_validation->set_rules('name', 'Nama', 'required|trim',[
      'required' => '%s tidak boleh kosong!',
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim',[
      'required' => '%s tidak boleh kosong!'
    ]);
    if ($this->form_validation->run() == false){

      $data['title']='B I S T I R | Login Registrasi ';
      $this->load->view('templates/auth_header',$data);
      $this->load->view('halamanlogin/auth_login');
      $this->load->view('templates/auth_footer');

    } else {
          $this->_login();
      }
    }

  private function _login()
    {
      $name = $this->input->post('name');
      $password = $this->input->post('password');

      $user = $this->db->get_where('user',['name' => $name])->row_array();

      if($user) {
        if($user['is_active'] == 1){
          if(password_verify($password, $user['password'])){
            $data =[
              'name' => $user['name'],
              'role_id' => $user['role_id']
            ];
            $this->session->set_userdata($data);
            if ($user['role_id'] == 1) {
              echo "<script>
              alert('Selamat anda berhasil login');
              window.location='" .site_url('Admin'),"';
              </script>";
            }
            elseif ($user['role_id'] == 2) {
              echo "<script>
              alert('Selamat anda berhasil login');
              window.location='" .site_url('User'),"';
              </script>";
            }
            else {
                echo "<script>
                alert('Selamat anda berhasil login');
                window.location='" .site_url('Instruktur'),"';
                </script>";
            }


          }else {
            echo "<script>
            alert('Password salah');
            window.location='" .site_url('Auth'),"';
            </script>";
          }

        }
      }else {
        echo "<script>
        alert('Username tidak terdaftar');
        window.location='" .site_url('Auth'),"';
        </script>";
      }
    }


  public function registrasi()
  {
    $this->form_validation->set_rules('name', 'Nama', 'required|min_length[2]|trim|is_unique[user.name]',[
      'required' => '%s tidak boleh kosong!',
      'min_length' => '%s Minimal 2 karakter!',
      'is_unique' => '%s sudah digunakan!'
    ]);
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
    ['required' => '%s tidak boleh kosong!',
     'is_unique' => '%s sudah digunakan!']);
    $this->form_validation->set_rules('password', 'Password', 'trim|min_length[5]',[
      'min_length' => '%s minimal 5 karakter!'
    ]);

    if ($this->form_validation->run()== false){

      $data['title']='B I S T I R | Registrasi';
      $this->load->view('halamanlogin/auth_regis',$data);

    } else {
      $data = [
        'name' => htmlspecialchars($this->input->post('name')),
        'email' => htmlspecialchars($this->input->post('email')),
        'image' => 'default.jpg',
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'role_id' => '2',
        'is_active' => '1',
        'date_created' =>time()
      ];

      $this->db->insert('user',$data);
      echo "<script>
            alert('Selamat, Akun anda telah terdaftar silahkan login');
            window.location='" .site_url('Auth'),"';
            </script>";
    }



  }

  public function logout()
  {
    $this->session->unset_userdata('name');
    $this->session->unset_userdata('role_id');

    echo "<script>
          alert('Anda telah log out!');
          window.location='" .site_url('Auth'),"';
          </script>";
  }
}
