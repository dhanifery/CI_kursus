<?php
class Crud_peserta extends CI_Controller{

  function __construct()
  {
     parent::__construct();
     $this->load->model('M_peserta');
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
       $this->db->from('peserta');

       $config['base_url']='http://localhost/CI/index.php/Crud_peserta/index';
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

       $data['judul'] ='Data Peserta';
       $data['start'] = $this->uri->segment(3);
       $data['peserta'] = $this->M_peserta->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result();
       $this->load->view('v_header',$data);
       $this->load->view('v_header2',$data);
       $this->load->view('peserta/v_tampilpeserta', $data);
       $this->load->view('v_footer',$data);

    }


    function tambah()
    {
       $this->form_validation->set_rules('username', 'Nama', 'required|min_length[2]',
        array('min_length'=> '%s Minimal 2 karakter !'));

       $this->form_validation->set_rules('password_peserta', 'Password', 'required|min_length[5]',
       array('min_length'=> '%s Minimal 5 karakter !'));
       $this->form_validation->set_rules('JK_peserta', 'Jenis Kelamin', 'required');

       $this->form_validation->set_message('required', '%s masih kosong, silahkan isi !');

       if ($this->form_validation->run()== false)
        {
          $data['judul']='Data Peserta';
          $data['peserta'] = $this->M_peserta->index()->result();
          $this->load->view('v_header',$data);
          $this->load->view('v_header2',$data);
          $this->load->view('peserta/v_inputpeserta',$data);
          $this->load->view('v_footer',$data);
        }
        else {
          $username=$this->input->post('username');
          $email_peserta=$this->input->post('email_peserta');
          $password_peserta=$this->input->post('password_peserta');
          $alamat_peserta=$this->input->post('alamat_peserta');
          $no_telp=$this->input->post('no_telp');
          $TTL_peserta=$this->input->post('TTL_peserta');
          $JK_peserta=$this->input->post('JK_peserta');

          $data = array(
             'username' => $username,
             'email_peserta' => $email_peserta,
             'password_peserta' => $password_peserta,
             'alamat_peserta' => $alamat_peserta,
             'no_telp' => $no_telp,
             'TTL_peserta' => $TTL_peserta,
             'JK_peserta' => $JK_peserta
          );
          $this->M_peserta->input_data($data, 'peserta');
          if ($this->db->affected_rows() > 0 ) {
            echo "<script>alert('Data Berhasil disimpan');</script>";
          }
          echo "<script>window.location='".site_url('Crud_peserta')."';</script>";
        }

    }
    function edit($id_peserta)
    {
      $this->form_validation->set_rules('username', 'Nama', 'required|min_length[2]|callback_username_check',
       array('min_length'=> '%s Minimal 2 karakter !'));

      $this->form_validation->set_rules('password_peserta', 'Password', 'required|min_length[5]');
      $this->form_validation->set_rules('JK_peserta', 'Jenis Kelamin', 'required');

      $this->form_validation->set_message('required', '%s masih kosong, silahkan isi !');

      if ($this->form_validation->run()== false)
      {
        $where = array('id_peserta' => $id_peserta );
        $data['judul']='Data Peserta';
        $data['peserta']=$this->M_peserta->edit_data($where,'peserta')->result();
        $this->load->view('v_header',$data);
        $this->load->view('v_header2',$data);
        $this->load->view('peserta/v_editpeserta',$data);
        $this->load->view('v_footer',$data);
      }
      else {
        $id_peserta=$this->input->post('id_peserta');
        $username=$this->input->post('username');
        $email_peserta=$this->input->post('email_peserta');
        $password_peserta=$this->input->post('password_peserta');
        $alamat_peserta=$this->input->post('alamat_peserta');
        $no_telp=$this->input->post('no_telp');
        $TTL_peserta=$this->input->post('TTL_peserta');
        $JK_peserta=$this->input->post('JK_peserta');
        $data = array(
          'username' => $username,
          'email_peserta' => $email_peserta,
          'password_peserta' => $password_peserta,
          'alamat_peserta' => $alamat_peserta,
          'no_telp' => $no_telp,
          'TTL_peserta' => $TTL_peserta,
          'JK_peserta' => $JK_peserta
       );
        $where = array('id_peserta' =>$id_peserta );
        $this->M_peserta->update_data($where,$data,'peserta');
        if ($this->db->affected_rows() > 0 ) {
          echo "<script>alert('Data Berhasil disimpan');</script>";
        }
        echo "<script>window.location='".site_url('Crud_peserta')."';</script>";
      }

    }
    function username_check()
    {
      $post =$this->input->post(null,TRUE);
      $query = $this->db->query("SELECT * FROM peserta WHERE username = '$post[username]' AND id_peserta != '$post[id_peserta]'");
      if ($query->num_rows() > 0 ) {
        $this->form_validation->set_message('username_check', '{field} ini sudah dipakai,silahkan ganti !');
        return FALSE;
      }
      else {
        return TRUE;
      }
    }

    function hapus($id_peserta) {
       $where = array('id_peserta' => $id_peserta );
       $this->M_peserta->hapus_data($where,'peserta');
       if ($this->db->affected_rows() > 0 ) {
         echo "<script>alert('Data Berhasil dihapus');</script>";
       }
       echo "<script>window.location='".site_url('Crud_peserta')."';</script>";
     }


     function excel()
     {
       $data['judul'] ='Jadwal';
       $data['start'] = $this->uri->segment(3);
       $data['peserta'] = $this->M_peserta->tampil_data($config['per_page'],$data['start'],$data['keyword'])->result();
       $this->load->view('v_header',$data);
       $this->load->view('v_header2',$data);
       $this->load->view('peserta/v_tampilpeserta', $data);
       $this->load->view('v_footer',$data);

       require(APPATH. 'PHPExcel/Classes/PHPExcel.php');
       require(APPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

       $objPHPExcel = new PHPExcel();

       $objPHPExcel->getProperties()->setCreator("idr corner");
       $objPHPExcel->getProperties()->setLastModifiedBy("idr corner");
       $objPHPExcel->getProperties()->setTitle("Daftar Peserta");
       $objPHPExcel->getProperties()->setSubject("");
       $objPHPExcel->getProperties()->setDescription("");

       $objPHPExcel->setActiveSheetIndex(0);

       $objPHPExcel->getActiveSheet()->setCellValue('A1','NO');
       $objPHPExcel->getActiveSheet()->setCellValue('B1','NAMA PESERTA');
       $objPHPExcel->getActiveSheet()->setCellValue('C1','EMAIL');
       $objPHPExcel->getActiveSheet()->setCellValue('D1','TTL');
       $objPHPExcel->getActiveSheet()->setCellValue('E1','JENIS KELAMIN');


       $baris= 2;
       $no = 1;
       foreach ($data['peserta'] as $psr ) {
         $objPHPExcel->getActiveSheet()->setCellValue('A',$baris,$no++);
         $objPHPExcel->getActiveSheet()->setCellValue('B',$baris,$psr->username);
         $objPHPExcel->getActiveSheet()->setCellValue('C',$baris,$psr->email_peserta);
         $objPHPExcel->getActiveSheet()->setCellValue('D',$baris,$psr->TTL_peserta);
         $objPHPExcel->getActiveSheet()->setCellValue('E',$baris,$psr->JK_peserta);

         $baris++;
       }

       $filename="Data_peserta" .date("d-m-y").'.xlsx';
       $objPHPExcel->getActiveSheet()->setTitle("Data Peserta");

       header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
       header('Content-Disposition: attachment;filename ="' .$filename. '"');
       header('Cache-Control: max-age=0');

       $writer=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
       $writer->save('php://output');

       exit;


     }
  }
