<?php
class Crud extends CI_Controller{

  function __construct()
  {
     parent::__construct();
     $this->load->model(['M_relasi','M_instruktur','M_peserta','M_paket']);
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
     $this->db->like('id_jadwal',$data['keyword']);
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

    public function tambah()
    {
      $jadwal = new stdClass();
      $jadwal->id_jadwal = null;
      $jadwal->kode_jadwal = null;
      $jadwal->id_peserta = null;
      $jadwal->id_instr = null;
      $jadwal->id = null;
      $jadwal->jenis_mobil = null;
      $jadwal->tgl_latihan = null;
      $jadwal->jam_latihan = null;

        $instruktur = $this->M_instruktur->index();
        $peserta = $this->M_peserta->index();
        $paket = $this->M_paket->get();


        $data = array(
          'page' => 'add',
          'row' => $jadwal,
          'instruktur' => $instruktur,
          'peserta' => $peserta,
          'paket' => $paket,
        );

        $data['judul'] = 'Data jadwal';
        $data['user'] = $this->db->get_where('user',['name'=>
        $this->session->userdata('name')])->row_array();
        $this->load->view('utama/v_header',$data);
        $this->load->view('jadwal/v_tambah',$data);
        $this->load->view('utama/v_footer',$data);

    }
    public function proses()
    {
      $post = $this->input->post(null, TRUE);
      if (isset($_POST['add'])) {
        $this->M_relasi->add($post);
      } else if (isset($_POST['edit'])) {
        $this->M_relasi->edit($post);
      }
      if ($this->db->affected_rows() > 0 ) {
      }
      echo "<script>window.location='".site_url('Transaksi/tambah')."';</script>";
    }

    public function detail()
    {
         $data['judul'] ='Jadwal';
         $data['user'] = $this->db->get_where('user',['name'=>
         $this->session->userdata('name')])->row_array();
         $data['jadwal'] = $this->M_relasi->get_relasi()->result();
         $this->load->view('utama/v_header',$data);
         $this->load->view('jadwal/v_detail', $data);
         $this->load->view('utama/v_footer',$data);
    }
}
