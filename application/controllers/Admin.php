<?php
class Admin extends CI_Controller{

  public function __construct()
  {
       parent::__construct();
       is_logged_in();


  }
  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user',['name'=>
    $this->session->userdata('name')])->row_array();
    $this->load->view('utama/v_header',$data);
    $this->load->view('admin/index',$data);
    $this->load->view('utama/v_footer',$data);
  }

  public function profil()
  {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user',['name'=>
    $this->session->userdata('name')])->row_array();
    $this->load->view('utama/v_header',$data);
    $this->load->view('profil/myprofil',$data);
    $this->load->view('utama/v_footer',$data);
  }

  public function edit()
  {
       $this->form_validation->set_rules('name', 'Nama', 'required|min_length[2]|trim|is_unique[user.name]',[
        'required' => '%s tidak boleh kosong!',
        'min_length' => '%s Minimal 2 karakter!',
        'is_unique' => '%s sudah digunakan!'
      ]);

      if ($this->form_validation->run()== false){

        $data['judul'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user',['name'=>
        $this->session->userdata('name')])->row_array();
        // $data['user'] = $this->M_relasi->get_relasi()->result();
        $this->load->view('utama/v_header',$data);
        $this->load->view('profil/editprofil',$data);
        $this->load->view('utama/v_footer',$data);
  }else {
       $name = $this->input->post('name');
       $email = $this->input->post('email');

       $upload_image = $_FILES['image']['name'];


       if($upload_image){
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/profil/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                 $new_image = $this->upload->data('file_name');
                 $this->db->set('image', $new_image);
            }else {
                 echo $this->upload->display_errors();
            }
       }

       $this->db->set('name', $name);
       $this->db->where('email', $email);

       $this->db->update('user');
       echo "<script>alert('Data Profil Berhasil diedit');</script>";
       redirect('Admin');
  }

 }
}
