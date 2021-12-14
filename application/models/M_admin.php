<?php

class M_admin extends CI_Model
{
  // function index()
  // {
  //     return $this->db->get('user');
  // }
  // function tampil_data($limit,$start,$keyword = null)
  // {
  //   if ($keyword) {
  //     $this->db->like('id_jadwal',$keyword);
  //   }
  //   return $this->db->get('jadwal',$limit,$start);
  //
  // }
  function get_relasi($id = null)
  {
     $this->db->select('user.*, user_role.role as name_role');
     $this->db->from('user');
     $this->db->join('user_role','user_role.role_id = user.role_id','inner');
     if ($id != null) {
       $this->db->where('id',$id);
     }
     return $this->db->get();
  }

  // public function add($post)
  // {
  //   $params = [
  //     'kode_jadwal' =>  $post['kode_jadwal'],
  //     'id_peserta' =>  $post['id_peserta'],
  //     'id_instr' => $post['id_instr'],
  //     'id' => $post['id'],
  //     'jenis_mobil' => $post['jenis_mobil'],
  //     'tgl_latihan' => $post['tgl_latihan'],
  //     'jam_latihan' => $post['jam_latihan']
  //
  //   ];
  //   $this->db->insert('jadwal',$params);
  //
  // }
  //
  //
  //
  // function countJadwal()
  // {
  //   return $this->db->get('jadwal')->num_rows();
  // }


}
