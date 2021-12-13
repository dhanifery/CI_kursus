<?php
class Paket extends CI_Controller{

  function __construct()
  {
     parent::__construct();
     $this->load->model(['M_paket','M_instruktur']);
     $this->load->helper('url');
  }


  public function index()
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
     $this->db->like('nama',$data['keyword']);
     $this->db->from('paket');

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

     $data['judul'] = 'Data Paket';
     $data['user'] = $this->db->get_where('user',['name'=>
     $this->session->userdata('name')])->row_array();
     $data['start'] = $this->uri->segment(3);
     $data['paket'] = $this->M_paket->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result();
     $data['row'] = $this->M_paket->get();
     $this->load->view('utama/v_header',$data);
     $this->load->view('paket/index',$data);
     $this->load->view('utama/v_footer',$data);

  }


  public function tambah()
  {
    $paket = new stdClass();
    $paket->id = null;
    $paket->nama = null;
    $paket->harga = null;
    $paket->byk_pertemuan = null;



      $data = array(
        'page' => 'add',
        'row' => $paket,
      );

      $data['judul'] = 'Data Paket';
      $data['user'] = $this->db->get_where('user',['name'=>
      $this->session->userdata('name')])->row_array();
      $this->load->view('utama/v_header',$data);
      $this->load->view('paket/v_inputpaket',$data);
      $this->load->view('utama/v_footer',$data);

  }

  public function edit($id)
  {
    $query = $this->M_paket->get($id);
    if($query->num_rows() > 0) {
      $paket = $query->row();
      $instruktur = $this->M_instruktur->index();

      $data = array(
        'page' => 'edit',
        'row' => $paket,
        'instruktur' => $instruktur
      );

      $data['judul'] = 'Data Paket';
      $data['user'] = $this->db->get_where('user',['name'=>
      $this->session->userdata('name')])->row_array();
      $this->load->view('utama/v_header',$data);
      $this->load->view('paket/v_inputpaket',$data);
      $this->load->view('utama/v_footer',$data);
    }else {
      echo "<script>alert('Data berhasil disimpan');</script>";
      echo "<script>window.location='".site_url('Paket')."';</script>";
    }
  }

  public function proses()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($_POST['add'])) {
      $this->M_paket->add($post);
    } else if (isset($_POST['edit'])) {
      $this->M_paket->edit($post);
    }
    if ($this->db->affected_rows() > 0 ) {
      echo "<script>alert('Data berhasil disimpan');</script>";
    }
    echo "<script>window.location='".site_url('Paket')."';</script>";
  }



  public function del($id)
  {
    $this->M_paket->del($id);
    if ($this->db->affected_rows() > 0 ) {
      echo "<script>alert('Data berhasil dihapus');</script>";
    }
    echo "<script>window.location='".site_url('Paket')."';</script>";
  }
}
