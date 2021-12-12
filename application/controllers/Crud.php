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
    // Search

    if ($this->input->post('Search')) {

      $data['keyword'] = $this->input->post('keyword');
      $this->session->set_userdata('keyword',$data['keyword']);
    }
    else {
      $data['keyword']= $this->session->set_userdata('keyword');
    }

    // config
     $this->db->like('kd_jadwal',$data['keyword']);
     $this->db->from('jadwal');

     $config['base_url']='http://localhost/CI/index.php/Crud/index';
     $config['total_rows'] = $this->db->count_all_results();
     $config['num_links']=1;

     $data['total_rows'] = $config['total_rows'];
     $config['per_page']=7;
     $config['full_tag_open']='<nav aria-label="Page navigation example"><ul class="pagination">';
     $config['full_tag_close']='</ul></nav>';

     $config['first_link']='First';
     $config['first_tag_open']='<li class="page-item">';
     $config['first_tag_close']='</li">';

     $config['last_link']='Last';
     $config['last_tag_open']='<li class="page-item">';
     $config['last_tag_close']='</li">';

     $config['next_link']='&raquo';
     $config['next_tag_open']='<li class="page-item">';
     $config['next_tag_close']='</li">';

     $config['prev_link']='&laquo';
     $config['prev_tag_open']='<li class="page-item">';
     $config['prev_tag_close']='</li">';


     $config['cur_tag_open']='<li class="page-item active"><a class="page-link" href="#">';
     $config['cur_tag_close']='</a></li">';

     $config['num_tag_open']='<li class="page-item active">';
     $config['num_tag_close']='</li">';

     $config['attributes'] = array('class' => 'page-link');


    // inisialisasi
     $this->pagination->initialize($config);

     $data['judul'] ='Jadwal';
     $data['user'] = $this->db->get_where('user',['name'=>
     $this->session->userdata('name')])->row_array();
     $data['start'] = $this->uri->segment(3);
     $data['jadwal'] = $this->M_relasi->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result();
     $data['jadwal'] = $this->M_relasi->get_relasi()->result();
     $this->load->view('utama/v_header',$data);
     $this->load->view('jadwal/v_tampil', $data);
     $this->load->view('utama/v_footer',$data);

  }

    function detail()
    {
      $data['judul'] ='Jadwal';
      $data['user'] = $this->db->get_where('user',['name'=>
      $this->session->userdata('name')])->row_array();
      $data['jadwal'] = $this->M_relasi->get_relasi()->result();
      $this->load->view('utama/v_header',$data);
      $this->load->view('jadwal/v_detail', $data);
      $this->load->view('utama/v_footer',$data);
    }
    // function tambah()
    //   $this->form_validation->set_rules('password_peserta', 'Password', 'required|min_length[5]',
    //   array('min_length'=> '%s Minimal 5 karakter !'));
    //   $this->form_validation->set_rules('JK_peserta', 'Jenis Kelamin', 'required');
    //
    //   $this->form_validation->set_message('required', '%s masih kosong, silahkan isi !');
    //
    //   if ($this->form_validation->run()== false)
    //    {
    //      $data['judul']='Data Peserta';
    //      $data['peserta'] = $this->M_relasi->tambah()->result();
    //      $this->load->view('v_header',$data);
    //      $this->load->view('v_header2',$data);
    //      $this->load->view('jadwal/v_tambahjadwal',$data);
    //      $this->load->view('v_footer',$data);
    //    }
    //    else {
    //      $username=$this->input->post('username');
    //      $email_peserta=$this->input->post('email_peserta');
    //      $password_peserta=$this->input->post('password_peserta');
    //      $alamat_peserta=$this->input->post('alamat_peserta');
    //      $no_telp=$this->input->post('no_telp');
    //      $TTL_peserta=$this->input->post('TTL_peserta');
    //      $JK_peserta=$this->input->post('JK_peserta');
    //
    //      $data = array(
    //         'username' => $username,
    //         'email_peserta' => $email_peserta,
    //         'password_peserta' => $password_peserta,
    //         'alamat_peserta' => $alamat_peserta,
    //         'no_telp' => $no_telp,
    //         'TTL_peserta' => $TTL_peserta,
    //         'JK_peserta' => $JK_peserta
    //      );
    //      $this->M_peserta->input_data($data, 'peserta');
    //      if ($this->db->affected_rows() > 0 ) {
    //        echo "<script>alert('Data Berhasil disimpan');</script>";
    //      }
    //      echo "<script>window.location='".site_url('Crud_peserta')."';</script>";
    //    }

}
