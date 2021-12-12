<?php
class Crud_instruktur extends CI_Controller{

  function __construct()
  {
     parent::__construct();
     $this->load->model('M_instruktur');
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
       $this->db->like('username',$data['keyword']);
       $this->db->from('instruktur');

       $config['base_url']='http://localhost/CI/index.php/Crud_instruktur/index';
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

        $data['judul'] ='Data Instruktur';
        $data['user'] = $this->db->get_where('user',['name'=>
        $this->session->userdata('name')])->row_array();
       $data['start'] = $this->uri->segment(3);
       $data['instruktur'] = $this->M_instruktur->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result();
       $this->load->view('utama/v_header',$data);
       $this->load->view('instruktur/v_tampilinstruktur', $data);
       $this->load->view('utama/v_footer',$data);

    }


    function tambah()
    {
       $this->form_validation->set_rules('username', 'Nama', 'required|min_length[2]',
        array('min_length'=> '%s Minimal 2 karakter !'));

       $this->form_validation->set_rules('password_instr', 'Password', 'required|min_length[5]',
       array('min_length'=> '%s Minimal 5 karakter !'));
       $this->form_validation->set_rules('JK_instr', 'Jenis Kelamin', 'required');

       $this->form_validation->set_message('required', '%s masih kosong, silahkan isi !');

       if ($this->form_validation->run()== false)
        {
          $data['judul']='Data Instruktur';
          $data['user'] = $this->db->get_where('user',['name'=>
          $this->session->userdata('name')])->row_array();
          $data['instruktur'] = $this->M_instruktur->index()->result();
          $this->load->view('utama/v_header',$data);
          $this->load->view('instruktur/v_inputinstruktur',$data);
          $this->load->view('utama/v_footer',$data);
        }
        else {
          $username=$this->input->post('username');
          $email_instr=$this->input->post('email_instr');
          $password_instr=$this->input->post('password_instr');
          $alamat_instr=$this->input->post('alamat_instr');
          $telp_instr=$this->input->post('telp_instr');
          $TTL_instr=$this->input->post('TTL_instr');
          $JK_instr=$this->input->post('JK_instr');
          $honor_per_jam=$this->input->post('honor_per_jam');

          $data = array(
             'username' => $username,
             'email_instr' => $email_instr,
             'password_instr' => $password_instr,
             'alamat_instr' => $alamat_instr,
             'telp_instr' => $telp_instr,
             'TTL_instr' => $TTL_instr,
             'JK_instr' => $JK_instr,
             'honor_per_jam' => $honor_per_jam
          );
          $this->M_instruktur->input_data($data, 'instruktur');
          if ($this->db->affected_rows() > 0 ) {
            echo "<script>alert('Data Berhasil disimpan');</script>";
          }
          echo "<script>window.location='".site_url('Crud_instruktur')."';</script>";
        }

    }
    function edit($id_instr)
    {
      $this->form_validation->set_rules('username', 'Nama', 'required|min_length[2]|callback_username_check',
       array('min_length'=> '%s Minimal 2 karakter !'));

      $this->form_validation->set_rules('password_instr', 'Password', 'required|min_length[5]');
      $this->form_validation->set_rules('JK_instr', 'Jenis Kelamin', 'required');

      $this->form_validation->set_message('required', '%s masih kosong, silahkan isi !');

      if ($this->form_validation->run()== false)
      {
        $where = array('id_instr' => $id_instr );
        $data['judul']='Data instruktur';
        $data['user'] = $this->db->get_where('user',['name'=>
        $this->session->userdata('name')])->row_array();
        $data['instruktur']=$this->M_instruktur->edit_data($where,'instruktur')->result();
        $this->load->view('utama/v_header',$data);
        $this->load->view('instruktur/v_editinstruktur',$data);
        $this->load->view('utama/v_footer',$data);
      }
      else {
        $id_instr=$this->input->post('id_instr');
        $username=$this->input->post('username');
        $email_instr=$this->input->post('email_instr');
        $password_instr=$this->input->post('password_instr');
        $alamat_instr=$this->input->post('alamat_instr');
        $telp_instr=$this->input->post('telp_instr');
        $TTL_instr=$this->input->post('TTL_instr');
        $JK_instr=$this->input->post('JK_instr');
        $honor_per_jam=$this->input->post('honor_per_jam');

        $data = array(
          'username' => $username,
          'email_instr' => $email_instr,
          'password_instr' => $password_instr,
          'alamat_instr' => $alamat_instr,
          'telp_instr' => $telp_instr,
          'TTL_instr' => $TTL_instr,
          'JK_instr' => $JK_instr,
          'honor_per_jam' =>$honor_per_jam
       );
        $where = array('id_instr' =>$id_instr );
        $this->M_instruktur->update_data($where,$data,'instruktur');
        if ($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data Berhasil disimpan');</script>";
        }
        echo "<script>window.location='".site_url('Crud_instruktur')."';</script>";
      }

    }
    function username_check()
    {
      $post =$this->input->post(null,TRUE);
      $query = $this->db->query("SELECT * FROM peserta WHERE username = '$post[username]' AND id_peserta != '$post[id_instr]'");
      if ($query->num_rows() > 0 ) {
        $this->form_validation->set_message('username_check', '{field} ini sudah dipakai,silahkan ganti !');
        return FALSE;
      }
      else {
        return TRUE;
      }
    }

    function hapus($id_instr) {
       $where = array('id_instr' => $id_instr );
       $this->M_instruktur->hapus_data($where,'instruktur');
       if ($this->db->affected_rows() > 0 ) {
         echo "<script>alert('Data Berhasil dihapus');</script>";
       }
       echo "<script>window.location='".site_url('Crud_instruktur')."';</script>";
     }



  }
